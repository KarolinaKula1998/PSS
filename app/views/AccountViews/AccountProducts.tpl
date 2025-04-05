{extends file="Account.tpl"}
{block name=currentView}
    <div class="products-view">
        <h2>Produkty</h2>
        <p>Tutaj znajdziesz polecane produkty do pielęgnacji włosów.</p>
        {if !empty($userProducts)}
            <table class="pure-table pure-table-bordered users-table">
                <thead>
                    <tr>
                        <th>Kategoria</th>
                        <th>Produkt</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $userProducts as $u}
                        {strip}
                            <tr>
                                <td>{$u["category_name"]}</td>
                                <td>{$u["product_name"]}</td>
                            </tr>
                        {/strip}
                    {/foreach}
                </tbody>
            </table>
        {/if}
    </div>
{/block}