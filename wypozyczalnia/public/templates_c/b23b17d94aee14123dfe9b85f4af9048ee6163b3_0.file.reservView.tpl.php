<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:33:22
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\reservView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661baa258cb13_84007164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b23b17d94aee14123dfe9b85f4af9048ee6163b3' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\reservView.tpl',
      1 => 1717447864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bikesList.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6661baa258cb13_84007164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7932412546661baa255d023_45472237', 'offer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20153822776661baa2586a23_48618105', 'searching');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2988190446661baa258b6f2_94560287', 'rent');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "reserv.tpl");
}
/* {block 'searching'} */
class Block_10413841606661baa255da24_93884008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'searching'} */
/* {block 'rent'} */
class Block_11717596396661baa2585790_05700635 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'rent'} */
/* {block 'offer'} */
class Block_7932412546661baa255d023_45472237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offer' => 
  array (
    0 => 'Block_7932412546661baa255d023_45472237',
  ),
  'searching' => 
  array (
    0 => 'Block_10413841606661baa255da24_93884008',
  ),
  'rent' => 
  array (
    0 => 'Block_11717596396661baa2585790_05700635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="features" class="container special">
        <header>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10413841606661baa255da24_93884008', 'searching', $this->tplIndex);
?>

        </header>
        <div class="row" id="bikesToReload">
            <?php $_smarty_tpl->_subTemplateRender("file:bikesList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <br><br>
        <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11717596396661baa2585790_05700635', 'rent', $this->tplIndex);
?>

        <?php }?>
    </section>
<?php
}
}
/* {/block 'offer'} */
/* {block 'searching'} */
class Block_20153822776661baa2586a23_48618105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'searching' => 
  array (
    0 => 'Block_20153822776661baa2586a23_48618105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="searchForm" class="rentForm" onsubmit="ajaxPostForm('searchForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
bikesOnly','bikesToReload'); return false;">
        <input type="text" name="search">
        <br><button class="space">Szukaj</button>
        <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
            <button id="scroll" href="#jumpHere" class ="circled scrolly" class="space">W dół</button>
        <?php }?>
    </form><br><br>
<?php
}
}
/* {/block 'searching'} */
/* {block 'rent'} */
class Block_2988190446661baa258b6f2_94560287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rent' => 
  array (
    0 => 'Block_2988190446661baa258b6f2_94560287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="jumpHere"></div>
    <hr>
    <form class="rentForm" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservation" method="post">
        <h2>Rezerwacja</h2><br><br>
        <p>Model do wypożyczenia</p>
        <input type="text" id="input" name="modelToReserv"><br>
        <p>Od kiedy</p>
        <input type="datetime-local" name="dateStart"><br><br>
        <p>Do kiedy</p>
        <input type="datetime-local" name="dateEnd">
        <br><br><br><button>Zarezerwuj</button>
    </form>
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'rent'} */
}
