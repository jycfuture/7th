<?php /* Smarty version 2.6.26, created on 2012-09-29 10:05:08
         compiled from info/class/edit.htm */ ?>
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
<?php if ($this->_tpl_vars['data']['extend']['hasIntro'] || $this->_tpl_vars['data']['extend']['hasContent']): ?>
<script src="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
/editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
$(function(){
	<?php if ($this->_tpl_vars['data']['extend']['hasIntro']): ?>
	CKEDITOR.replace('intro', {
		height : 200,
		filebrowserImageUploadUrl : '?con=admin&ctl=editor&act=pic'
	});
	<?php endif; ?>
	<?php if ($this->_tpl_vars['data']['extend']['hasContent']): ?>
	CKEDITOR.replace('content', {
		height : 350,
		filebrowserImageUploadUrl : '?con=admin&ctl=editor&act=pic'
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
		alert('The category name can not be empty!');
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
			<?php if ($this->_tpl_vars['noback']): ?><?php else: ?><a href="<?php echo $this->_tpl_vars['refreshUrl']; ?>
" class="lnkReturn">Return to list</a> <?php endif; ?>
		</div>
		<?php if ($this->_tpl_vars['columnChk']['class_setting']): ?>
		<table class="tabTable" id="tableTab">
			<tr>
				<td><a class="current" href="#"><em class="tip" tips="Can configure advanced parameters limit">Basic parameters</em></a></a></td>
				<td><a href="?con=admin&ctl=info/class&act=setting&id=<?php echo $this->_tpl_vars['data']['id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
"><em class="tip" tips="Advanced parameter controls the basic parameters can be configured in the form item. Note: The classification is created, senior parameters inherited from the parent classification">Advanced Parameters</em></a></td>
			</tr>
		</table>
		<?php endif; ?>
		<form action="?con=admin&ctl=info/class&act=edit&id=<?php echo $this->_tpl_vars['data']['id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
" method="post" onsubmit="return check(this);">
			<table class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Classification of the basic parameters</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Classification level</td>
					<td class="editRtTd"><?php echo $this->_tpl_vars['parentStr']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Ordinal the smaller the more forward">Ordinal</em></td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $this->_tpl_vars['data']['ordinal']; ?>
" type="text" size="20" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Category Name</td>
					<td class="editRtTd"><input name="data[name]" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" type="text" size="60" class="text" /></td>
				</tr>
				<?php if ($this->_tpl_vars['data']['extend']['hasAlias']): ?>
					<tr class="editTr">
						<td class="editLtTd">Category alias</td>
						<td class="editRtTd"><input name="data[alias]" value="<?php echo $this->_tpl_vars['data']['alias']; ?>
" type="text" size="30" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasTemplate']): ?>
					<tr class="editTr">
						<td class="editLtTd">Category Template</td>
						<td class="editRtTd"><input name="data[template]" value="<?php echo $this->_tpl_vars['data']['template']; ?>
" type="text" size="30" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasDomain']): ?>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="If checked, automatically create the corresponding directory">Domain</em></td>
						<td class="editRtTd"><input id="data[domain]" name="data[domain]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['domain']): ?> checked<?php endif; ?> /><label for="data[domain]">Generate a sub-level domain name</label></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasclassStyle']): ?>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="Section title style">Style</em></td>
						<td class="editRtTd">
							<input name="color" value="<?php echo $this->_tpl_vars['data']['color']; ?>
" type="text" size="10" class="text" /> 
							<input id="chkTitleBold" name="chkTitleBold" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['chkTitleBold']): ?> checked<?php endif; ?> /><label for="chkTitleBold">Bold</label>
							<input id="chkTitleItalic" name="chkTitleItalic" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['chkTitleItalic']): ?> checked<?php endif; ?> /><label for="chkTitleItalic">Italic</label>
						</td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasDisplayMode']): ?>
					<tr class="editTr">
						<td class="editLtTd">Display mode</td>
						<td class="editRtTd">
							<?php $_from = $this->_tpl_vars['data']['displayModes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
								<?php if ($this->_tpl_vars['item'][2]): ?>
									<input id="<?php echo $this->_tpl_vars['item'][0]; ?>
" name="data[defaultDisplayMode]" value="<?php echo $this->_tpl_vars['item'][0]; ?>
" type="radio"<?php if ($this->_tpl_vars['item'][0] == $this->_tpl_vars['data']['defaultDisplayMode']): ?> checked<?php endif; ?> /><label for="<?php echo $this->_tpl_vars['item'][0]; ?>
"><?php echo $this->_tpl_vars['item'][1]; ?>
</label>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						</td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasUrl']): ?>
					<tr class="editTr">
						<td class="editLtTd">Link address</td>
						<td class="editRtTd"><input name="data[url]" value="<?php echo $this->_tpl_vars['data']['url']; ?>
" type="text" size="60" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasPageTitle']): ?>
					<tr class="editTr">
						<td class="editLtTd">Page title</td>
						<td class="editRtTd"><input name="data[pageTitle]" value="<?php echo $this->_tpl_vars['data']['pageTitle']; ?>
" type="text" size="100" maxlength="100" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasKeywords']): ?>
					<tr class="editTr">
						<td class="editLtTd">Keywords</td>
						<td class="editRtTd"><input name="data[keywords]" value="<?php echo $this->_tpl_vars['data']['keywords']; ?>
" type="text" size="100" maxlength="150" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasDescription']): ?>
					<tr class="editTr">
						<td class="editLtTd">Description</td>
						<td class="editRtTd"><input name="data[description]" value="<?php echo $this->_tpl_vars['data']['description']; ?>
" type="text" size="100" maxlength="250" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasIntro']): ?>
					<tr class="editTr">
						<td class="editLtTd">Introduction</td>
						<td class="editor"><textarea id="intro" name="data[intro]" style="width:98%; height:120px;" class="text"><?php echo $this->_tpl_vars['data']['intro']; ?>
</textarea></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasContent']): ?>
					<tr class="editTr">
						<td class="editLtTd">Detail</td>
						<td class="editor"><textarea id="content" name="data[content]" style="width:98%; height:120px;" class="text"><?php echo $this->_tpl_vars['data']['content']; ?>
</textarea></td>
					</tr>
				<?php endif; ?>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<?php if ($this->_tpl_vars['noback']): ?><?php else: ?><a href="<?php echo $this->_tpl_vars['refreshUrl']; ?>
" class="lnkReturn">Return to list</a> <?php endif; ?>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>