<?php /* Smarty version 2.6.26, created on 2012-08-14 10:08:02
         compiled from info/index/add.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'strpad', 'info/index/add.htm', 96, false),)), $this); ?>
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
<?php if ($this->_tpl_vars['class']['info']['hasPublishdate']): ?>
<link href="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.core.css" rel="stylesheet" />
<link href="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.datepicker.css" rel="stylesheet" />
<link href="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.theme.css" rel="stylesheet" />
<script src="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.core.js"></script>
<script src="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.datepicker.js"></script>
<?php endif; ?>
<?php if ($this->_tpl_vars['class']['info']['hasContent']): ?>
<script src="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
/editor/ckeditor/ckeditor.js"></script>
<script>
$(function(){
	CKEDITOR.replace('content', {
		height : 350,
		filebrowserImageUploadUrl : '?con=admin&ctl=editor&act=pic'
	});
});
</script>
<?php endif; ?>
<script type="text/javascript">
function check (form)
{
	var name = document.getElementsByName('data[title]')[0];
	if (name.value == '')
	{
		alert('Title can not be empty!');
		name.focus();
		return false;
	}

	var name = document.getElementsByName('data[class_id]')[0];
	if (name.value == '')
	{
		alert('Select Category!');
		name.focus();
		return false;
	}

	<?php if ($this->_tpl_vars['class']['info']['hasContent']): ?>
	var content	= CKEDITOR.instances.content.getData();
	$('#content').val(content);
	<?php endif; ?>

	return true;
}
<?php if ($this->_tpl_vars['class']['info']['hasPublishdate']): ?>
$(function(){
	var obj = document.getElementsByName('data[publishedDate]')[0];
	$(obj).keydown(function(){
		return false;
	}).datepicker($.datepicker.regional["zh-cn"]);
});
<?php endif; ?>

<?php if ($this->_tpl_vars['class']['info']['hasInfoPic']): ?>
function addLine( obj ) {
	var _str = '<p><input type="file" name="pics[]" size="30" /> &nbsp; <a href="#" onclick="return deleteLine( this );">X</a></p>';
	$(obj).before(_str);
}

function deleteLine( obj ) {
	$(obj).parent().remove();
	return false;
}
<?php endif; ?>
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="<?php echo $this->_tpl_vars['returnUrl']; ?>
" class="lnkReturn">Return to list</a> 
		</div>
		<form action="?con=admin&ctl=info/&act=add&class_id=<?php echo $this->_tpl_vars['class_id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
			<table class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Information basic parameters</td>
				</tr>
				<?php if ($this->_tpl_vars['noback']): ?>
				<input type="hidden" name="data[class_id]" value="<?php echo $this->_tpl_vars['class_id']; ?>
" />
				<?php else: ?>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="This form will be determined according to the selected information classification form item, so please select the information classification">Their information classification</em></td>
					<td class="editRtTd">
						<select name="data[class_id]" onchange="window.location.href = '?con=admin&ctl=info/&act=add&class_id=' + this.value">
							<option value="">--Please Select Category--</option>
							<?php $_from = $this->_tpl_vars['infoclasslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
								<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"<?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['class_id']): ?> selected<?php endif; ?>><?php echo smarty_function_strpad(array('str' => '','len' => $this->_tpl_vars['item']['level'],'pad' => '-'), $this);?>
<?php echo $this->_tpl_vars['item']['name']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select> Please Select Category! !
					</td>
				</tr>
				<?php endif; ?>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Serial number the greater the more forward">Serial number</em></td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $this->_tpl_vars['ordinal']; ?>
" type="text" size="10" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Title</td>
					<td class="editRtTd"><input name="data[title]" value="" type="text" size="60" class="text" /></td>
				</tr>
				<?php if ($this->_tpl_vars['class']['info']['hasTitleStyle']): ?>
				<tr class="editTr">
					<td class="editLtTd">Heading styles</td>
					<td class="editRtTd">
						<input name="color" value="" type="text" size="10" class="text" /> 
						<input id="chkTitleBold" name="chkTitleBold" value="1" type="checkbox" /><label for="chkTitleBold">Bold</label>
						<input id="chkTitleItalic" name="chkTitleItalic" value="1" type="checkbox" /><label for="chkTitleItalic">Italic</label>
					</td>
				</tr>
				<?php endif; ?>
				<tr class="editTr">
					<td class="editLtTd">Information Status</td>
					<td class="editRtTd">
						<input id="isApproved" name="data[isApproved]" value="1" type="checkbox" checked /><label for="isApproved">Audit</label>
						<?php if ($this->_tpl_vars['class']['info']['hasTop']): ?><input id="isTop" name="data[isTop]" value="1" type="checkbox" /><label for="isTop">Top</label><?php endif; ?>
						<?php if ($this->_tpl_vars['class']['info']['hasRecommended']): ?><input id="isRecommended" name="data[isRecommended]" value="1" type="checkbox" /><label for="isRecommended">Recommend</label><?php endif; ?>
						<?php if ($this->_tpl_vars['class']['info']['hasHot']): ?><input id="isHot" name="data[isHot]" value="1" type="checkbox" /><label for="isHot">Hot</label><?php endif; ?>
					</td>
				</tr>
				<?php if ($this->_tpl_vars['class']['info']['hasView']): ?>
					<tr class="editTr">
						<td class="editLtTd">Information Views</td>
						<td class="editRtTd"><input name="data[hits]" value="" type="text" size="10" maxlength="10" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasAlias']): ?>
					<tr class="editTr">
						<td class="editLtTd">Subtitle</td>
						<td class="editRtTd"><input name="data[alias]" value="" type="text" size="60" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasUrl']): ?>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="Click on the link to open the link, if the non-reference information, and do not need to fill this">Link address</em></td>
						<td class="editRtTd"><input name="data[url]" value="" type="text" size="60" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasPageTitle']): ?>
					<tr class="editTr">
						<td class="editLtTd">Title of the page</td>
						<td class="editRtTd"><input name="data[pageTitle]" value="" type="text" size="100" maxlength="100" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasKeywords']): ?>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="Detailed information page keyword optimization for search engines">Keywords</em></td>
						<td class="editRtTd"><input name="data[keywords]" value="" type="text" size="100" maxlength="150" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasDescription']): ?>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="Detailed information page descriptions for search engine optimization">Information Description</em></td>
						<td class="editRtTd"><input name="data[description]" value="" type="text" size="100" maxlength="250" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasTags']): ?>
					<tr class="editTr">
						<td class="editLtTd">Tags</td>
						<td class="editRtTd"><input name="data[tags]" value="<?php echo $this->_tpl_vars['data']['tags']; ?>
" type="text" size="60" class="text" /> Multiple Tags with numbers separated by,</td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasPublishdate']): ?>
					<tr class="editTr">
						<td class="editLtTd">Release Date</td>
						<td class="editRtTd"><input name="data[publishedDate]" value="" type="text" size="15" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasSource']): ?>
					<tr class="editTr">
						<td class="editLtTd">Source</td>
						<td class="editRtTd"><input name="data[source]" value="" type="text" size="15" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasAuthor']): ?>
					<tr class="editTr">
						<td class="editLtTd">Author</td>
						<td class="editRtTd"><input name="data[author]" value="" type="text" size="15" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasImageUrl']): ?>
					<tr class="editTr">
						<td class="editLtTd">Thumbnails</td>
						<td class="editRtTd"><input name="imageUrl" type="file" size="30" /><em>Size: <?php if ($this->_tpl_vars['class']['other']['pic1width'] > 0 && $this->_tpl_vars['class']['other']['pic1height'] > 0): ?><?php echo $this->_tpl_vars['class']['other']['pic1width']; ?>
 x <?php echo $this->_tpl_vars['class']['other']['pic1height']; ?>
 px<?php else: ?>Unlimited<?php endif; ?></em></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasBigImageUrl']): ?>
					<tr class="editTr">
						<td class="editLtTd">Enlarge</td>
						<td class="editRtTd"><input name="bigImageUrl" type="file" size="30" /><em>Size: <?php if ($this->_tpl_vars['class']['other']['pic2width'] > 0 && $this->_tpl_vars['class']['other']['pic2height'] > 0): ?><?php echo $this->_tpl_vars['class']['other']['pic2width']; ?>
 x <?php echo $this->_tpl_vars['class']['other']['pic2height']; ?>
 px<?php else: ?>Unlimited<?php endif; ?></em></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasInfoPic']): ?>
					<tr class="editTr">
						<td class="editLtTd">Photos</td>
						<td class="editRtTd">
							<p><input type="file" name="pics[]" size="30" /></p>
							<input type="button" value="Add" onclick="addLine( this );" />
							<p>Images allows the following types: jpg, jpeg, gif, png.</p>
							<em>Size: <?php if ($this->_tpl_vars['class']['other']['infopic2width'] > 0 && $this->_tpl_vars['class']['other']['infopic2width'] > 0): ?><?php echo $this->_tpl_vars['class']['other']['infopic2width']; ?>
 x <?php echo $this->_tpl_vars['class']['other']['infopic2width']; ?>
 px<?php else: ?>Unlimited<?php endif; ?></em>
						</td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasFiles']): ?>
					<tr class="editTr">
						<td class="editLtTd">Attachment</td>
						<td class="editRtTd"><input name="files" type="file" size="30" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasIntro']): ?>
					<tr class="editTr">
						<td class="editLtTd">Introduction</td>
						<td class="editor"><textarea name="data[intro]" style="width:98%; height:100px;"></textarea></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasSourceHtml']): ?>
					<tr class="editTr">
						<td class="editLtTd">Source URL</td>
						<td class="editRtTd"><input name="data[sourceHtml]" type="text" size="60" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasContent']): ?>
					<tr class="editTr">
						<td class="editLtTd">Details</td>
						<td class="editor"><textarea id="content" name="data[content]"></textarea></td>
					</tr>
				<?php endif; ?>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=info/&class_id=<?php echo $this->_tpl_vars['class_id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
" class="lnkReturn">Return to list</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>