{extends file="main.tpl"}

{block name=styles}
    <link rel="stylesheet" href="{$conf->app_url}/css/user-list.css">
{/block}

{block name=top}

    <div class="bottom-margin">
        <form action="{$conf->action_root}userProductSetSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Zestawy produktów</legend>

                {foreach $groupedCategories as $categoryId => $category}
                    <div class="pure-control-group">
                        <label for="category-{$categoryId}">{$category.category_name}</label>
                        <select id="category-{$categoryId}" name="selectedProducts[{$categoryId}]" class="select-option">
                            <option value="">Wybierz produkt</option>
                            {foreach $category.products as $product}
                                <option value=" {$product.product_id}"
                                    {if isset($selectedProducts[$categoryId]) && $selectedProducts[$categoryId] == $product.product_id}selected
                                    {/if}>
                                    {$product.product_name}
                                </option>

                            {/foreach}
                        </select>
                    </div>

                {/foreach}

                <div class="pure-controls">
                    <input type="submit" class="pure-button pure-button-primary" value="Zapisz" />
                    <a class="pure-button button-secondary" href="{$conf->action_root}userList">Powrót</a>
                </div>
            </fieldset>
            <input type="hidden" name="userId" value="{$userId}">
        </form>
    </div>

{/block}