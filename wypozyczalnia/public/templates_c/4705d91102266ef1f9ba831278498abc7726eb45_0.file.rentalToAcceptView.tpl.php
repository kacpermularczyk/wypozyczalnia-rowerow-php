<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:40:59
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\rentalToAcceptView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bc6b13f274_30905815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4705d91102266ef1f9ba831278498abc7726eb45' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\rentalToAcceptView.tpl',
      1 => 1717452986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:rentalToAcceptTable.tpl' => 1,
  ),
),false)) {
function content_6661bc6b13f274_30905815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9568695106661bc6b13a384_94547977', 'offer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18896295176661bc6b13cee4_21517438', 'filtering');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "reserv.tpl");
}
/* {block 'filtering'} */
class Block_11703033346661bc6b13a7d8_39884299 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'filtering'} */
/* {block 'offer'} */
class Block_9568695106661bc6b13a384_94547977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offer' => 
  array (
    0 => 'Block_9568695106661bc6b13a384_94547977',
  ),
  'filtering' => 
  array (
    0 => 'Block_11703033346661bc6b13a7d8_39884299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="features" class="container special">
        <header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11703033346661bc6b13a7d8_39884299', 'filtering', $this->tplIndex);
?>

        </header>
        <div id="rentalsToAcceptReload">
            <?php $_smarty_tpl->_subTemplateRender("file:rentalToAcceptTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </section>
<?php
}
}
/* {/block 'offer'} */
/* {block 'filtering'} */
class Block_18896295176661bc6b13cee4_21517438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'filtering' => 
  array (
    0 => 'Block_18896295176661bc6b13cee4_21517438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="filterForm" class="rentForm" onsubmit="ajaxPostForm('filterForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rentalsToAcceptOnly','rentalsToAcceptReload'); return false;">
        <select name="filter">
            <option value="100" selected="true" hidden="true" disabled>Wybierz ilość wierszy</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="15">15</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="75">75</option>
            <option value="100">100</option>
        </select>
        <br><button>Szukaj</button>
    </form><br><br>
<?php
}
}
/* {/block 'filtering'} */
}
