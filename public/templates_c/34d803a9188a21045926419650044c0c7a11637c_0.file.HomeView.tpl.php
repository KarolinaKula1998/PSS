<?php
/* Smarty version 4.3.4, created on 2025-01-26 11:42:56
  from 'C:\xamppnew\htdocs\amelia-hairmania\app\views\HomeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_679611b02b1990_26187475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34d803a9188a21045926419650044c0c7a11637c' => 
    array (
      0 => 'C:\\xamppnew\\htdocs\\amelia-hairmania\\app\\views\\HomeView.tpl',
      1 => 1737882340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679611b02b1990_26187475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_918246803679611b02ac904_14455594', 'styles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_422037027679611b02b1038_70219807', 'top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'styles'} */
class Block_918246803679611b02ac904_14455594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_918246803679611b02ac904_14455594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main-view.css">
<?php
}
}
/* {/block 'styles'} */
/* {block 'top'} */
class Block_422037027679611b02b1038_70219807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_422037027679611b02b1038_70219807',
  ),
);
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
