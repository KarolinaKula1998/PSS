<?php
/* Smarty version 3.1.30, created on 2025-03-31 20:58:30
  from "C:\xampp\htdocs\amelia-hairmania\app\views\UserListPart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67eae5d6691937_73410195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f9f53d4c7ba6f2305cbc3295e30ff0e50db5191' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\UserListPart.tpl',
      1 => 1743447498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67eae5d6691937_73410195 (Smarty_Internal_Template $_smarty_tpl) {
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

<div class="pagination">

    <div class="pure-form">
        <input type="hidden" id="page-input" name="page" value="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" />
        <button type="button" class="pure-button" title="First page" onclick="setPageAndSubmit(1)">&laquo;</button>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['totalPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
            <button type="button" class="pure-button 
				<?php if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['currentPage']->value) {?>active
				<?php }?>" onclick="setPageAndSubmit(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>
        <?php }
}
?>

        <button type="button" class="pure-button" title="Last page"
            onclick="setPageAndSubmit(<?php echo $_smarty_tpl->tpl_vars['totalPages']->value;?>
)">&raquo;</button>
    </div>
</div>

<?php echo '<script'; ?>
>
    function setPageAndSubmit(page) {
        document.getElementById('page-input').value = page;
        ajaxPostForm('search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userListPart', 'table');
    }
<?php echo '</script'; ?>
><?php }
}
