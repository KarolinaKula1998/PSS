<?php
/* Smarty version 3.1.30, created on 2025-01-31 21:01:50
  from "C:\xampp\htdocs\amelia-hairmania\app\views\ResultView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_679d2c2e5a6a54_77642778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159595da0d4f713cd1cc04fc21199a0779e46084' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\ResultView.tpl',
      1 => 1738169756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_679d2c2e5a6a54_77642778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_703136708679d2c2e5a6685_72415112', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_703136708679d2c2e5a6685_72415112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h4>Gratulujemy!</h4>
    <p>Twoje włosy są:</p>
    <p><?php echo $_smarty_tpl->tpl_vars['result']->value['porosity'];?>
</p>
    <a class="button-big pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
accountHairplan">Przejdź do
        planu</a>

<?php
}
}
/* {/block 'top'} */
}
