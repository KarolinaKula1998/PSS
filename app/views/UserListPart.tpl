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

<div class="pagination">

    <div class="pure-form">
        <input type="hidden" id="page-input" name="page" value="{$currentPage}" />
        <button type="button" class="pure-button" title="First page" onclick="setPageAndSubmit(1)">&laquo;</button>
        {for $i=1 to $totalPages}
            <button type="button" class="pure-button 
				{if $i == $currentPage}active
				{/if}" onclick="setPageAndSubmit({$i})">{$i}</button>
        {/for}
        <button type="button" class="pure-button" title="Last page"
            onclick="setPageAndSubmit({$totalPages})">&raquo;</button>
    </div>
</div>

<script>
    function setPageAndSubmit(page) {
        document.getElementById('page-input').value = page;
        ajaxPostForm('search-form', '{$conf->action_root}userListPart', 'table');
    }
</script>