{extends file="main.tpl"}

{block name=styles}
    <link rel="stylesheet" href="{$conf->app_url}/css/account.css">
{/block}

{block name=top}
    <div class="account-container">
        <div class="account-container__content">
            {block name=currentView}

            {/block}
        </div>
        <div class="account-container__menu">
            <div class="account-menu">
                <p><a href="{$conf->action_url}accountIntro" {if $currentView == 'intro'}class="active"
                        {/if}>Wprowadzenie</a></p>
                <p><a href="{$conf->action_url}accountHairplan" {if $currentView == 'hairplan'}class="active" {/if}>Aktualny
                        plan</a></p>
                <p><a href="{$conf->action_url}accountProducts" {if $currentView == 'products'}class="active" {/if}>Twoje
                        produkty</a></p>
                <p><a href="{$conf->action_url}accountResults" {if $currentView == 'results'}class="active" {/if}>Wyniki</a>
                </p>
            </div>
        </div>
    </div>
{/block}