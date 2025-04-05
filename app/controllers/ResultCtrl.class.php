<?php

namespace app\controllers;


use core\App;

class ResultCtrl
{
    public function action_resultShow()
    {
        if (!isset($_SESSION['last_result'])) {
            App::getRouter()->redirectTo('homeShow');
            exit();
        }

        $result = $_SESSION['last_result'];
        // unset($_SESSION['last_result']);
        App::getSmarty()->assign('result', $result);
        $this->generateView();
    }

    public function generateView()
    {
        App::getSmarty()->display('ResultView.tpl');
    }
}
