<?php /* Smarty version 2.6.26, created on 2012-11-21 20:00:27
         compiled from system/site/index.htm */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/main.css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/global.js"></script>
<?php if ($this->_tpl_vars['data']['isContactEnabled'] || $this->_tpl_vars['data']['isCopyrightEnabled']): ?>
<script src="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
/editor/ckeditor/ckeditor.js"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['data']['isCopyrightEnabled'] || $this->_tpl_vars['data']['isContactEnabled']): ?>
<script>
$(function(){
	<?php if ($this->_tpl_vars['data']['isCopyrightEnabled']): ?>
	CKEDITOR.replace('copyright', {
		height	: 150
	});
	<?php endif; ?>
	<?php if ($this->_tpl_vars['data']['isContactEnabled']): ?>
	CKEDITOR.replace('contact', {
		height	: 150
	});
	<?php endif; ?>
});
</script>
<?php endif; ?>
<script type="text/javascript">
function check (form)
{
	var name = document.getElementsByName('data[name]')[0];
	if (name.value == '')
	{
		alert('The name of the site can not be empty!');
		name.focus();
		return false;
	}

	var name = document.getElementsByName('data[title]')[0];
	if (name.value == '')
	{
		alert('Website title can not be empty!');
		name.focus();
		return false;
	}

	<?php if ($this->_tpl_vars['data']['isCopyrightEnabled']): ?>
	$('#copyright').val(CKEDITOR.instances.copyright.getData(););
	<?php endif; ?>
	<?php if ($this->_tpl_vars['data']['isContactEnabled']): ?>
	$('#contact').val(CKEDITOR.instances.contact.getData(););
	<?php endif; ?>

	return true;
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips"></div>
		<table class="tabTable">
			<tr>
				<?php if ($this->_tpl_vars['hideColumn']['site_index']): ?><td><a class="current" href="#">Basic Settings</a></td><?php endif; ?>
				<?php if ($this->_tpl_vars['hideColumn']['site_other']): ?><td><a href="?con=admin&ctl=system/site&act=other">Advanced Settings</a></td><?php endif; ?>
			</tr>
		</table>
		<form action="?con=admin&ctl=system/site&id=<?php echo $this->_tpl_vars['data']['id']; ?>
" method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Basic Settings</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Site Name</td>
					<td class="editRtTd"><input name="data[name]" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Site Title</td>
					<td class="editRtTd"><input name="data[pageTitle]" value="<?php echo $this->_tpl_vars['data']['pageTitle']; ?>
" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Keywords</td>
					<td class="editRtTd"><input name="data[keywords]" value="<?php echo $this->_tpl_vars['data']['keywords']; ?>
" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Description</td>
					<td class="editRtTd"><input name="data[description]" value="<?php echo $this->_tpl_vars['data']['description']; ?>
" type="text" size="60" class="text" /></td>
				</tr>
				<?php if ($this->_tpl_vars['data']['isCopyrightEnabled']): ?>
				<tr class="editTr">
					<td class="editLtTd">Copyright Information</td>
					<td class="editor">
						<textarea id="copyright" class="text" style="width:98%; height:120px;" name="data[copyright]"><?php echo $this->_tpl_vars['data']['copyright']; ?>
</textarea>
					</td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['isContactEnabled']): ?>
				<tr class="editTr">
					<td class="editLtTd">Contact Information</td>
					<td class="editor">
						<textarea id="contact" class="text" style="width:98%; height:120px;" name="data[contact]"><?php echo $this->_tpl_vars['data']['contact']; ?>
</textarea>
					</td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['isHeadJavascriptEnabled']): ?>
				<tr class="editTr">
					<td class="editLtTd">Head JavaScript</td>
					<td class="editor">
						<textarea class="text" style="width:98%; height:120px;" name="data[headJavaScript]"><?php echo $this->_tpl_vars['data']['headJavaScript']; ?>
</textarea>
					</td>
				</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['isFootJavascriptEnabled']): ?>
				<tr class="editTr">
					<td class="editLtTd">Foot JavaScript</td>
					<td class="editor">
						<textarea class="text" style="width:98%; height:120px;" name="data[footJavaScript]"><?php echo $this->_tpl_vars['data']['footJavaScript']; ?>
</textarea>
					</td>
				</tr>
				<?php endif; ?>
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