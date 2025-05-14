<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:34:03
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\userRentalsTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bacbeb55d5_11503673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85bee124e4012410694ff27d98507246c6b9650a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\userRentalsTable.tpl',
      1 => 1717449676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6661bacbeb55d5_11503673 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
<tr>
    <th>Rower</th>
    <th>Od kiedy</th>
    <th>Do kiedy</th>
    <th>Czy oddałeś/aś w terminie</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rentals']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value["model"];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value["date_start"];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['r']->value["date_end"];?>
</td>
    
        <?php if ($_smarty_tpl->tpl_vars['r']->value["returned_in_term"] == 1) {?>
            <td>Tak</td>
        <?php } elseif ($_smarty_tpl->tpl_vars['r']->value["not_returned_in_term"] == 1) {?>
            <td>Nie</td>
        <?php } else { ?>
            <td>Rezerwacja trwa</td>
        <?php }?>
    
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table><?php }
}
