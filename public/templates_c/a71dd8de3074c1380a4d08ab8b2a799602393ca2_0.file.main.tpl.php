<?php
/* Smarty version 3.1.30, created on 2025-01-31 20:54:58
  from "C:\xampp\htdocs\amelia-hairmania\app\views\templates\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_679d2a92d99cc7_63760226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a71dd8de3074c1380a4d08ab8b2a799602393ca2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\templates\\main.tpl',
      1 => 1738353295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679d2a92d99cc7_63760226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8" />
	<title>Aplikacja bazodanowa</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
	<?php ob_start();
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1004823372679d2a92d868e2_22312324', 'styles');
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

</head>

<body>
	<div class="pure-menu pure-menu-horizontal main-menu">
		<div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeShow" class="pure-menu-heading pure-menu-link">Strona główna</a>
		</div>
		<div>
			<?php if (isset($_SESSION['user']) && ($_SESSION['user']['role_id'] == 1 || $_SESSION['user']['role_id'] == 3)) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userList" class="pure-menu-heading pure-menu-link">Lista użytkowników</a>
			<?php }?>
			<?php if (isset($_SESSION['user']['id'])) {?>
				<?php if ($_SESSION['user']['role_id'] == 2) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
accountIntro" class="pure-menu-heading pure-menu-link">Profil</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
testShow" class="pure-menu-heading pure-menu-link">Test</a>
				<?php }?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
			<?php } else { ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow" class="pure-menu-heading pure-menu-link">Zarejestruj</a>
			<?php }?>
		</div>
	</div>

	<div class="main-container">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_743176739679d2a92d90494_19727465', 'top');
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1279079266679d2a92d99195_77894099', 'messages');
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_835346626679d2a92d998e3_20073685', 'bottom');
?>


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

</html><?php }
/* {block 'styles'} */
class Block_1004823372679d2a92d868e2_22312324 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'top'} */
class Block_743176739679d2a92d90494_19727465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_1279079266679d2a92d99195_77894099 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
				<div class="messages bottom-margin">
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
							<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ul>
				</div>
			<?php }?>
		<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_835346626679d2a92d998e3_20073685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
