<?php /* Smarty version Smarty-3.0.6, created on 2013-01-25 10:25:09
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\hidden/gml/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:46855101ed0590a0a8-51110025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cae13cff96e4ec9e9b41758d4157208dbc5988b' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\hidden/gml/index.htm',
      1 => 1358992500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46855101ed0590a0a8-51110025',
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
		<div class="tips"></div>
		<form method="post">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->generate_multiple_lang;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->source_lang;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
</td>
					<td class="editRtTd"><input name="sourceLang" type="text" size="20" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->target_lang;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
</td>
					<td class="editRtTd"><input name="targetLang" type="text" size="20" class="text" /></td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td><input type="submit" value="" class="lnkSave" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>