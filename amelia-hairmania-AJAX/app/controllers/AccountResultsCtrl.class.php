<?php

namespace app\controllers;

use PDOException;

use core\App;
use core\Utils;

class AccountResultsCtrl
{
    private $user;
    private $records;

    public function action_accountResults()
    {
        // 1. walidacja id osoby do edycji
        $this->user = $_SESSION['user'];

        if ($this->user) {
            $this->records = $this->fetchData();
            $this->generateView();
        } else {
            // Obsługa przypadku, gdy rekord nie istnieje
            Utils::addErrorMessage("Nie znaleziono użytkownika o podanym ID.");
            App::getRouter()->redirectTo('loginShow');
        }
    }

    public function generateView()
    {
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign('currentView', 'results');
        App::getSmarty()->display('AccountViews/AccountResults.tpl');
    }

    private function fetchData()
    {

        return App::getDB()->select("results", [
            "[>]porositytypes (p)" => ["porosity_type_id" => "id"]
        ], [
            "results.id",
            "results.score_result",
            "results.created_at",
            "results.porosity_type_id",
            "p.name (porosity_name)"
        ], ["user_id" => $this->user['id'], "ORDER" => ["created_at" => "DESC"], "LIMIT" => 10]);
    }

    public function action_resultDelete()
    {
        try {
            $id = $_GET['id'] ?? null;
            // 2. usunięcie rekordu
            App::getDB()->delete("results", [
                "id" =>  $id
            ]);
            Utils::addInfoMessage('Pomyślnie usunięto rekord');
        } catch (PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

        $this->action_accountResults();
    }
}
