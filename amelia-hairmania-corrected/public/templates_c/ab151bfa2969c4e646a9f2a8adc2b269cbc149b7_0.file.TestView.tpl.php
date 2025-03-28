<?php
/* Smarty version 3.1.30, created on 2025-01-26 19:47:38
  from "C:\xampp\htdocs\amelia-hairmania\app\views\TestView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6796834ab85a40_40371288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab151bfa2969c4e646a9f2a8adc2b269cbc149b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\TestView.tpl',
      1 => 1737890242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6796834ab85a40_40371288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_383552566796834ab85288_05354852', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'top'} */
class Block_383552566796834ab85288_05354852 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="" method="post" class="pure-form pure-form-aligned">
        <fieldset>
            <legend><?php echo $_smarty_tpl->tpl_vars['current_question']->value['name'];?>
</legend>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupedAnswers']->value[$_smarty_tpl->tpl_vars['current_question']->value['id']], 'answer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->value) {
?>
                <label>
                    <input type="radio" name="question_<?php echo $_smarty_tpl->tpl_vars['current_question']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['answer']->value['id'];?>
"
                        <?php if ($_smarty_tpl->tpl_vars['answer']->value['id'] == $_smarty_tpl->tpl_vars['selectedAnswerId']->value) {?>checked="checked" <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['answer']->value['answer_text'];?>

                </label><br>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


            <div>
                <?php if ($_smarty_tpl->tpl_vars['current_question_index']->value > 0) {?>
                    <button type="submit" name="back" class="button-small pure-button">Wstecz</button>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['current_question_index']->value < $_smarty_tpl->tpl_vars['total_questions']->value-1) {?>
                    <button type="submit" name="next" class="button-small pure-button">Dalej</button>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['current_question_index']->value == $_smarty_tpl->tpl_vars['total_questions']->value-1) {?>
                    <button type="submit" name="save" class="button-small pure-button">Zapisz</button>
                <?php }?>
            </div>
        </fieldset>
    </form>
<?php
}
}
/* {/block 'top'} */
}
