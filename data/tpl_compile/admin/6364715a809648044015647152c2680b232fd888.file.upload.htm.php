<?php /* Smarty version Smarty-3.0.6, created on 2013-03-14 16:13:43
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\upload.htm" */ ?>
<?php /*%%SmartyHeaderCode:4538514186b7b16712-37210111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6364715a809648044015647152c2680b232fd888' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\upload.htm',
      1 => 1358910976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4538514186b7b16712-37210111',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_smarty_tpl->getVariable('lang')->value->file_upload;?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/main.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
js/global.js"></script>
<style>
.inner, .wrap { background:none; }
.inner .container { background:none; }
</style>
<script type="text/javascript">
function check (obj)
{
	if (obj.file.value == "")
	{
		alert("<?php echo $_smarty_tpl->getVariable('lang')->value->please_choose_upload_file;?>
");
		return false;
	}

	if (obj.file.value.lastIndexOf(".") == -1)
	{
		alert("<?php echo $_smarty_tpl->getVariable('lang')->value->file_type_not_correct;?>
");
		return false;
	}

	var ext = obj.file.value.substr(obj.file.value.lastIndexOf(".") + 1).toLowerCase();

	if (<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['exts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?><?php if ($_smarty_tpl->tpl_vars['key']->value>0){?> && <?php }?>ext != '<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
'<?php }} ?>)
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->file_must_be_follow_format;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['exts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?><?php if ($_smarty_tpl->tpl_vars['key']->value>0){?> , <?php }?><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php }} ?>');
		return false;
	}

	return true;
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<form action="<?php echo $_smarty_tpl->getVariable('actionUrl')->value;?>
" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->file_upload;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->select_upload_file;?>
</td>
					<td class="editRtTd"><input name="file" type="file" size="40" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->file_name;?>
</td>
					<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('data')->value['fileName'];?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->file_type;?>
</td>
					<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('data')->value['fileExt'];?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->explain;?>
</td>
					<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('data')->value['intro'];?>
</td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="javascript:window.close();" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->close_window;?>
</a> 
						<a href="<?php echo $_smarty_tpl->getVariable('deleteUrl')->value;?>
" class="lnkDelete" onclick="return chkDelete();"><?php echo $_smarty_tpl->getVariable('lang')->value->delete;?>
</a>
					</td>
				</tr>
			</table>
		</form>
		<?php if ($_smarty_tpl->getVariable('data')->value['fileExt']=='jpg'||$_smarty_tpl->getVariable('data')->value['fileExt']=='jpeg'||$_smarty_tpl->getVariable('data')->value['fileExt']=='gif'||$_smarty_tpl->getVariable('data')->value['fileExt']=='png'){?>
			<p><img src="<?php echo $_smarty_tpl->getVariable('data')->value['filefullname'];?>
" /></p>
		<?php }?>
	</div>
</div>
</body>
</html>