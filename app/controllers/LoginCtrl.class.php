<?php

namespace app\controllers;

use app\forms\LoginForm;
use PDOException;
use core\Utils;
use core\ParamUtils;
use core\App;
use core\RoleUtils;

class LoginCtrl
{
	private $form;

	public function __construct()
	{
		//stworzenie potrzebnych obiektów
		$this->form = new LoginForm();
	}

	public function validate()
	{
		$this->form->email = ParamUtils::getFromRequest('email');
		$this->form->pass = ParamUtils::getFromRequest('pass');

		//nie ma sensu walidować dalej, gdy brak parametrów
		if (!isset($this->form->email)) return false;

		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if (empty($this->form->email)) {
			Utils::addErrorMessage('Nie podano adresu e-mail');
		}
		if (empty($this->form->pass)) {
			Utils::addErrorMessage('Nie podano hasła');
		}

		//nie ma sensu walidować dalej, gdy brak wartości
		if (App::getMessages()->isError()) return false;

		return true;
	}

	public function action_loginShow()
	{
		$this->generateView();
	}

	public function action_login()
	{
		if ($this->validate()) {
			try {
				$user = App::getDB()->get("users", [
					"[>]roles" => ["role_id" => "id"]
				], [
					"users.id",
					"users.email",
					"users.password",
					"users.role_id",
					"roles.name(role_name)"
				], [
					"users.email" => $this->form->email
				]);
				if ($user && password_verify($this->form->pass, $user['password'])) {
					// Logowanie udane, zapisz ID użytkownika w sesji
					$_SESSION['user'] = [
						'id' => $user['id'],
						'email' => $user['email'],
						'role_id' => $user['role_id'],
						'role_name' => $user['role_name'],
						'name' => $user['name'],
					];
					RoleUtils::addRole($user['role_name']);
					Utils::addInfoMessage("Zalogowano pomyślnie.");

					if ($user['role_name'] === 'admin') {
						App::getRouter()->redirectTo('userList');
					} else if ($user['role_name'] === 'stylist') {
						App::getRouter()->redirectTo('userList');
					} else if ($user['role_name'] === 'user') {
						App::getRouter()->redirectTo('accountIntro');
					}
				} else {
					Utils::addErrorMessage("Niepoprawne dane logowania.");
					$this->generateView();
				}
			} catch (PDOException $e) {
				Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
			}
		} else {
			//niezalogowany => pozostań na stronie logowania
			$this->generateView();
		}
	}

	public function action_logout()
	{
		// 1. zakończenie sesji
		session_destroy();
		// 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
		App::getRouter()->redirectTo('userList');
	}

	public function generateView()
	{
		App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
		App::getSmarty()->display('LoginView.tpl');
	}
}
