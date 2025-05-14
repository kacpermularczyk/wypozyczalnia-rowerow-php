<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:39:59
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\editBikeView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bc2f4ac8c8_13824474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ce6fff6d9a2a987b1a857dde9d9eca4df91472c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\editBikeView.tpl',
      1 => 1717453746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_6661bc2f4ac8c8_13824474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15634327446661bc2f4a0850_92458259', 'header');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "log.tpl");
}
/* {block 'header'} */
class Block_15634327446661bc2f4a0850_92458259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_15634327446661bc2f4a0850_92458259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Inner -->
<div class="inner" id="log">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
editBike" method="post">
        <header>
            <h1><a href="" id="logo"><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Title" ?? null : $tmp);?>
</a></h1>
            <hr />
            <input placeholder="Model roweru" type="text" name="model"><br>
            <select name="bikeType">
                <option value="" selected disabled hidden>Wybierz typ roweru</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value["id_type"];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value["type"];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
            </select><br>
            <input placeholder="Cena" type="text" name="price"><br>
            <textarea name="description"></textarea><br>
            <input type="file" name="picture" accept="image/png, image/jpg, image/jpeg">
        </header>
        <footer>
            <button><?php echo (($tmp = $_smarty_tpl->tpl_vars['buttonText']->value ?? null)===null||$tmp==='' ? "OK" ?? null : $tmp);?>
</button>
        </footer>


        <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'header'} */
}
