<?php
/* Smarty version 3.1.30, created on 2025-01-29 17:22:43
  from "C:\xampp\htdocs\amelia-hairmania\app\views\AccountViews\AccountIntro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_679a55d3605101_91813107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aab3f00e74f510ae0d4731252c81e910771a2c1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\AccountViews\\AccountIntro.tpl',
      1 => 1738167493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Account.tpl' => 1,
  ),
),false)) {
function content_679a55d3605101_91813107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1817376102679a55d3604781_74287859', 'currentView');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'currentView'} */
class Block_1817376102679a55d3604781_74287859 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="intro-view">
        <p>Tutaj znajdziesz podstawowe informacje na temat pielęgnacji włosów.</p>

        <h3>1. Unikaj tarcia, to niszczy łuski!</h3>
        <h3>2. Oczyszczaj skórę głowy!</h3>
        <h3>3. Używaj tylko satynowych lub jedwabnych gumeczek.</h3>
        <h3>4. Zbilansowana dieta dla włosów.</h3>
        <h3>5. Unikaj gorącego nawiewu.</h3>
        <h3>6. Stylizacja włosów, tak, ale tylko z termoochroną i odpowiednimi kosmetykami.</h3>
        <h3>7. Podcinaj i zabezpieczaj końcówki.</h3>
        <h3>8. Prawidłowo rozczesuj włosy.</h3>
        <h3>9. Możesz myć włosy codziennie, ale rób to prawidłowo.</h3>
        <h3>10. Nie używaj plastikowych grzebieni i szczotek. Postaw na te z włosia dzika lub dobrego tworzywa.</h3>
    </div>
<?php
}
}
/* {/block 'currentView'} */
}
