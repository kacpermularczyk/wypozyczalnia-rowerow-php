<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:33:22
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\bikesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661baa2673d95_50022211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52b2f25c94fa0ba2b60b9867bf4ec854fe029e48' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\bikesList.tpl',
      1 => 1717344182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6661baa2673d95_50022211 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bikes']->value, 'b');
$_smarty_tpl->tpl_vars['b']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->do_else = false;
?>
<article class="col-4 col-12-mobile special">
    <a href="#" class="image featured"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/<?php echo $_smarty_tpl->tpl_vars['b']->value["picture"];?>
" alt="" /></a>
    <header>
        <?php if ($_smarty_tpl->tpl_vars['b']->value["bike_condition"] == "Dostępny") {?>
            <button value="<?php echo $_smarty_tpl->tpl_vars['b']->value["id_bike"];?>
" name="bikeToRent" onclick="document.getElementById('input').value = '<?php echo $_smarty_tpl->tpl_vars['b']->value["model"];?>
';document.getElementById('scroll').click()"><?php echo $_smarty_tpl->tpl_vars['b']->value["model"];?>
 (<?php echo $_smarty_tpl->tpl_vars['b']->value["type"];?>
) - <?php echo $_smarty_tpl->tpl_vars['b']->value["price"];?>
</button>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['b']->value["bike_condition"] != "Dostępny") {?>
            <button><?php echo $_smarty_tpl->tpl_vars['b']->value["model"];?>
 (<?php echo $_smarty_tpl->tpl_vars['b']->value["type"];?>
) - <?php echo $_smarty_tpl->tpl_vars['b']->value["price"];?>
</button>
        <?php }?>
        <h3><?php echo $_smarty_tpl->tpl_vars['b']->value["bike_condition"];?>
</h3>
    </header>
    <?php if (\core\RoleUtils::inRole('worker')) {?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
editBikeView" method="post">
            <button id="left" value="<?php echo $_smarty_tpl->tpl_vars['b']->value["id_bike"];?>
" name="bikeToEdit">Edytuj</button>
        </form>

        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deleteBike" method="post">
            <button id="right" value="<?php echo $_smarty_tpl->tpl_vars['b']->value["id_bike"];?>
" name="bikeToDel">Usuń</button>
        </form>
    <?php }?>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['b']->value["description"];?>

    </p>
</article>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
