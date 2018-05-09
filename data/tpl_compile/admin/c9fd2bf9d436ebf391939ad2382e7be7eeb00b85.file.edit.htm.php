<?php /* Smarty version Smarty-3.0.6, created on 2012-12-03 14:08:30
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\hidden/relation/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:1636250bc41deedad83-31251343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9fd2bf9d436ebf391939ad2382e7be7eeb00b85' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\hidden/relation/edit.htm',
      1 => 1332744290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1636250bc41deedad83-31251343',
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
<script type="text/javascript">
function check (form)
{
	var name = document.getElementsByName('data[name]')[0];
	if (name.value == '')
	{
		alert('The menu name can not be empty!');
		name.focus();
		return false;
	}

	return true;
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=hidden/relation" class="lnkReturn">Return to list</a> 
			<a href="?con=admin&ctl=hidden/relation&act=delete&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();">Delete</a>
		</div>
		<form action="?con=admin&ctl=hidden/relation&act=edit&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Edit menu</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Sub-headings:</td>
					<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('parent')->value['name'];?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Index:</td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $_smarty_tpl->getVariable('data')->value['ordinal'];?>
" type="text" size="20" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Name:</td>
					<td class="editRtTd"><input name="data[name]" value="<?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Link address:</td>
					<td class="editRtTd"><input name="data[url]" value="<?php echo $_smarty_tpl->getVariable('data')->value['url'];?>
" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=hidden/relation" class="lnkReturn">Return to list</a> 
						<a href="?con=admin&ctl=hidden/relation&act=delete&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();">Delete</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>