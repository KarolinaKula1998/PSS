<?php

namespace app\controllers;

use core\App;
use core\Utils;

class AccountProductsCtrl
{
    private $user;
    private $userProducts;

    public function action_accountProducts()
    {
        // 1. walidacja id osoby do edycji
        $this->user = $_SESSION['user'];

        if ($this->user) {
            $this->userProducts = $this->fetchUserSelections();
            $this->generateView();
        } else {
            // Obsługa przypadku, gdy rekord nie istnieje
            Utils::addErrorMessage("Nie znaleziono użytkownika o podanym ID.");
            App::getRouter()->redirectTo('loginShow');
        }
    }

    public function generateView()
    {
        App::getSmarty()->assign('userProducts', $this->userProducts);
        App::getSmarty()->assign('currentView', 'products');
        App::getSmarty()->display('AccountViews/AccountProducts.tpl');
    }

    private function fetchUserSelections()
    {
        return App::getDB()->select("user_product_sets", [
            "[>]products" => ["product_id" => "id"],
            "[>]product_categories" => ["category_id" => "id"]
        ], [
            "product_categories.id (category_id)",
            "product_categories.name (category_name)",
            "products.id (product_id)",
            "products.name (product_name)"
        ], [
            "user_product_sets.user_id" => $this->user['id']
        ]);
    }
}
