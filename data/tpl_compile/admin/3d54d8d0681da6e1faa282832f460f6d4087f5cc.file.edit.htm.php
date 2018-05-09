<?php /* Smarty version Smarty-3.0.6, created on 2014-08-06 19:05:32
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\info/index/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:967853e20bfc288c71-43920262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d54d8d0681da6e1faa282832f460f6d4087f5cc' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\info/index/edit.htm',
      1 => 1407321573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '967853e20bfc288c71-43920262',
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
<script src="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
crop/crop.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
crop/crop.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
crop/Jcrop/jquery.Jcrop.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
crop/Jcrop/jquery.Jcrop.js"></script>
<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasPublishdate']){?>
<link href="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
calendar/ui.core.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
calendar/ui.datepicker.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
calendar/ui.theme.css" rel="stylesheet" />
<script src="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
calendar/ui.core.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
calendar/ui.datepicker.js"></script>
<?php }?>
<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasContent']){?>
<script src="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
/editor/ckeditor/ckeditor.js"></script>
<script>
$(function(){
	CKEDITOR.replace('content', {
		height : 350,
		filebrowserImageUploadUrl : '?con=admin&ctl=editor&act=pic'
	});
});
</script>
<?php }?>
<script type="text/javascript">
function check (form)
{
	var name = document.getElementsByName('data[title]')[0];
	if (name.value == '')
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->title;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->can_not_empty;?>
');
		name.focus();
		return false;
	}

	<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasContent']){?>
	var content	= CKEDITOR.instances.content.getData();
	$('#content').val(content);
	<?php }?>

	return true;
}
<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasPublishdate']){?>
$(function(){
	var obj = document.getElementsByName('data[publishedDate]')[0];
	$(obj).keydown(function(){
		return false;
	}).datepicker($.datepicker.regional["zh-cn"]);
});
<?php }?>

<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasInfoPic']){?>
function addLine( obj ) {
	var _str = '<p><input type="text" name="picsname[]" size="30" value="" placeholder="Image Title" /> <input type="file" name="pics[]" size="30" cropsize="<?php echo $_smarty_tpl->getVariable('class')->value['other']['infopic2width'];?>
,<?php echo $_smarty_tpl->getVariable('class')->value['other']['infopic2height'];?>
" /> &nbsp; <a href="#" onclick="return deleteLine( this );">X</a></p>';
	$(obj).before(_str);
	$(obj).prev('p').find('input[name="pics[]"]').crop();
}

function deleteLine( obj ) {
	$(obj).parent().remove();
	return false;
}

function checkDelete() {
	if ( window.confirm( '<?php echo $_smarty_tpl->getVariable('lang')->value->are_you_sure_you_want_delete_this_attachment;?>
' ) ) {
		return true;
	}
	else {
		return false;
	}
}
<?php }?>

$(function(){
	$('input[name="imageUrl"]').crop();
	$('input[name="bigImageUrl"]').crop();
	$('input[name="pics[]"]').crop();
});
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="<?php echo $_smarty_tpl->getVariable('returnUrl')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
		</div>
		<form action="?con=admin&ctl=info/&act=edit&class_id=<?php echo $_smarty_tpl->getVariable('data')->value['classId'];?>
&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
			<table class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->basic_parameters;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->category_name;?>
</td>
					<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('positionStr')->value;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->bigger_front;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->ordinal;?>
</em></td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $_smarty_tpl->getVariable('data')->value['ordinal'];?>
" type="text" size="10" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->title;?>
</td>
					<td class="editRtTd"><input name="data[title]" value="<?php echo $_smarty_tpl->getVariable('data')->value['title'];?>
" type="text" size="60" class="text" /></td>
				</tr>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasTitleStyle']){?>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->style;?>
</td>
					<td class="editRtTd">
						<input name="color" value="<?php echo $_smarty_tpl->getVariable('data')->value['color'];?>
" type="text" size="10" class="text" /> 
						<input id="chkTitleBold" name="chkTitleBold" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['chkTitleBold']){?> checked<?php }?> /><label for="chkTitleBold"><?php echo $_smarty_tpl->getVariable('lang')->value->bold;?>
</label>
						<input id="chkTitleItalic" name="chkTitleItalic" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['chkTitleItalic']){?> checked<?php }?> /><label for="chkTitleItalic"><?php echo $_smarty_tpl->getVariable('lang')->value->italic;?>
</label>
					</td>
				</tr>
				<?php }?>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->status;?>
</td>
					<td class="editRtTd">
						<input id="isApproved" name="data[isApproved]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['isApproved']){?> checked<?php }?> /><label for="isApproved"><?php echo $_smarty_tpl->getVariable('lang')->value->audit;?>
</label>
						<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasTop']){?><input id="isTop" name="data[isTop]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['isTop']){?> checked<?php }?> /><label for="isTop"><?php echo $_smarty_tpl->getVariable('lang')->value->status_top;?>
</label><?php }?>
						<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasRecommended']){?><input id="isRecommended" name="data[isRecommended]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['isRecommended']){?> checked<?php }?> /><label for="isRecommended"><?php echo $_smarty_tpl->getVariable('lang')->value->status_recommend;?>
</label><?php }?>
						<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasHot']){?><input id="isHot" name="data[isHot]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['isHot']){?> checked<?php }?> /><label for="isHot"><?php echo $_smarty_tpl->getVariable('lang')->value->status_hot;?>
</label><?php }?>
					</td>
				</tr>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasView']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->hits;?>
</td>
						<td class="editRtTd"><input name="data[hits]" value="<?php echo $_smarty_tpl->getVariable('data')->value['hits'];?>
" type="text" size="10" maxlength="10" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasAlias']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->alias;?>
</td>
						<td class="editRtTd"><input name="data[alias]" value="<?php echo $_smarty_tpl->getVariable('data')->value['alias'];?>
" type="text" size="60" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasUrl']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->link_address;?>
</td>
						<td class="editRtTd"><input name="data[url]" value="<?php echo $_smarty_tpl->getVariable('data')->value['url'];?>
" type="text" size="60" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasPageTitle']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_title;?>
</td>
						<td class="editRtTd"><input name="data[pageTitle]" value="<?php echo $_smarty_tpl->getVariable('data')->value['pageTitle'];?>
" type="text" size="100" maxlength="100" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasKeywords']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_keywords;?>
</td>
						<td class="editRtTd"><input name="data[keywords]" value="<?php echo $_smarty_tpl->getVariable('data')->value['keywords'];?>
" type="text" size="100" maxlength="150" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasDescription']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_description;?>
</td>
						<td class="editRtTd"><input name="data[description]" value="<?php echo $_smarty_tpl->getVariable('data')->value['description'];?>
" type="text" size="100" maxlength="250" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasTags']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->tags;?>
</td>
						<td class="editRtTd"><input name="data[tags]" value="<?php echo $_smarty_tpl->getVariable('data')->value['tags'];?>
" type="text" size="60" class="text" /> <?php echo $_smarty_tpl->getVariable('lang')->value->tags_tips;?>
</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasPublishdate']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->publish_date;?>
</td>
						<td class="editRtTd"><input name="data[publishedDate]" value="<?php echo $_smarty_tpl->getVariable('data')->value['publishedDate'];?>
" type="text" size="15" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasSource']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->source;?>
</td>
						<td class="editRtTd"><input name="data[source]" value="<?php echo $_smarty_tpl->getVariable('data')->value['source'];?>
" type="text" size="15" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasAuthor']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->author;?>
</td>
						<td class="editRtTd"><input name="data[author]" value="<?php echo $_smarty_tpl->getVariable('data')->value['author'];?>
" type="text" size="15" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasImageUrl']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->thumbnail;?>
</td>
						<td class="editRtTd">
							<input name="imageUrl" type="file" size="30" cropsize="<?php echo $_smarty_tpl->getVariable('class')->value['other']['pic1width'];?>
,<?php echo $_smarty_tpl->getVariable('class')->value['other']['pic1height'];?>
" />
							<?php if ($_smarty_tpl->getVariable('data')->value['imageUrl']){?><a href="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->getVariable('data')->value['imageUrl'];?>
" target="_blank">[<?php echo $_smarty_tpl->getVariable('lang')->value->have;?>
]</a><?php }?>
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasBigImageUrl']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->enlarge;?>
</td>
						<td class="editRtTd">
							<input name="bigImageUrl" type="file" size="30" cropsize="<?php echo $_smarty_tpl->getVariable('class')->value['other']['pic2width'];?>
,<?php echo $_smarty_tpl->getVariable('class')->value['other']['pic2height'];?>
" />
							<?php if ($_smarty_tpl->getVariable('data')->value['bigImageUrl']){?><a href="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->getVariable('data')->value['bigImageUrl'];?>
" target="_blank">[<?php echo $_smarty_tpl->getVariable('lang')->value->have;?>
]</a><?php }?>
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasInfoPic']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->album;?>
</td>
						<td class="editRtTd">
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pic_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<p style="padding:0 5px;"><a href="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['picname'];?>
</a> &nbsp; <a href="<?php echo $_smarty_tpl->getVariable('deletepicurl')->value;?>
id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&infoid=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" onclick="return checkDelete();">X</a></p>
							<?php }} ?>
							<p><input type="text" name="picsname[]" size="30" value="" placeholder="Image Title" /> <input type="file" name="pics[]" size="30" cropsize="<?php echo $_smarty_tpl->getVariable('class')->value['other']['infopic2width'];?>
,<?php echo $_smarty_tpl->getVariable('class')->value['other']['infopic2height'];?>
" /></p>
							<input type="button" value="Add" onclick="addLine( this );" />
							<p><?php echo $_smarty_tpl->getVariable('lang')->value->image_allow_follow_types;?>
</p>
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasFiles']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->attachment;?>
</td>
						<td class="editRtTd">
							<input name="files" type="file" size="30" />
							<?php if ($_smarty_tpl->getVariable('data')->value['files']){?><a href="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->getVariable('data')->value['files'];?>
" target="_blank">[<?php echo $_smarty_tpl->getVariable('lang')->value->have;?>
]</a><?php }?>
							<p>Allow the following types: <?php if ($_smarty_tpl->getVariable('class')->value['other']['exts']){?><?php echo $_smarty_tpl->getVariable('class')->value['other']['exts'];?>
<?php }else{ ?>jpg,jpeg,png,gif,rar,doc,docx,xls,xlsx,pdf,zip<?php }?></p>
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasIntro']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->intro;?>
</td>
						<td class="editor"><textarea name="data[intro]" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['intro'];?>
</textarea></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasSourceHtml']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->source_url;?>
</td>
						<td class="editRtTd"><input name="data[sourceHtml]" value="<?php echo $_smarty_tpl->getVariable('data')->value['sourceHtml'];?>
" type="text" size="60" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasContent']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->detail;?>
</td>
						<td class="editor"><textarea id="content" name="data[content]"><?php echo $_smarty_tpl->getVariable('data')->value['content'];?>
</textarea></td>
					</tr>
				<?php }?>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=info/&class_id=<?php echo $_smarty_tpl->getVariable('data')->value['classId'];?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>