<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:41:28
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\rentalViewTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bc88bd1475_94087216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3adebb8ef22c49579a6b434bee08b2f9e6b7548' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\rentalViewTable.tpl',
      1 => 1717447946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6661bc88bd1475_94087216 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <tr>
        <th>User</th>
        <th>Rower</th>
        <th>Od kiedy</th>
        <th>Do kiedy</th>
        <th>Czy w terminie</th>
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
inTerm" method="post">
                <button name="yes" value="<?php echo $_smarty_tpl->tpl_vars['r']->value["id_rental"];?>
">TAK</button>
            </form>

            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
notInTerm" method="post">
                <button name="no" value="<?php echo $_smarty_tpl->tpl_vars['r']->value["id_rental"];?>
">NIE</button>
            </form>
        </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</table><?php }
}
