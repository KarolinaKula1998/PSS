{extends file="main.tpl"}

{block name=styles}
	<link rel="stylesheet" href="{$conf->app_url}/css/user-list.css">
{/block}

{block name=top}

	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="{$conf->action_url}userList">
			<legend>Opcje wyszukiwania</legend>
			<fieldset>
				<input type="text" placeholder="E-mail" name="email" value="{$searchForm->email}" /><br />
				<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
			</fieldset>
		</form>
	</div>

{/block}

{block name=bottom}
	<table class="pure-table pure-table-bordered users-table">
		<thead>
			<tr>
				<th>E-mail</th>
				<th>Rola</th>
				<th>Imię</th>
				<th>Nazwisko</th>
				<th>Telefon</th>
				<th>Data utworzenia</th>
				<th>Data modyfikacji</th>
				<th>Rodzaj porowatości</th>
				{if $isAdmin}
					<th>Opcje</th>
				{/if}
				{if $isStylist}
					<th>Produkty</th>
				{/if}
			</tr>
		</thead>
		<tbody>
			{foreach $users as $u}
				{strip}
					<tr>
						<td>{$u["email"]}</td>
						<td>{$u["role_name"]}</td>
						<td>{$u["name"]}</td>
						<td>{$u["surname"]}</td>
						<td>{$u["phone_number"]}</td>
						<td>{$u["created_at"]}</td>
						<td>{$u["modified_at"]}</td>
						<td>{$u['porosity_name']}</td>
						{if $isAdmin}
							<td>
								<a class="button-small pure-button button-secondary"
									href="{$conf->action_url}userEdit?id={$u['id']}">Edytuj</a>
								&nbsp;
								<a class="button-small pure-button button-warning"
									href="{$conf->action_url}userDelete?id={$u['id']}">Usuń</a>
							</td>
						{/if}
						{if $isStylist}
							<td>
								<a class="button-small pure-button button-secondary"
									href="{$conf->action_url}userProductSet?userId={$u['id']}">Edytuj zestaw</a>
								&nbsp;
							</td>
						{/if}
					</tr>
				{/strip}
			{/foreach}
		</tbody>
	</table>

{/block}