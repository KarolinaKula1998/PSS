<?php
/* Smarty version 4.3.4, created on 2025-01-26 11:51:16
  from 'C:\xamppnew\htdocs\amelia-hairmania\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679613a468e144_60899126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '340c8676b2c1a997ec2ec18e9c00e40920c47788' => 
    array (
      0 => 'C:\\xamppnew\\htdocs\\amelia-hairmania\\app\\views\\templates\\main.tpl',
      1 => 1737888428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679613a468e144_60899126 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_712128209679613a4675cf5_61135227', 'styles');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

</head>

<body>
	<div class="pure-menu pure-menu-horizontal main-menu">
		<div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
homeShow" class="pure-menu-heading pure-menu-link">Strona główna</a>
		</div>
		<div>
			<?php if ((isset($_SESSION['user'])) && ($_SESSION['user']['role_id'] == 1 || $_SESSION['user']['role_id'] == 3)) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userList" class="pure-menu-heading pure-menu-link">Lista użytkowników</a>
			<?php }?>
			<?php if ((isset($_SESSION['user']['id']))) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
accountShow" class="pure-menu-heading pure-menu-link">Profil</a>
				<?php if ((isset($_SESSION['user'])) && ($_SESSION['user']['role_id'] == 2)) {?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1980384183679613a4682930_28335957', 'top');
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_307335599679613a4683245_30292578', 'messages');
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175510950679613a468d6e5_01476725', 'bottom');
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
class Block_712128209679613a4675cf5_61135227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_712128209679613a4675cf5_61135227',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'top'} */
class Block_1980384183679613a4682930_28335957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1980384183679613a4682930_28335957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_307335599679613a4683245_30292578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_307335599679613a4683245_30292578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
				<div class="messages error bottom-margin">
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
							<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
				<div class="messages info bottom-margin">
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
							<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php }?>

		<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_175510950679613a468d6e5_01476725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_175510950679613a468d6e5_01476725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
