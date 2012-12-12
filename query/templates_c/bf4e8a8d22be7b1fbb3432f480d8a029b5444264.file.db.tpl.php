<?php /* Smarty version Smarty-3.1.12, created on 2012-11-12 17:37:18
         compiled from ".\templates\db.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11970509ee019343a44-07739371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf4e8a8d22be7b1fbb3432f480d8a029b5444264' => 
    array (
      0 => '.\\templates\\db.tpl',
      1 => 1352727278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11970509ee019343a44-07739371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509ee0193b06c8_18806843',
  'variables' => 
  array (
    'arr' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509ee0193b06c8_18806843')) {function content_509ee0193b06c8_18806843($_smarty_tpl) {?><table>
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