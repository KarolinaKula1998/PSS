<?php
/* Smarty version 3.1.30, created on 2025-01-29 17:31:15
  from "C:\xampp\htdocs\amelia-hairmania\app\views\AccountViews\AccountHairplan.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_679a57d3c95424_29128750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36f8bc57d00849377a66a270a757782efe02391b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\amelia-hairmania\\app\\views\\AccountViews\\AccountHairplan.tpl',
      1 => 1738168130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Account.tpl' => 1,
  ),
),false)) {
function content_679a57d3c95424_29128750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1319089041679a57d3c95010_96990915', 'currentView');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'currentView'} */
class Block_1319089041679a57d3c95010_96990915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['currentPlan']->value) && !empty($_smarty_tpl->tpl_vars['currentPlan']->value)) {?>
        <p>Twoje włosy są:</p>
        <p><?php echo $_smarty_tpl->tpl_vars['currentPlan']->value['porosity_name'];?>
</p>
        <?php if ($_smarty_tpl->tpl_vars['currentPlan']->value['porosity_type_id'] == 1) {?>
            <h4>1. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>2. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>3. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>4. MYCIE</h4>
            <ul>
                <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>5. MYCIE</h4>
            <ul>
                <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                spania
                związujemy włosy, np. w delikatnego kucyka.</p>

        <?php } elseif ($_smarty_tpl->tpl_vars['currentPlan']->value['porosity_type_id'] == 2) {?>
            <h4>1. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>2. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>3. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>4. MYCIE</h4>
            <ul>
                <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>5. MYCIE</h4>
            <ul>
                <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                spania
                związujemy włosy, np. w delikatnego kucyka.</p>

        <?php } elseif ($_smarty_tpl->tpl_vars['currentPlan']->value['porosity_type_id'] == 3) {?>
            <h4>1. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>2. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę humektantową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>3. MYCIE</h4>
            <ul>
                <li>Myjemy dwukrotnie skórę głowy mocnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę emolientową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>4. MYCIE</h4>
            <ul>
                <li>Nakładamy olej do olejowania na włosy - trzymamy przez godzinę.</li>
                <li>Myjemy skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy maskę - trzymamy minimum 30 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <h4>5. MYCIE</h4>
            <ul>
                <li>Nakładamy peeling na skórę głowy - spłukujemy.</li>
                <li>Myjemy dwukrotnie skórę głowy łagodnym szamponem - spłukujemy.</li>
                <li>Nakładamy odżywkę proteinową - trzymamy 5-7 minut - spłukujemy.</li>
                <li>Nakładamy olejek zabezpieczający, termoochronę.</li>
            </ul>

            <p><strong>WAŻNE:</strong> Nie chodzimy spać w mokrych włosach. Włosy suszymy chłodnym lub letnim nawiewem. Do
                spania
                związujemy włosy, np. w delikatnego kucyka.</p>
        <?php }?>
    <?php } else { ?>
        <div class="no-results-message">
            <p>Nie masz jeszcze aktualnego planu.</p>
            <a class="button-small pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
testShow">Przejdź do testów</a>
        </div>
    <?php }
}
}
/* {/block 'currentView'} */
}
