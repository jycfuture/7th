<?php /* Smarty version 2.6.26, created on 2012-09-29 10:05:03
         compiled from info/class/add.htm */ ?>
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
		<form action="?con=admin&ctl=info/class&act=add&parent_id=<?php echo $this->_tpl_vars['parent_id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
" method="post" onsubmit="return check(this);">
			<table class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Classification of the basic parameters</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Ordinal the smaller the more forward">Ordinal</em></td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $this->_tpl_vars['ordinal']; ?>
" type="text" size="20" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Support batch create the classification of each category separate from his party">Category Name</em></td>
					<td class="editor">
						<textarea name="data[name]" style="width:98%; height:120px;" class="text"></textarea>
					</td>
				</tr>
				<?php if ($this->_tpl_vars['data']['extend']['hasAlias']): ?>
					<tr class="editTr">
						<td class="editLtTd">Category alias</td>
						<td class="editRtTd"><input name="data[alias]" value="" type="text" size="30" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasTemplate']): ?>
					<tr class="editTr">
						<td class="editLtTd">Category Template</td>
						<td class="editRtTd"><input name="data[template]" value="" type="text" size="30" class="text" /></td>
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
						<td class="editRtTd"><input name="data[url]" value="" type="text" size="60" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasPageTitle']): ?>
					<tr class="editTr">
						<td class="editLtTd">Page title</td>
						<td class="editRtTd"><input name="data[pageTitle]" value="" type="text" size="100" maxlength="100" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasKeywords']): ?>
					<tr class="editTr">
						<td class="editLtTd">Keyword</td>
						<td class="editRtTd"><input name="data[keywords]" value="" type="text" size="100" maxlength="150" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasDescription']): ?>
					<tr class="editTr">
						<td class="editLtTd">Description</td>
						<td class="editRtTd"><input name="data[description]" value="" type="text" size="100" maxlength="250" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasIntro']): ?>
					<tr class="editTr">
						<td class="editLtTd">Introduction</td>
						<td class="editor"><textarea id="intro" name="data[intro]" style="width:98%; height:120px;" class="text"></textarea></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['data']['extend']['hasContent']): ?>
					<tr class="editTr">
						<td class="editLtTd">Detail</td>
						<td class="editor"><textarea id="content" name="data[content]" style="width:98%; height:120px;" class="text"></textarea></td>
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