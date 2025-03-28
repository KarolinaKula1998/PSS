<?php
/* Smarty version 3.1.30, created on 2025-01-31 20:51:36
  from "C:\xampp\htdocs\amelia-hairmania\app\views\AccountViews\AccountResults.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_679d29c81b19b1_76060607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0e449d81d5ce1b7f2bf7c23be3719e6d8b6de88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\AccountViews\\AccountResults.tpl',
      1 => 1738170869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Account.tpl' => 1,
  ),
),false)) {
function content_679d29c81b19b1_76060607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_807991619679d29c81b0f80_27926442', 'currentView');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'currentView'} */
class Block_807991619679d29c81b0f80_27926442 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (empty($_smarty_tpl->tpl_vars['records']->value)) {?>
        <div class="no-results-message">
            <p>Nie masz jeszcze żadnych wyników.</p>
            <a class="button-small pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
testShow">Przejdź do testów</a>
        </div>
    <?php } else { ?>
        <table class="pure-table pure-table-bordered users-table">
            <thead>
                <tr>
                    <th>Typ</th>
                    <th>Wynik</th>
                    <th>Data utworzenia</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['records']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["porosity_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["score_result"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["created_at"];?>
</td><td><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
resultDelete?id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">Usuń</a></td></tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    <?php }
}
}
/* {/block 'currentView'} */
}
