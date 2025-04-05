<?php

namespace app\controllers;

use app\forms\RegisterForm;
use PDOException;
use core\Utils;
use core\ParamUtils;
use core\App;


class RegisterCtrl
{
    private $form;

    public function __construct()
    {
        //stworzenie potrzebnych obiektów
        $this->form = new RegisterForm();
    }

    public function validate()
    {
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->passConfirmation = ParamUtils::getFromRequest('passConfirmation');
        $this->form->phone = ParamUtils::getFromRequest('phone');
        $this->form->name = ParamUtils::getFromRequest('name');
        $this->form->surname = ParamUtils::getFromRequest('surname');

        App::getValidation()->validateEmail($this->form->email);
        App::getValidation()->validatePassword($this->form->pass);
        App::getValidation()->validatePhone($this->form->phone);
        App::getValidation()->validateName($this->form->name);
        App::getValidation()->validateSurname($this->form->surname);
        App::getValidation()->validateConfirmationPassword($this->form->pass, $this->form->passConfirmation);

        // Jeśli są błędy, zatrzymaj walidację
        return !App::getMessages()->isError();
    }

    public function action_register()
    {
        if ($this->validate()) {
            $userRoleId = 2;
            $passwordHash = password_hash($this->form->pass, PASSWORD_DEFAULT);

            try {
                App::getDB()->insert("users", [
                    "email" => $this->form->email,
                    "password" => $passwordHash,
                    "role_id" => $userRoleId,
                    "phone_number" => $this->form->phone,
                    "name" => $this->form->name,
                    "surname" => $this->form->surname,
                ]);

                $this->loginAfterRegistration($this->form->email, $this->form->pass);
            } catch (PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
                $this->generateView();
            }
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    private function loginAfterRegistration($email, $password)
    {
        $loginCtrl = new LoginCtrl();
        $_POST['email'] = $email;
        $_POST['pass'] = $password;
        $loginCtrl->action_login();
    }

    public function action_registerShow()
    {
        $this->generateView();
    }

    public function generateView()
    {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('Register.tpl');
    }
}
