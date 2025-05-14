<?php
/* Smarty version 4.3.2, created on 2024-06-04 14:54:52
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665f0e9c3c5d69_56399121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba9e459ca9009095d4e9afea1b1402c2efc0ebb' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\templates\\nav.tpl',
      1 => 1717454044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665f0e9c3c5d69_56399121 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mainView">Strona główna</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
reservationView">Rezerwacje</a></li>
            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) == 0) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginView">Logowanie</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerView">Rejestracja</a></li>
            <?php }?>
            <?php if (\core\RoleUtils::inRole('worker')) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addBikeView">Dodaj rower</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
acceptRentalsView">Akceptuj zamówienia</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rentalsView">Rezerwacje</a></li>
            <?php }?>
            <?php if (\core\RoleUtils::inRole('admin')) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminPanelView">Panel admina</a></li>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userRentalsView">Twoje rezerwacje</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
            <?php }?>
        </ul>
    </nav><?php }
}
