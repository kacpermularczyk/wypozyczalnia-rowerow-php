<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:41:28
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\rentalView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bc88bc16d6_66628488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a04b11e66b8e5eda8763e29ebe9923d9f9ca55' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\rentalView.tpl',
      1 => 1717449056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:rentalViewTable.tpl' => 1,
  ),
),false)) {
function content_6661bc88bc16d6_66628488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5386709186661bc88bbc727_68789324', 'offer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12439583456661bc88bbf2f0_26388047', 'searching');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "reserv.tpl");
}
/* {block 'searching'} */
class Block_3071427256661bc88bbcb56_04211002 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'searching'} */
/* {block 'offer'} */
class Block_5386709186661bc88bbc727_68789324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offer' => 
  array (
    0 => 'Block_5386709186661bc88bbc727_68789324',
  ),
  'searching' => 
  array (
    0 => 'Block_3071427256661bc88bbcb56_04211002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="features" class="container special">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3071427256661bc88bbcb56_04211002', 'searching', $this->tplIndex);
?>

        <div id="rentalsToReload">
            <?php $_smarty_tpl->_subTemplateRender("file:rentalViewTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </section>
<?php
}
}
/* {/block 'offer'} */
/* {block 'searching'} */
class Block_12439583456661bc88bbf2f0_26388047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'searching' => 
  array (
    0 => 'Block_12439583456661bc88bbf2f0_26388047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="searchForm" class="rentForm" onsubmit="ajaxPostForm('searchForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rentalsOnly','rentalsToReload'); return false;">
        <input type="text" name="search">
        <br><button class="space">Szukaj</button>
    </form><br><br>
<?php
}
}
/* {/block 'searching'} */
}
