<?php
/* Smarty version 3.1.30, created on 2025-01-31 20:48:40
  from "C:\xampp\htdocs\amelia-hairmania\app\views\UserList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_679d2918836a09_40976157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c52dc5dab9ba34f3a042bc43ab3f21dbd83c059c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\UserList.tpl',
      1 => 1738352916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_679d2918836a09_40976157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_382279812679d29188276a0_14126079', 'styles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1475721555679d2918828468_51707485', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1365156235679d29188365b0_60941359', 'bottom');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'styles'} */
class Block_382279812679d29188276a0_14126079 extends Smarty_Internal_Block
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
class Block_1475721555679d2918828468_51707485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="bottom-margin">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userList">
			<legend>Opcje wyszukiwania</legend>
			<fieldset>
				<input type="text" placeholder="E-mail" name="email" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->email;?>
" /><br />
				<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
			</fieldset>
		</form>
	</div>

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_1365156235679d29188365b0_60941359 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<table class="pure-table pure-table-bordered users-table">
		<thead>
			<tr>
				<th>E-mail</th>
				<th>Rola</th>
				<th>Imię</th>
				<th>Nazwisko</th>
				<th>Telefon</th>
				<th>Data utworzenia</th>
				<th>Data modyfikacji</th>
				<th>Rodzaj porowatości</th>
				<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
					<th>Opcje</th>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['isStylist']->value) {?>
					<th>Produkty</th>
				<?php }?>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
				<tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["role_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["surname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["phone_number"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["created_at"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["modified_at"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value['porosity_name'];?>
</td><?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userEdit?id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete?id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Usuń</a></td><?php }
if ($_smarty_tpl->tpl_vars['isStylist']->value) {?><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userProductSet?userId=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Edytuj zestaw</a>&nbsp;</td><?php }?></tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</tbody>
	</table>

<?php
}
}
/* {/block 'bottom'} */
}
