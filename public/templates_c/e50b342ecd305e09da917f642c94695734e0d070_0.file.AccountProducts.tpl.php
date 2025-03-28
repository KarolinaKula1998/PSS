<?php
/* Smarty version 3.1.30, created on 2025-01-31 21:01:21
  from "C:\xampp\htdocs\amelia-hairmania\app\views\AccountViews\AccountProducts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_679d2c11b76974_54505354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e50b342ecd305e09da917f642c94695734e0d070' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\AccountViews\\AccountProducts.tpl',
      1 => 1738353678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Account.tpl' => 1,
  ),
),false)) {
function content_679d2c11b76974_54505354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2000648195679d2c11b76356_56003369', 'currentView');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'currentView'} */
class Block_2000648195679d2c11b76356_56003369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="products-view">
        <h2>Produkty</h2>
        <p>Tutaj znajdziesz polecane produkty do pielęgnacji włosów.</p>
        <?php if (!empty($_smarty_tpl->tpl_vars['userProducts']->value)) {?>
            <table class="pure-table pure-table-bordered users-table">
                <thead>
                    <tr>
                        <th>Kategoria</th>
                        <th>Produkt</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userProducts']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                        <tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["category_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["product_name"];?>
</td></tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>
            </table>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'currentView'} */
}
