<?php /* Smarty version Smarty-3.1.12, created on 2012-11-01 13:38:53
         compiled from ".\templates\addform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249875092432d5db579-34625925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1848af02da0f0262137dd405036e9bc049a10b0b' => 
    array (
      0 => '.\\templates\\addform.tpl',
      1 => 1351762723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249875092432d5db579-34625925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5092432d612ac2_91507100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5092432d612ac2_91507100')) {function content_5092432d612ac2_91507100($_smarty_tpl) {?><form enctype="multipart/form-data" action="gallery.php?mode=do_upload" method=POST>
    <table>
        <tr><td>Картинка:<td><input name="userfile" type="file">
        <input type="hidden" name="MAX_FILE_SIZE" value="300000">
        <tr><td colspan=2><input type=submit value="Создать">
    </table>
</form><?php }} ?>