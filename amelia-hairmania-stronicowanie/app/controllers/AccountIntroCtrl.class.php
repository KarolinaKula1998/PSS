<?php

namespace app\controllers;

use core\App;
use core\Utils;

class AccountIntroCtrl
{
    private $user;
    public function action_accountIntro()
    {
        // 1. walidacja id osoby do edycji
        $this->user = $_SESSION['user'];

        if ($this->user) {
            $this->generateView();
        } else {
            // Obsługa przypadku, gdy rekord nie istnieje
            Utils::addErrorMessage("Nie znaleziono użytkownika o podanym ID.");
            App::getRouter()->redirectTo('loginShow');
        }
    }

    public function generateView()
    {
        App::getSmarty()->assign('currentView', 'intro');
        App::getSmarty()->display('AccountViews/AccountIntro.tpl');
    }
}
