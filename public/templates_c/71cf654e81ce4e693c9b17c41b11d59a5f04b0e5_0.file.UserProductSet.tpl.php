<?php
/* Smarty version 3.1.30, created on 2025-01-29 18:11:47
  from "C:\xampp\htdocs\amelia-hairmania\app\views\UserProductSet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_679a61535e5e04_80396641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71cf654e81ce4e693c9b17c41b11d59a5f04b0e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\UserProductSet.tpl',
      1 => 1737890242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_679a61535e5e04_80396641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1532892472679a61535d5746_14487911', 'styles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_424308791679a61535e56e3_15611878', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'styles'} */
class Block_1532892472679a61535d5746_14487911 extends Smarty_Internal_Block
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
class Block_424308791679a61535e56e3_15611878 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="bottom-margin">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userProductSetSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Zestawy produktów</legend>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupedCategories']->value, 'category', false, 'categoryId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoryId']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
                    <div class="pure-control-group">
                        <label for="category-<?php echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
</label>
                        <select id="category-<?php echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
" name="selectedProducts[<?php echo $_smarty_tpl->tpl_vars['categoryId']->value;?>
]" class="select-option">
                            <option value="">Wybierz produkt</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                                <option value=" <?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"
                                    <?php if (isset($_smarty_tpl->tpl_vars['selectedProducts']->value[$_smarty_tpl->tpl_vars['categoryId']->value]) && $_smarty_tpl->tpl_vars['selectedProducts']->value[$_smarty_tpl->tpl_vars['categoryId']->value] == $_smarty_tpl->tpl_vars['product']->value['product_id']) {?>selected
                                    <?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>

                                </option>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <div class="pure-controls">
                    <input type="submit" class="pure-button pure-button-primary" value="Zapisz" />
                    <a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userList">Powrót</a>
                </div>
            </fieldset>
            <input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
">
        </form>
    </div>

<?php
}
}
/* {/block 'top'} */
}
