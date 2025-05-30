Zmiany naniesione od poprzedniego semstru na palikację:

1. Plik 'UserListCtrl.php 

- Update linijek kodu od 24-36:

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

- Update linijek 85-92:

			$pageSize = isset($this->form->pageSize) && $this->form->pageSize > 0 ? $this->form->pageSize : 10;
			$pageNumber = isset($this->form->pageNumber) && $this->form->pageNumber > 0 ? $this->form->pageNumber : 1;
			$offset = ($pageNumber - 1) * $pageSize;

			$sql .= " LIMIT :limit OFFSET :offset";
			$params[':limit'] = $pageSize;
			$params[':offset'] = $offset;

- Updtae linijek lub dodanie 100-123
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

2. Zmiana pliczku UserSearchForm.class.php

<?php

namespace app\forms;

class UserSearchForm
{
	public $email;
	public $pageNumber = 1;
	public $pageSize = 2;
}


3.Zmiana pliczku 'UselList.tpl 

{extends file="main.tpl"}

{block name=styles}
	<link rel="stylesheet" href="{$conf->app_url}/css/user-list.css">
{/block}

{block name=top}
	<form id="search-form" onsubmit="ajaxPostForm('search-form','{$conf->action_root}userListPart','table'); return false;">
		<div class="bottom-margin">
			<div class="pure-form pure-form-stacked">
				<legend>Opcje wyszukiwania</legend>
				<fieldset>
					<input type="text" placeholder="E-mail" name="email" value="{$searchForm->email}" /><br />
					<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
				</fieldset>
			</div>
		</div>


		<div id="table">
			{include file="UserListPart.tpl"}
		</div>
	</form>
{/block}







