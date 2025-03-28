<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Aplikacja bazodanowa</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
	{block name=styles append}{{/block}}
</head>

<body>
	<div class="pure-menu pure-menu-horizontal main-menu">
		<div>
			<a href="{$conf->action_root}homeShow" class="pure-menu-heading pure-menu-link">Strona główna</a>
		</div>
		<div>
			{if isset($smarty.session.user) && ($smarty.session.user.role_id == 1 || $smarty.session.user.role_id == 3)}
				<a href="{$conf->action_root}userList" class="pure-menu-heading pure-menu-link">Lista użytkowników</a>
			{/if}
			{if isset($smarty.session.user.id)}
				{if $smarty.session.user.role_id == 2}
					<a href="{$conf->action_root}accountIntro" class="pure-menu-heading pure-menu-link">Profil</a>
					<a href="{$conf->action_root}testShow" class="pure-menu-heading pure-menu-link">Test</a>
				{/if}
				<a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
			{else}
				<a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
				<a href="{$conf->action_root}registerShow" class="pure-menu-heading pure-menu-link">Zarejestruj</a>
			{/if}
		</div>
	</div>

	<div class="main-container">
		{block name=top} {/block}
		{block name=messages}

			{if $msgs->isMessage()}
				<div class="messages bottom-margin">
					<ul>
						{foreach $msgs->getMessages() as $msg}
							{strip}
								<li
									class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">
									{$msg->text}</li>
							{/strip}
						{/foreach}
					</ul>
				</div>
			{/if}
		{/block}
		{block name=bottom} {/block}

	</div>
	<footer>
		<div class="footer-content main-color">
			<div>
				<h4>Godziny otwarcia:</h4>
				<p>Pn - Pt 8 - 21</p>
				<p>Sb - 8 - 20</p>
				<p>Nd - Nieczynne</p>
			</div>
			<div>
				<h4>Adres:</h4>
				<p>ul. Świerczyny 4</p>
				<p>41-400 Mysłowice</p>
			</div>
			<div>
				<h4>Kontakt:</h4>
				<p>tel. 696 614 204</p>
			</div>
	</footer>
	</div>
</body>

</html>