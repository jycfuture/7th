<?php /* Smarty version Smarty-3.0.6, created on 2012-12-03 14:09:51
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\adv/ga/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:597150bc422fefb425-17502469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ad896814203d24e49558815e17b82dac27e3b17' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\adv/ga/index.htm',
      1 => 1354514834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '597150bc422fefb425-17502469',
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
					<td colspan="2">Google Analytics setting</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Email</td>
					<td class="editRtTd"><input name="data[email]" value="<?php if ($_smarty_tpl->getVariable('form')->value['email']){?><?php echo $_smarty_tpl->getVariable('form')->value['email'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('data')->value['email'];?>
<?php }?>" type="text" size="50" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Password</td>
					<td class="editRtTd"><input name="data[pwd]" value="<?php if ($_smarty_tpl->getVariable('form')->value['pwd']){?><?php echo $_smarty_tpl->getVariable('form')->value['pwd'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('data')->value['pwd'];?>
<?php }?>" type="text" size="50" class="text" /></td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>