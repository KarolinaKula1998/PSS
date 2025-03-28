{extends file="main.tpl"}

{block name=top}
	<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin">
		<legend>Logowanie do systemu</legend>
		<fieldset>
			<div class="pure-control-group">
				<label for="id_email">E-mail: </label>
				<input id="id_email" type="text" name="email" value="{$form->email}" />
			</div>
			<div class="pure-control-group">
				<label for="id_pass">Hasło: </label>
				<input id="id_pass" type="password" name="pass" /><br />
			</div>
			<div class="pure-controls">
				<input type="submit" value="zaloguj" class="pure-button pure-button-primary" />
			</div>
		</fieldset>
	</form>
{/block}
<?php
phpinfo();
?>