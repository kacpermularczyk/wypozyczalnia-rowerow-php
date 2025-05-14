<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:33:52
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\logView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bac0787b88_69577397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c01ecc4992402548d6829a1adea693498cdf85cb' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\logView.tpl',
      1 => 1716734654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_6661bac0787b88_69577397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20155358406661bac077a130_55391732', 'header');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "log.tpl");
}
/* {block 'header'} */
class Block_20155358406661bac077a130_55391732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_20155358406661bac077a130_55391732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Inner -->
<div class="inner" id="log">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
        <header>
            <h1><a href="" id="logo"><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Title" ?? null : $tmp);?>
</a></h1>
            <hr />
            <input placeholder="Login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"><br>
            <input placeholder="Hasło" type="password" name="password">
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
