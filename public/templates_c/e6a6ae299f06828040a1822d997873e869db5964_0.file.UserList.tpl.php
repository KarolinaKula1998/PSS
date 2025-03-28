<?php
/* Smarty version 4.3.4, created on 2025-01-26 11:40:43
  from 'C:\xamppnew\htdocs\amelia-hairmania\app\views\UserList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6796112b2e1db3_24258190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a6ae299f06828040a1822d997873e869db5964' => 
    array (
      0 => 'C:\\xamppnew\\htdocs\\amelia-hairmania\\app\\views\\UserList.tpl',
      1 => 1737882340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6796112b2e1db3_24258190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14862055966796112b2c0525_66161959', 'styles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17568475596796112b2c8974_35493947', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20554357636796112b2caab8_26332538', 'bottom');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'styles'} */
class Block_14862055966796112b2c0525_66161959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_14862055966796112b2c0525_66161959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/user-list.css">
<?php
}
}
/* {/block 'styles'} */
/* {block 'top'} */
class Block_17568475596796112b2c8974_35493947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_17568475596796112b2c8974_35493947',
  ),
);
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
class Block_20554357636796112b2caab8_26332538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_20554357636796112b2caab8_26332538',
  ),
);
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
				<th>Produkty</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
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
userEdit&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Edytuj</a>&nbsp;<a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userDelete&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Usuń</a></td><?php }?><td><a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
userProductSet&userId=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Edytuj zestaw</a>&nbsp;</td></tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>

<?php
}
}
/* {/block 'bottom'} */
}
