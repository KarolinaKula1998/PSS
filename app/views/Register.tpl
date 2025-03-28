{extends file="main.tpl"}

{block name=top}
    <form action="{$conf->action_root}register" method="post" class="pure-form pure-form-aligned bottom-margin">
        <legend>Rejestracja do systemu</legend>
        <fieldset>
            <div class="pure-control-group">
                <label for="id_name">Imię</label>
                <input id="id_name" type="text" name="name" value="{$form->name}" />
            </div>
            <div class="pure-control-group">
                <label for="id_surname">Nazwisko</label>
                <input id="id_surname" type="text" name="surname" value="{$form->surname}" />
            </div>
            <div class="pure-control-group">
                <label for="id_email">E-mail: </label>
                <input id="id_email" type="text" name="email" value="{$form->email}" />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">Hasło: </label>
                <input id="id_pass" type="password" name="pass" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_pass">Potwierdź hasło: </label>
                <input id="id_pass" type="password" name="passConfirmation" /><br />
            </div>
            <div class="pure-control-group">
                <label for="id_phone">Telefon</label>
                <input id="id_phone" type="text" name="phone" value="{$form->phone}" />
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