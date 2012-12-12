<?php /* Smarty version Smarty-3.1.12, created on 2012-11-01 13:08:34
         compiled from ".\templates\news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1257450923c12a07117-56862042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97e0ce8c13f794659209c72fc53b4919d75eac1e' => 
    array (
      0 => '.\\templates\\news.tpl',
      1 => 1351760080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1257450923c12a07117-56862042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date' => 0,
    'header' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50923c12aaea19_47582389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50923c12aaea19_47582389')) {function content_50923c12aaea19_47582389($_smarty_tpl) {?><h3>Новости</h3>
<h5><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h5>
<p><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p><?php }} ?>