<?php
/* Smarty version 3.1.30, created on 2025-03-31 20:58:04
  from "C:\xampp\htdocs\amelia-hairmania\app\views\UserList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67eae5bca36411_32531848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c52dc5dab9ba34f3a042bc43ab3f21dbd83c059c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\UserList.tpl',
      1 => 1743447482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:UserListPart.tpl' => 1,
  ),
),false)) {
function content_67eae5bca36411_32531848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45897621867eae5bca34ec5_58605489', 'styles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6848150567eae5bca36187_18896150', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'styles'} */
class Block_45897621867eae5bca34ec5_58605489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/user-list.css">
<?php
}
}
/* {/block 'styles'} */
/* {block 'top'} */
class Block_6848150567eae5bca36187_18896150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form id="search-form" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userListPart','table'); return false;">
		<div class="bottom-margin">
			<div class="pure-form pure-form-stacked">
				<legend>Opcje wyszukiwania</legend>
				<fieldset>
					<input type="text" placeholder="E-mail" name="email" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->email;?>
" /><br />
					<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
				</fieldset>
			</div>
		</div>


		<div id="table">
			<?php $_smarty_tpl->_subTemplateRender("file:UserListPart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>
	</form>
<?php
}
}
/* {/block 'top'} */
}
