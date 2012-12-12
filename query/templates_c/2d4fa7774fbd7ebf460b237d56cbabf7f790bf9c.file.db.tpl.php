<?php /* Smarty version Smarty-3.1.12, created on 2012-12-12 18:50:57
         compiled from "templates\db.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2095650a0ff85310386-36199345%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d4fa7774fbd7ebf460b237d56cbabf7f790bf9c' => 
    array (
      0 => 'templates\\db.tpl',
      1 => 1355323856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2095650a0ff85310386-36199345',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50a0ff8532b7b2_49231107',
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a0ff8532b7b2_49231107')) {function content_50a0ff8532b7b2_49231107($_smarty_tpl) {?><form action="" method="POST">
    Выберите регион
    <select name="region">
            <option disabled>Выберите регион</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <option value='$item.region'></option>
            <?php } ?>
    </select>
    <br>
    Выберите страну
    <select name="country">
        <option disabled>Выберите страну</option>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value='$item.country'></option>
        <?php } ?>
    </select>
    <br>
    Выберите  город
    <select name="city">
        <option disabled>Выберите город</option>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value='$item.city'></option>
        <?php } ?>
    </select>
</form>



<?php }} ?>