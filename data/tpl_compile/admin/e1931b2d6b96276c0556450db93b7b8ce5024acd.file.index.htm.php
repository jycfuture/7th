<?php /* Smarty version Smarty-3.0.6, created on 2013-01-25 10:25:19
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\hidden/cls/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:92965101ed0fe4e8f1-29494179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1931b2d6b96276c0556450db93b7b8ce5024acd' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\hidden/cls/index.htm',
      1 => 1358992288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92965101ed0fe4e8f1-29494179',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/main.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
js/global.js"></script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=hidden/cls&act=doCls&cacheName=all" class="lnkDelete"><?php echo $_smarty_tpl->getVariable('lang')->value->all;?>
</a>
		</div>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
			<tr class="editHdTr">
				<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->update_cache;?>
</td>
			</tr>
			<tr class="editTr">
				<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->action_cache;?>
:</td>
				<td class="editRtTd"><a href="?con=admin&ctl=hidden/cls&act=doCls&cacheName=action"><?php echo $_smarty_tpl->getVariable('lang')->value->update;?>
</a></td>
			</tr>
			<tr class="editFtTr">
				<td></td>
				<td>
					<a href="?con=admin&ctl=hidden/cls&act=doCls&cacheName=all" class="lnkDelete"><?php echo $_smarty_tpl->getVariable('lang')->value->all;?>
</a>
				</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>