{extends file="Account.tpl"}
{block name=currentView}
    {if empty($records)}
        <div class="no-results-message">
            <p>Nie masz jeszcze żadnych wyników.</p>
            <a class="button-small pure-button button-success" href="{$conf->action_url}testShow">Przejdź do testów</a>
        </div>
    {else}
        <table class="pure-table pure-table-bordered users-table">
            <thead>
                <tr>
                    <th>Typ</th>
                    <th>Wynik</th>
                    <th>Data utworzenia</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach $records as $r}
                    {strip}
                        <tr>
                            <td>{$r["porosity_name"]}</td>
                            <td>{$r["score_result"]}</td>
                            <td>{$r["created_at"]}</td>
                            <td>
                                <a class="button-small pure-button button-warning"
                                    href="{$conf->action_url}resultDelete?id={$r['id']}">Usuń</a>
                            </td>
                        </tr>
                    {/strip}
                {/foreach}
            </tbody>
        </table>
    {/if}
{/block}