<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:34:00
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\adminPanelView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bac802c310_31306986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f9b9e962f79ec2b95dbcfeb931f3cbd9aea2804' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\adminPanelView.tpl',
      1 => 1717447892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminTable.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6661bac802c310_31306986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15470132946661bac8017220_76433596', 'offer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10607773496661bac801d036_63961921', 'roles');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2192607876661bac80289b0_38713247', 'searching');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "reserv.tpl");
}
/* {block 'searching'} */
class Block_21021525146661bac8017c70_77451770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'searching'} */
/* {block 'roles'} */
class Block_18844646526661bac801c188_99951949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'roles'} */
/* {block 'offer'} */
class Block_15470132946661bac8017220_76433596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'offer' => 
  array (
    0 => 'Block_15470132946661bac8017220_76433596',
  ),
  'searching' => 
  array (
    0 => 'Block_21021525146661bac8017c70_77451770',
  ),
  'roles' => 
  array (
    0 => 'Block_18844646526661bac801c188_99951949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="features" class="container special">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21021525146661bac8017c70_77451770', 'searching', $this->tplIndex);
?>

    </section>
        <div id="dataToReload">
            <?php $_smarty_tpl->_subTemplateRender("file:adminTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <br><br>
    <section id="features" class="container special">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18844646526661bac801c188_99951949', 'roles', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'offer'} */
/* {block 'roles'} */
class Block_10607773496661bac801d036_63961921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'roles' => 
  array (
    0 => 'Block_10607773496661bac801d036_63961921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="jumpHere"></div>
    <hr>
    <form class="rentForm" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addRole" method="post">
        <br><h2>Operacje na rolach - system</h2><br><br><br>
        <p>Rola do dodania</p>
        <input type="text" name="newRole"><br>
        <button>Dodaj</button>
    </form>

    <form class="rentForm" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
disableRole" method="post">
        <p>Rola do usunięcia</p>
        <select name="roles">
            <option value="" selected="true" hidden="true" disabled>Wybierz role do usunięcia</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value["id_role"];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value["role"];?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <br><button>Usuń</button>
    </form>
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'roles'} */
/* {block 'searching'} */
class Block_2192607876661bac80289b0_38713247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'searching' => 
  array (
    0 => 'Block_2192607876661bac80289b0_38713247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form id="searchForm" class="rentForm" onsubmit="ajaxPostForm('searchForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
tableOnly','dataToReload'); return false;">
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
}
