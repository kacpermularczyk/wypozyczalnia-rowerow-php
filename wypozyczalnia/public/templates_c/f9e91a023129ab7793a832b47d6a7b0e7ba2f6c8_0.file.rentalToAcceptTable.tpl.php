<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:40:59
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\rentalToAcceptTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bc6b14f337_53485293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e91a023129ab7793a832b47d6a7b0e7ba2f6c8' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\rentalToAcceptTable.tpl',
      1 => 1717452918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6661bc6b14f337_53485293 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <tr>
        <th>User</th>
        <th>Rower</th>
        <th>Od kiedy</th>
        <th>Do kiedy</th>
        <th>Opcje</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rentals']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value["login"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value["model"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value["date_start"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value["date_end"];?>
</td>
        <td>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
accept" method="post">
                <button name="acceptButton" value="<?php echo $_smarty_tpl->tpl_vars['r']->value["id_rental"];?>
">Accept</button>
            </form>

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
decline" method="post">
                <button name="declineButton" value="<?php echo $_smarty_tpl->tpl_vars['r']->value["id_rental"];?>
">Decline</button>
            </form>
        </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</table><?php }
}
