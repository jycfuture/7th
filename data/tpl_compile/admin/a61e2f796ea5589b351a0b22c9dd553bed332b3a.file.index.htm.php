<?php /* Smarty version Smarty-3.0.6, created on 2017-10-16 08:44:43
         compiled from "D:/www/kxmh/core/common/skin/admin\adv/adminemail/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2039259e4717b7a04c0-42887635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a61e2f796ea5589b351a0b22c9dd553bed332b3a' => 
    array (
      0 => 'D:/www/kxmh/core/common/skin/admin\\adv/adminemail/index.htm',
      1 => 1413799238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2039259e4717b7a04c0-42887635',
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
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
js/global.js"></script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips"></div>
		<form id="editForm" method="post">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->admin_email_setting;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->admin_email;?>
</td>
					<td class="editRtTd"><input name="data[email]" value="<?php if ($_smarty_tpl->getVariable('form')->value['email']){?><?php echo $_smarty_tpl->getVariable('form')->value['email'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('data')->value['email'];?>
<?php }?>" type="text" size="50" class="text" /></td>
				</tr>
			</table>
			<div class="editBtn clearfix">
				<input type="submit" value="Save" class="lnkSave" /> 
			</div>
		</form>
	</div>
</div>
</body>
</html>