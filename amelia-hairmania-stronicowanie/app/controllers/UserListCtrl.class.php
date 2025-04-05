<?php

namespace app\controllers;

use app\forms\UserSearchForm;
use PDOException;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\RoleUtils;

class UserListCtrl
{

	private $form;
	private $records;

	public function __construct()
	{
		$this->form = new UserSearchForm();
	}

	public function validate()
	{
		$this->form->email = ParamUtils::getFromRequest('email');
		$this->form->pageNumber = ParamUtils::getFromRequest('page');
		return !App::getMessages()->isError();
	}

	public function load_data()
	{
		$this->validate();
		$search_params = [];


		if (isset($this->form->email) && strlen($this->form->email) > 0) {
			$search_params['email[~]'] = $this->form->email . '%';
		}

		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = ["AND" => &$search_params];
		} else {
			$where = &$search_params;
		}
		$where["ORDER"] = "email";

		try {
			$sql = "
                SELECT 
                    users.id,
                    users.email,
                    users.role_id,
                    users.name,
                    users.surname,
                    users.phone_number,
                    users.created_at,
                    users.modified_at,
                    r.name AS role_name,
                    pt.name AS porosity_name
                FROM users
                LEFT JOIN roles r ON users.role_id = r.id
                LEFT JOIN (
                    SELECT res.user_id, res.porosity_type_id, res.created_at
                    FROM results res
                    WHERE res.created_at = (
                        SELECT MAX(res2.created_at)
                        FROM results res2
                        WHERE res2.user_id = res.user_id
                    )
                ) latest_res ON users.id = latest_res.user_id
                LEFT JOIN porositytypes pt ON latest_res.porosity_type_id = pt.id";

			if (!empty($search_params)) {
				$sql .= " WHERE users.email LIKE :email";
			}

			$sql .= " ORDER BY users.email";

			$params = [];
			if (!empty($search_params)) {
				$params[':email'] = $this->form->email . '%';
			}

			$pageSize = isset($this->form->pageSize) && $this->form->pageSize > 0 ? $this->form->pageSize : 10;
			$pageNumber = isset($this->form->pageNumber) && $this->form->pageNumber > 0 ? $this->form->pageNumber : 1;
			$offset = ($pageNumber - 1) * $pageSize;

			$sql .= " LIMIT :limit OFFSET :offset";
			$params[':limit'] = $pageSize;
			$params[':offset'] = $offset;

			$this->records = App::getDB()->query($sql, $params)->fetchAll();
		} catch (PDOException $e) {
			Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
			if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
		}

		$totalRecords = App::getDB()->count("users", $search_params);
		$pageSize = isset($this->form->pageSize) && $this->form->pageSize > 0 ? $this->form->pageSize : 10;
		$totalPages = ceil($totalRecords / $pageSize);

		App::getSmarty()->assign('users', $this->records);
		App::getSmarty()->assign('isAdmin', RoleUtils::inRole('admin'));
		App::getSmarty()->assign('isStylist', RoleUtils::inRole('stylist'));
		App::getSmarty()->assign('searchForm', $this->form);
		App::getSmarty()->assign('totalPages', $totalPages);
		App::getSmarty()->assign('currentPage', $this->form->pageNumber ? $this->form->pageNumber : 1);
	}

	public function action_userList()
	{
		$this->load_data();
		App::getSmarty()->display('UserList.tpl');
	}

	public function action_userListPart()
	{
		$this->load_data();
		App::getSmarty()->assign('currentPage', $this->form->pageNumber ? $this->form->pageNumber : 1);
		App::getSmarty()->display('UserListPart.tpl');
	}
}
