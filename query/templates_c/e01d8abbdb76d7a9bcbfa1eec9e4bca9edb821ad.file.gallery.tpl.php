<?php /* Smarty version Smarty-3.1.12, created on 2012-11-01 13:20:05
         compiled from ".\templates\gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1838050923c1f588796-11098407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e01d8abbdb76d7a9bcbfa1eec9e4bca9edb821ad' => 
    array (
      0 => '.\\templates\\gallery.tpl',
      1 => 1351761604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1838050923c1f588796-11098407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50923c1f5c73c4_36452758',
  'variables' => 
  array (
    'img1_url' => 0,
    'img2_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50923c1f5c73c4_36452758')) {function content_50923c1f5c73c4_36452758($_smarty_tpl) {?><h3>Галлерея</h3>
<p>
    <img src="<?php echo $_smarty_tpl->tpl_vars['img1_url']->value;?>
">
    <img src="<?php echo $_smarty_tpl->tpl_vars['img2_url']->value;?>
"><br>
    <a href="?mode=upload_form">Добавить</a>
</p><?php }} ?>