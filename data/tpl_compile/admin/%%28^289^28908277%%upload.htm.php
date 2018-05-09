<?php /* Smarty version 2.6.26, created on 2012-08-14 10:08:29
         compiled from upload.htm */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>File upload</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/main.css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
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
		alert("Please choose the upload files!");
		return false;
	}

	if (obj.file.value.lastIndexOf(".") == -1)
	{
		alert("The file type is not correct!");
		return false;
	}

	var ext = obj.file.value.substr(obj.file.value.lastIndexOf(".") + 1).toLowerCase();

	if (<?php $_from = $this->_tpl_vars['data']['exts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?><?php if ($this->_tpl_vars['key'] > 0): ?> && <?php endif; ?>ext != '<?php echo $this->_tpl_vars['item']; ?>
'<?php endforeach; endif; unset($_from); ?>)
	{
		alert('The file must be in the following format: <?php $_from = $this->_tpl_vars['data']['exts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?><?php if ($this->_tpl_vars['key'] > 0): ?> , <?php endif; ?><?php echo $this->_tpl_vars['item']; ?>
<?php endforeach; endif; unset($_from); ?>');
		return false;
	}

	return true;
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<form action="<?php echo $this->_tpl_vars['actionUrl']; ?>
" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">File upload</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Select the file</td>
					<td class="editRtTd"><input name="file" type="file" size="40" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">File name</td>
					<td class="editRtTd"><?php echo $this->_tpl_vars['data']['fileName']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">File Type</td>
					<td class="editRtTd"><?php echo $this->_tpl_vars['data']['fileExt']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Direction</td>
					<td class="editRtTd"><?php echo $this->_tpl_vars['data']['intro']; ?>
</td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="javascript:window.close();" class="lnkReturn">Close window</a> 
						<a href="<?php echo $this->_tpl_vars['deleteUrl']; ?>
" class="lnkDelete" onclick="return chkDelete();">Delete</a>
					</td>
				</tr>
			</table>
		</form>
		<?php if ($this->_tpl_vars['data']['fileExt'] == 'jpg' || $this->_tpl_vars['data']['fileExt'] == 'jpeg' || $this->_tpl_vars['data']['fileExt'] == 'gif' || $this->_tpl_vars['data']['fileExt'] == 'png'): ?>
			<p><img src="<?php echo $this->_tpl_vars['data']['filefullname']; ?>
" /></p>
		<?php endif; ?>
	</div>
</div>
</body>
</html>