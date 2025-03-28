<?php
/* Smarty version 3.1.30, created on 2025-01-31 20:31:45
  from "C:\xampp\htdocs\amelia-hairmania\app\views\Account.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_679d2521628f82_03689391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c21d2cf452c1a1f01e37d86b3775afeaccba3f03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\Account.tpl',
      1 => 1738171350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_679d2521628f82_03689391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1359761346679d2521623f48_60127023', 'styles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_600222385679d2521628725_40566022', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'styles'} */
class Block_1359761346679d2521623f48_60127023 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/account.css">
<?php
}
}
/* {/block 'styles'} */
/* {block 'currentView'} */
class Block_1190524064679d2521624bd2_13322064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <?php
}
}
/* {/block 'currentView'} */
/* {block 'top'} */
class Block_600222385679d2521628725_40566022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="account-container">
        <div class="account-container__content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1190524064679d2521624bd2_13322064', 'currentView', $this->tplIndex);
?>

        </div>
        <div class="account-container__menu">
            <div class="account-menu">
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountIntro" <?php if ($_smarty_tpl->tpl_vars['currentView']->value == 'intro') {?>class="active"
                        <?php }?>>Wprowadzenie</a></p>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountHairplan" <?php if ($_smarty_tpl->tpl_vars['currentView']->value == 'hairplan') {?>class="active" <?php }?>>Aktualny
                        plan</a></p>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountProducts" <?php if ($_smarty_tpl->tpl_vars['currentView']->value == 'products') {?>class="active" <?php }?>>Twoje
                        produkty</a></p>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountResults" <?php if ($_smarty_tpl->tpl_vars['currentView']->value == 'results') {?>class="active" <?php }?>>Wyniki</a>
                </p>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'top'} */
}
