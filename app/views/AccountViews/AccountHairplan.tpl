{extends file="Account.tpl"}
{block name=currentView}
    {if isset($currentPlan) && !empty($currentPlan)}
        <p>Twoje włosy są:</p>
        <p>{$currentPlan.porosity_name}</p>
        {if $currentPlan.porosity_type_id == 1}
            <h4>1. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>2. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>3. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>4. MYCIE</h4>
            <ul>
                <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>5. MYCIE</h4>
            <ul>
                <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                spania
                związujemy włosy, np. w delikatnego kucyka.</p>

        {elseif $currentPlan.porosity_type_id == 2}
            <h4>1. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>2. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>3. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>4. MYCIE</h4>
            <ul>
                <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>5. MYCIE</h4>
            <ul>
                <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                spania
                związujemy włosy, np. w delikatnego kucyka.</p>

        {elseif $currentPlan.porosity_type_id == 3}
            <h4>1. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>2. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>3. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>4. MYCIE</h4>
            <ul>
                <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>5. MYCIE</h4>
            <ul>
                <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                spania
                związujemy włosy, np. w delikatnego kucyka.</p>
        {/if}
    {else}
        <div class="no-results-message">
            <p>Nie masz jeszcze aktualnego planu.</p>
            <a class="button-small pure-button button-success" href="{$conf->action_url}testShow">Przejdź do testów</a>
        </div>
    {/if}
{/block}