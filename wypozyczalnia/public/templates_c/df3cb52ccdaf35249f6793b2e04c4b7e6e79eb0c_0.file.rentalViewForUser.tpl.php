<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:34:03
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\rentalViewForUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bacbe9d618_81990711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df3cb52ccdaf35249f6793b2e04c4b7e6e79eb0c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\rentalViewForUser.tpl',
      1 => 1717452988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:userRentalsTable.tpl' => 1,
  ),
),false)) {
function content_6661bacbe9d618_81990711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14196275666661bacbe954e8_09357652', 'offer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10692737676661bacbe99a71_28186246', 'filtering');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "reserv.tpl");
}
/* {block 'filtering'} */
class Block_5127878606661bacbe95bb9_46946694 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'filtering'} */
/* {block 'offer'} */
class Block_14196275666661bacbe954e8_09357652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offer' => 
  array (
    0 => 'Block_14196275666661bacbe954e8_09357652',
  ),
  'filtering' => 
  array (
    0 => 'Block_5127878606661bacbe95bb9_46946694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="features" class="container special">
        <header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5127878606661bacbe95bb9_46946694', 'filtering', $this->tplIndex);
?>

        </header>
        <div id="userTableReload">
            <?php $_smarty_tpl->_subTemplateRender("file:userRentalsTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </section>
<?php
}
}
/* {/block 'offer'} */
/* {block 'filtering'} */
class Block_10692737676661bacbe99a71_28186246 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'filtering' => 
  array (
    0 => 'Block_10692737676661bacbe99a71_28186246',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="filterForm" class="rentForm" onsubmit="ajaxPostForm('filterForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rentalsOnlyUser','userTableReload'); return false;">
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
