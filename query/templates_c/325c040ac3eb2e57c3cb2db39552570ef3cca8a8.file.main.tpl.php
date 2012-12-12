<?php /* Smarty version Smarty-3.1.12, created on 2012-11-12 17:54:13
         compiled from ".\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1587150923c12acb869-45095639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '325c040ac3eb2e57c3cb2db39552570ef3cca8a8' => 
    array (
      0 => '.\\templates\\main.tpl',
      1 => 1352728451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1587150923c12acb869-45095639',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50923c12ad4f85_97724484',
  'variables' => 
  array (
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50923c12ad4f85_97724484')) {function content_50923c12ad4f85_97724484($_smarty_tpl) {?><html>
    <head>
        <title>
            <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

        </title>
    </head>

    <body>
        <table width="100%" height="100%">
            <tr>
                <td valign=top height="10%"><h1>Содержимое БД</h1>
                </td>
            </tr>

            <tr>
                <td width="100%" valign=top>
                    <?php echo $_smarty_tpl->getSubTemplate ("templates/db.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </td>
            </tr>
        </table>
    </body>
</html><?php }} ?>