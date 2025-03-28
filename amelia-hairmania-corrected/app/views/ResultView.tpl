{extends file="main.tpl"}

{block name=top}
    <h4>Gratulujemy!</h4>
    <p>Twoje włosy są:</p>
    <p>{$result.porosity}</p>
    <a class="button-big pure-button button-secondary" href="{$conf->action_url}accountHairplan">Przejdź do
        planu</a>

{/block}