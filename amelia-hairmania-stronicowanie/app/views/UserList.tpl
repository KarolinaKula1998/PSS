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