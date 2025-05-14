<?php
/* Smarty version 4.3.2, created on 2024-06-06 15:34:00
  from 'E:\xampp\htdocs\wypozyczalnia\app\views\adminTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6661bac8072de6_09736107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a76ce9b99b6158531cdeceee083e08b92d961cc7' => 
    array (
      0 => 'E:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\adminTable.tpl',
      1 => 1717437470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6661bac8072de6_09736107 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <tr>
        <th>User</th>
        <th>Rola</th>
        <th>Czy aktywna</th>
        <th>Od kiedy</th>
        <th>Do kiedy</th>
        <th>Dodaj rolę</th>
        <th>Usuń rolę</th>
        <th>Usuń usera</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
    <tr>
        <td>

        <?php echo $_smarty_tpl->tpl_vars['d']->value["login"];?>

        <?php if ($_smarty_tpl->tpl_vars['d']->value["is_active"] == 1) {?>
                (aktywne)
            <?php } else { ?>
                (nieaktywne)
            <?php }?>

        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['d']->value["role"];?>
</td>

            <?php if ($_smarty_tpl->tpl_vars['d']->value["is_activated"] == 1) {?>
                <td>Tak</td>
            <?php } else { ?>
                <td>Nie</td>
            <?php }?>

        <td><?php echo $_smarty_tpl->tpl_vars['d']->value["active_since"];?>
</td>


        
            <?php if ($_smarty_tpl->tpl_vars['d']->value["active_until"] == NULL) {?>
                <td>Ciągle aktywna</td>
            <?php } else { ?>
                <td><?php echo $_smarty_tpl->tpl_vars['d']->value["active_until"];?>
</td>
            <?php }?>
        

        <td>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addRoleToUser" method="post">
                <select name="roles">
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

                <button value="<?php echo $_smarty_tpl->tpl_vars['d']->value["id_user"];?>
" name="userId">Dodaj</button>
            </form>
        </td>

        <td>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
disableRoleToUser" method="post">
                <select name="roles">               
                        <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value["id_role"];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value["role"];?>
</option>
                </select>

                <button value="<?php echo $_smarty_tpl->tpl_vars['d']->value["id_user"];?>
" name="userId">Usuń</button>
            </form>
        </td>

        <td>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
deleteUser" method="post">
                <button value="<?php echo $_smarty_tpl->tpl_vars['d']->value["id_user"];?>
" name="userId">Usuń</button>
            </form>
        </td>
        
            
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
</table><?php }
}
