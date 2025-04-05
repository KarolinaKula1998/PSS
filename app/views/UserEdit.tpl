{extends file="main.tpl"}

{block name=top}

    <div class="bottom-margin">
        <form action="{$conf->action_root}userSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Dane osoby</legend>
                <div class="pure-control-group">
                    <label for="id_email">E-mail</label>
                    <input id="id_email" type="text" placeholder="E-mail" name="email" value="{$form->email}">
                </div>
                <div class="pure-control-group">
                    <label for="id_name">Imię</label>
                    <input id="id_name" type="text" placeholder="Imię" name="name" value="{$form->name}">
                </div>
                <div class="pure-control-group">
                    <label for="id_surname">Nazwisko</label>
                    <input id="id_surname" type="text" placeholder="Nazwisko" name="surname" value="{$form->surname}">
                </div>
                <div class="pure-control-group">
                    <label for="id_phone">Telefon</label>
                    <input id="id_phone" type="text" placeholder="Telefon" name="phone" value="{$form->phone}">
                </div>
                <div class="pure-control-group">
                    <label for="roleId">Rola</label>
                    <select id="roleId" name="roleId">
                        {foreach $roles as $role}
                            <option value="{$role.id}" {if $role.id == $form->roleId}selected{/if}>{$role.name}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="pure-controls">
                    <input type="submit" class="pure-button pure-button-primary" value="Zapisz" />
                    <a class="pure-button button-secondary" href="{$conf->action_root}userList">Powrót</a>
                </div>
            </fieldset>
            <input type="hidden" name="id" value="{$form->id}">
        </form>
    </div>

{/block}