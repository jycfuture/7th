<?php /* Smarty version 2.6.26, created on 2012-08-14 10:08:36
         compiled from info/index/edit.htm */ ?>
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

function checkDelete() {
	if ( window.confirm( 'You sure you want to delete this attachment?' ) ) {
		return true;
	}
	else {
		return false;
	}
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
		<form action="?con=admin&ctl=info/&act=edit&class_id=<?php echo $this->_tpl_vars['data']['classId']; ?>
&id=<?php echo $this->_tpl_vars['data']['id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
			<table class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Information basic parameters</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Their information classification</td>
					<td class="editRtTd"><?php echo $this->_tpl_vars['positionStr']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Serial number the greater the more forward">Serial number</em></td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $this->_tpl_vars['data']['ordinal']; ?>
" type="text" size="10" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Title</td>
					<td class="editRtTd"><input name="data[title]" value="<?php echo $this->_tpl_vars['data']['title']; ?>
" type="text" size="60" class="text" /></td>
				</tr>
				<?php if ($this->_tpl_vars['class']['info']['hasTitleStyle']): ?>
				<tr class="editTr">
					<td class="editLtTd">Heading styles</td>
					<td class="editRtTd">
						<input name="color" value="<?php echo $this->_tpl_vars['data']['color']; ?>
" type="text" size="10" class="text" /> 
						<input id="chkTitleBold" name="chkTitleBold" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['chkTitleBold']): ?> checked<?php endif; ?> /><label for="chkTitleBold">Bold</label>
						<input id="chkTitleItalic" name="chkTitleItalic" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['chkTitleItalic']): ?> checked<?php endif; ?> /><label for="chkTitleItalic">Italic</label>
					</td>
				</tr>
				<?php endif; ?>
				<tr class="editTr">
					<td class="editLtTd">Information Status</td>
					<td class="editRtTd">
						<input id="isApproved" name="data[isApproved]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['isApproved']): ?> checked<?php endif; ?> /><label for="isApproved">Audit</label>
						<?php if ($this->_tpl_vars['class']['info']['hasTop']): ?><input id="isTop" name="data[isTop]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['isTop']): ?> checked<?php endif; ?> /><label for="isTop">Top</label><?php endif; ?>
						<?php if ($this->_tpl_vars['class']['info']['hasRecommended']): ?><input id="isRecommended" name="data[isRecommended]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['isRecommended']): ?> checked<?php endif; ?> /><label for="isRecommended">Recommend</label><?php endif; ?>
						<?php if ($this->_tpl_vars['class']['info']['hasHot']): ?><input id="isHot" name="data[isHot]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['isHot']): ?> checked<?php endif; ?> /><label for="isHot">Hot</label><?php endif; ?>
					</td>
				</tr>
				<?php if ($this->_tpl_vars['class']['info']['hasView']): ?>
					<tr class="editTr">
						<td class="editLtTd">Information Views</td>
						<td class="editRtTd"><input name="data[hits]" value="<?php echo $this->_tpl_vars['data']['hits']; ?>
" type="text" size="10" maxlength="10" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasAlias']): ?>
					<tr class="editTr">
						<td class="editLtTd">Subtitle</td>
						<td class="editRtTd"><input name="data[alias]" value="<?php echo $this->_tpl_vars['data']['alias']; ?>
" type="text" size="60" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasUrl']): ?>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="Click on the link to open the link, if the non-reference information, and do not need to fill this">Link address</em></td>
						<td class="editRtTd"><input name="data[url]" value="<?php echo $this->_tpl_vars['data']['url']; ?>
" type="text" size="60" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasPageTitle']): ?>
					<tr class="editTr">
						<td class="editLtTd">Title of the page</td>
						<td class="editRtTd"><input name="data[pageTitle]" value="<?php echo $this->_tpl_vars['data']['pageTitle']; ?>
" type="text" size="100" maxlength="100" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasKeywords']): ?>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="Detailed information page keyword optimization for search engines">Keywords</em></td>
						<td class="editRtTd"><input name="data[keywords]" value="<?php echo $this->_tpl_vars['data']['keywords']; ?>
" type="text" size="100" maxlength="150" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasDescription']): ?>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="Detailed information page descriptions for search engine optimization">Information Description</em></td>
						<td class="editRtTd"><input name="data[description]" value="<?php echo $this->_tpl_vars['data']['description']; ?>
" type="text" size="100" maxlength="250" class="text" /></td>
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
						<td class="editRtTd"><input name="data[publishedDate]" value="<?php echo $this->_tpl_vars['data']['publishedDate']; ?>
" type="text" size="15" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasSource']): ?>
					<tr class="editTr">
						<td class="editLtTd">Source</td>
						<td class="editRtTd"><input name="data[source]" value="<?php echo $this->_tpl_vars['data']['source']; ?>
" type="text" size="15" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasAuthor']): ?>
					<tr class="editTr">
						<td class="editLtTd">Author</td>
						<td class="editRtTd"><input name="data[author]" value="<?php echo $this->_tpl_vars['data']['author']; ?>
" type="text" size="15" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasImageUrl']): ?>
					<tr class="editTr">
						<td class="editLtTd">Thumbnails</td>
						<td class="editRtTd">
							<input name="imageUrl" type="file" size="30" />
							<?php if ($this->_tpl_vars['data']['imageUrl']): ?><a href="<?php echo $this->_tpl_vars['UPLOAD_PATH']; ?>
<?php echo $this->_tpl_vars['data']['imageUrl']; ?>
" target="_blank">[Have]</a><?php endif; ?>
							<em>Size: <?php if ($this->_tpl_vars['class']['other']['pic1width'] > 0 && $this->_tpl_vars['class']['other']['pic1height'] > 0): ?><?php echo $this->_tpl_vars['class']['other']['pic1width']; ?>
 x <?php echo $this->_tpl_vars['class']['other']['pic1height']; ?>
 px<?php else: ?>Unlimited<?php endif; ?></em>
						</td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasBigImageUrl']): ?>
					<tr class="editTr">
						<td class="editLtTd">Enlarge</td>
						<td class="editRtTd">
							<input name="bigImageUrl" type="file" size="30" />
							<?php if ($this->_tpl_vars['data']['bigImageUrl']): ?><a href="<?php echo $this->_tpl_vars['UPLOAD_PATH']; ?>
<?php echo $this->_tpl_vars['data']['bigImageUrl']; ?>
" target="_blank">[Have]</a><?php endif; ?>
							<em>Size: <?php if ($this->_tpl_vars['class']['other']['pic2width'] > 0 && $this->_tpl_vars['class']['other']['pic2height'] > 0): ?><?php echo $this->_tpl_vars['class']['other']['pic2width']; ?>
 x <?php echo $this->_tpl_vars['class']['other']['pic2height']; ?>
 px<?php else: ?>Unlimited<?php endif; ?></em>
						</td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasInfoPic']): ?>
					<tr class="editTr">
						<td class="editLtTd">Photos</td>
						<td class="editRtTd">
							<?php $_from = $this->_tpl_vars['pic_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
								<p style="padding:0 5px;"><a href="<?php echo $this->_tpl_vars['UPLOAD_PATH']; ?>
<?php echo $this->_tpl_vars['item']['pic']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['picname']; ?>
</a> &nbsp; <a href="<?php echo $this->_tpl_vars['deletepicurl']; ?>
id=<?php echo $this->_tpl_vars['item']['id']; ?>
&infoid=<?php echo $this->_tpl_vars['data']['id']; ?>
" onclick="return checkDelete();">X</a></p>
							<?php endforeach; endif; unset($_from); ?>
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
						<td class="editRtTd">
							<input name="files" type="file" size="30" />
							<?php if ($this->_tpl_vars['data']['files']): ?><a href="<?php echo $this->_tpl_vars['UPLOAD_PATH']; ?>
<?php echo $this->_tpl_vars['data']['files']; ?>
" target="_blank">[Have]</a><?php endif; ?>
						</td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasIntro']): ?>
					<tr class="editTr">
						<td class="editLtTd">Introduction</td>
						<td class="editor"><textarea name="data[intro]" style="width:98%; height:100px;"><?php echo $this->_tpl_vars['data']['intro']; ?>
</textarea></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasSourceHtml']): ?>
					<tr class="editTr">
						<td class="editLtTd">Source URL</td>
						<td class="editRtTd"><input name="data[sourceHtml]" value="<?php echo $this->_tpl_vars['data']['sourceHtml']; ?>
" type="text" size="60" class="text" /></td>
					</tr>
				<?php endif; ?>
				<?php if ($this->_tpl_vars['class']['info']['hasContent']): ?>
					<tr class="editTr">
						<td class="editLtTd">Details</td>
						<td class="editor"><textarea id="content" name="data[content]"><?php echo $this->_tpl_vars['data']['content']; ?>
</textarea></td>
					</tr>
				<?php endif; ?>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=info/&class_id=<?php echo $this->_tpl_vars['data']['classId']; ?>
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