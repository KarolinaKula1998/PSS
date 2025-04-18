<?php

namespace app\controllers;

use core\App;

class HomeCtrl
{

    public function action_homeShow()
    {
        $this->generateView();
    }

    public function generateView()
    {
        App::getSmarty()->display('HomeView.tpl');
    }
}
