<?php

namespace app\controllers;

use PDOException;
use core\Utils;
use core\ParamUtils;
use core\App;

class UserProductSetCtrl
{
    private $userId;
    private $selectedProducts = [];

    public function action_userProductSet()
    {
        $this->handleProductSetView();
    }

    public function action_userProductSetSave()
    {
        $this->handleProductSetSave();
    }

    private function handleProductSetView()
    {
        try {
            $this->validateEditRequest();
            $this->prepareViewData();
            $this->displayView();
        } catch (PDOException $e) {
            $this->handleDatabaseError($e);
        }
    }

    private function handleProductSetSave()
    {
        try {
            if ($this->validateSaveRequest()) {
                $this->processProductSetUpdate();
                $this->redirectAfterSuccess();
            } else {
                $this->prepareViewData();
                $this->displayView();
            }
        } catch (PDOException $e) {
            $this->handleDatabaseError($e);
        }
    }

    private function prepareViewData()
    {
        $categories = $this->fetchCategoriesWithProducts();
        $userSelections = $this->fetchUserSelections();

        App::getSmarty()->assign([
            'groupedCategories' => $this->groupCategories($categories),
            'selectedProducts' => $this->mapSelections($userSelections),
            'userId' => $this->userId
        ]);
    }

    private function fetchCategoriesWithProducts()
    {
        return App::getDB()->select("product_categories", [
            "[>]products" => ["id" => "category_id"]
        ], [
            "product_categories.id (category_id)",
            "product_categories.name (category_name)",
            "products.id (product_id)",
            "products.name (product_name)"
        ]);
    }

    private function fetchUserSelections()
    {
        return App::getDB()->select("user_product_sets", [
            "[>]products" => ["product_id" => "id"],
            "[>]product_categories" => ["products.category_id" => "id"]
        ], [
            "product_categories.id (category_id)",
            "products.id (product_id)"
        ], [
            "user_product_sets.user_id" => $this->userId
        ]);
    }

    private function groupCategories(array $categories)
    {
        $grouped = [];
        foreach ($categories as $entry) {
            $categoryId = $entry['category_id'];

            if (!isset($grouped[$categoryId])) {
                $grouped[$categoryId] = [
                    'category_name' => $entry['category_name'],
                    'products' => []
                ];
            }

            if ($entry['product_id']) {
                $grouped[$categoryId]['products'][] = [
                    'product_id' => $entry['product_id'],
                    'product_name' => $entry['product_name']
                ];
            }
        }
        return $grouped;
    }

    private function mapSelections(array $selections)
    {
        $mapped = [];
        foreach ($selections as $set) {
            $mapped[$set['category_id']] = $set['product_id'];
        }
        return $mapped;
    }

    private function processProductSetUpdate()
    {
        $this->deleteExistingProductSets();
        $this->insertNewProductSets();
    }

    private function deleteExistingProductSets()
    {
        App::getDB()->delete("user_product_sets", [
            "user_id" => $this->userId
        ]);
    }

    private function insertNewProductSets()
    {
        if (!empty($this->selectedProducts)) {
            $records = [];

            // Iterujemy przez produkty i pomijamy te z nullowym product_id
            foreach ($this->selectedProducts as $categoryId => $productId) {
                if (!empty($productId)) { // Dodano warunek sprawdzający, czy product_id nie jest pusty
                    $records[] = [
                        "user_id" => $this->userId,
                        "category_id" => $categoryId,
                        "product_id" => $productId
                    ];
                }
            }

            // Jeśli są jakieś rekordy do zapisania, wykonujemy insercję
            if (!empty($records)) {
                App::getDB()->insert("user_product_sets", $records);
            }
        }
    }

    private function validateEditRequest()
    {
        $this->userId = $this->getValidUserIdFromRequest();
        if (!is_numeric($this->userId) || $this->userId <= 0 || !$this->isUserExists($this->userId)) {
            Utils::addErrorMessage('Nieprawidłowe ID użytkownika');
            App::getRouter()->redirectTo('homeShow');
        }
    }

    private function validateSaveRequest()
    {
        $this->userId = $this->getValidUserIdFromRequest();
        $this->selectedProducts = ParamUtils::getFromRequest('selectedProducts', []);

        if (!is_numeric($this->userId) || $this->userId <= 0) {
            Utils::addErrorMessage('Nieprawidłowe ID użytkownika');
            return false;
        }

        foreach ($this->selectedProducts as $categoryId => $productId) {
            if (!is_numeric($categoryId)) {
                Utils::addErrorMessage('Nieprawidłowy format danych kategorii');
                return false;
            }

            // productId może być null, więc nie wymuszamy is_numeric na productId
            if (!empty($productId) && !is_numeric($productId)) {
                Utils::addErrorMessage('Nieprawidłowy format danych produktu');
                return false;
            }
        }

        return !App::getMessages()->isError();
    }

    private function getValidUserIdFromRequest()
    {
        return (int) ParamUtils::getFromRequest('userId', true, 'Błędne wywołanie aplikacji');
    }

    private function displayView()
    {
        App::getSmarty()->display('UserProductSet.tpl');
    }

    private function redirectAfterSuccess()
    {
        Utils::addInfoMessage('Pomyślnie zapisano zestaw produktów');
        App::getRouter()->forwardTo('userProductSet');
    }

    private function handleDatabaseError(PDOException $e)
    {
        Utils::addErrorMessage('Wystąpił błąd podczas operacji bazodanowej');
        if (App::getConf()->debug) {
            Utils::addErrorMessage($e->getMessage());
        }
        $this->displayView();
    }

    private function isUserExists(int $userId)
    {
        $count = App::getDB()->count("users", [
            "id" => $userId
        ]);

        return $count > 0;
    }
}
