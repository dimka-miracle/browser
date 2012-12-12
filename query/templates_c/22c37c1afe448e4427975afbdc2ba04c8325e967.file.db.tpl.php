<?php /* Smarty version Smarty-3.1.12, created on 2012-11-12 17:52:19
         compiled from "C:\Development\Projects\task2\templates\db.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1975350a0fedc81b129-81736095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22c37c1afe448e4427975afbdc2ba04c8325e967' => 
    array (
      0 => 'C:\\Development\\Projects\\task2\\templates\\db.tpl',
      1 => 1352728336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1975350a0fedc81b129-81736095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a0fedc834cf2_75623691',
  'variables' => 
  array (
    'arr' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a0fedc834cf2_75623691')) {function content_50a0fedc834cf2_75623691($_smarty_tpl) {?><table border>
    <tr>
        <td>User_ID</td>
        <td>Login</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pass'];?>
</td>
    </tr>
    <?php } ?>
</table><?php }} ?>