<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:38:13
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\regView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bbc5041754_34358708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e984047327029caa3c9b4c7c5090fa1338654959' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\regView.tpl',
      1 => 1716734790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_6661bbc5041754_34358708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7341107516661bbc5039036_30689850', 'header');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "log.tpl");
}
/* {block 'header'} */
class Block_7341107516661bbc5039036_30689850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_7341107516661bbc5039036_30689850',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Inner -->
<div class="inner" id="log">
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post">
        <header>
            <h1><a href="" id="logo"><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Title" ?? null : $tmp);?>
</a></h1>
            <hr />
            <input placeholder="Imie" type="text" name="firstName"><br>
            <input placeholder="Nazwisko" type="text" name="surname"><br>
            <input placeholder="E-mail" type="text" name="email"><br>
            <input placeholder="Login" type="text" name="login"><br>
            <input placeholder="Hasło" type="password" name="password"><br>
            <input placeholder="Powtórz hasło" type="password" name="passwordRepeat">
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
