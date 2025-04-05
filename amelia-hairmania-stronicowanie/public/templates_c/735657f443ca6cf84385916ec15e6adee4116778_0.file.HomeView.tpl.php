<?php
/* Smarty version 3.1.30, created on 2025-03-31 20:58:37
  from "C:\xampp\htdocs\amelia-hairmania\app\views\HomeView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_67eae5dd049db2_99610309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '735657f443ca6cf84385916ec15e6adee4116778' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\HomeView.tpl',
      1 => 1737890242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_67eae5dd049db2_99610309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89516847267eae5dd0493d6_03115058', 'styles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131919734567eae5dd049b30_71187174', 'top');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'styles'} */
class Block_89516847267eae5dd0493d6_03115058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main-view.css">
<?php
}
}
/* {/block 'styles'} */
/* {block 'top'} */
class Block_131919734567eae5dd049b30_71187174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="home-container">
        <div class="home-text-container main-color">
            <p><strong>Hej, witam Cię w świecie pięknych włosów!</strong></p>
            <p>Jeśli jeszcze nie masz konta zapraszam Cię do rejestracji!</p>
            <p>Jeśli zastanawiasz się nad zabiegiem, zapraszamy do kontaktu. Chętnie odpowiemy na wszystkie nurtujące Cię
                pytania i pomożemy dobrać zabieg, który spełni twoje oczekiwania.</p>

            <p>
                Zespół HairMania
                by Karolina Kula
            </p>
        </div>
    </div>
<?php
}
}
/* {/block 'top'} */
}
