<?php

namespace app\controllers;

use app\forms\UserEditForm;
use PDOException;
use core\Utils;
use core\ParamUtils;
use core\App;
use core\CommonFunctions;

class UserEditCtrl
{

	private $form; //dane formularza
	private $roles;

	public function __construct()
	{
		//stworzenie potrzebnych obiektów
		$this->form = new UserEditForm();
	}

	//validacja danych przed zapisem (nowe dane lub edycja)
	public function validateSave()
	{
		//0. Pobranie parametrów z walidacją
		$this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
		$this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji');
		$this->form->roleId = ParamUtils::getFromRequest('roleId', true, 'Błędne wywołanie aplikacji');
		$this->form->name = ParamUtils::getFromRequest('name', true, 'Błędne wywołanie aplikacji');
		$this->form->surname = ParamUtils::getFromRequest('surname', true, 'Błędne wywołanie aplikacji');
		$this->form->phone = ParamUtils::getFromRequest('phone', true, 'Błędne wywołanie aplikacji');

		if (App::getMessages()->isError()) return false;

		App::getValidation()->validateEmail($this->form->email);
		App::getValidation()->validatePhone($this->form->phone);
		App::getValidation()->validateName($this->form->name);
		App::getValidation()->validateSurname($this->form->surname);

		if (App::getMessages()->isError()) return false;

		return ! App::getMessages()->isError();
	}

	//validacja danych przed wyswietleniem do edycji
	public function validateEdit()
	{
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->form->id = ParamUtils::getFromRequest('id', true, 'Błędne wywołanie aplikacji');
		return ! App::getMessages()->isError();
	}

	public function action_userNew()
	{
		$this->generateView();
	}

	//wysiweltenie rekordu do edycji wskazanego parametrem 'id'
	public function action_userEdit()
	{
		// 1. walidacja id osoby do edycji
		if ($this->validateEdit()) {
			try {
				// 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
				$record = App::getDB()->get("users", "*", [
					"id" => $this->form->id
				]);
				$this->form->id = $record['id'];
				$this->form->email = $record['email'];
				$this->form->roleId = $record['role_id'];
				$this->form->name = $record['name'];
				$this->form->surname = $record['surname'];
				$this->form->phone = $record['phone_number'];
			} catch (PDOException $e) {
				Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
				if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
			}
		}

		// 3. Wygenerowanie widoku
		$this->generateView();
	}

	public function action_userDelete()
	{
		// 1. walidacja id osoby do usuniecia
		if ($this->validateEdit()) {

			try {
				// 2. usunięcie rekordu
				App::getDB()->delete("users", [
					"id" => $this->form->id
				]);
				Utils::addInfoMessage('Pomyślnie usunięto rekord');
			} catch (PDOException $e) {
				Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
				if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
			}
		}

		// 3. Przekierowanie na stronę listy osób
		App::getRouter()->forwardTo('userList');
	}

	public function action_userSave()
	{
		// 1. Walidacja danych formularza (z pobraniem)
		if ($this->validateSave()) {
			// 2. Zapis danych w bazie
			try {
				//2.2 Edycja rekordu o danym ID
				App::getDB()->update("users", [
					"email" => $this->form->email,
					"role_id" => $this->form->roleId,
					"name" => $this->form->name,
					"surname" => $this->form->surname,
					"phone_number" => $this->form->phone,
				], [
					"id" => $this->form->id
				]);

				Utils::addInfoMessage('Pomyślnie zapisano rekord');
			} catch (PDOException $e) {
				Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
			}

			// 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
			App::getRouter()->forwardTo('userList');
		} else {
			// 3c. Gdy błąd walidacji to pozostań na stronie
			$this->generateView();
		}
	}

	public function generateView()
	{
		try {
			$this->roles = App::getDB()->select("roles", "*");
		} catch (PDOException $e) {
			Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
			if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
		}

		App::getSmarty()->assign('roles', $this->roles);  // lista rekordów z bazy danych
		App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
		App::getSmarty()->display('UserEdit.tpl');
	}
}
