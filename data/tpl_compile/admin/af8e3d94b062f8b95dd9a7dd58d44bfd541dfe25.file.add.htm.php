<?php /* Smarty version Smarty-3.0.6, created on 2014-08-06 19:01:54
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\info/index/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:820253e20b221e8231-24405426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af8e3d94b062f8b95dd9a7dd58d44bfd541dfe25' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\info/index/add.htm',
      1 => 1407321349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '820253e20b221e8231-24405426',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_strpad')) include 'D:\project\php\CoreCMSV1.0_en\core\smarty\plugins\function.strpad.php';
?><!DOCTYPE HTML>
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

	var name = document.getElementsByName('data[class_id]')[0];
	if (name.value == '')
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->please_select_category;?>
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
		<form action="?con=admin&ctl=info/&act=add&class_id=<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
			<table class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->basic_parameters;?>
</td>
				</tr>
				<?php if ($_smarty_tpl->getVariable('noback')->value){?>
				<input type="hidden" name="data[class_id]" value="<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
" />
				<?php }else{ ?>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->this_form_will_change_by_select_category_so_please_select_category_first;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->select_category;?>
</em></td>
					<td class="editRtTd">
						<select name="data[class_id]" onchange="window.location.href = '?con=admin&ctl=info/&act=add&class_id=' + this.value">
							<option value="">--<?php echo $_smarty_tpl->getVariable('lang')->value->please_select_category;?>
--</option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('infoclasslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->getVariable('class_id')->value){?> selected<?php }?>><?php echo smarty_function_strpad(array('str'=>'','len'=>$_smarty_tpl->tpl_vars['item']->value['level'],'pad'=>'-'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
							<?php }} ?>
						</select>
					</td>
				</tr>
				<?php }?>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->bigger_front;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->ordinal;?>
</em></td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $_smarty_tpl->getVariable('ordinal')->value;?>
" type="text" size="10" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->title;?>
</td>
					<td class="editRtTd"><input name="data[title]" value="" type="text" size="60" class="text" /></td>
				</tr>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasTitleStyle']){?>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->style;?>
</td>
					<td class="editRtTd">
						<input name="color" value="" type="text" size="10" class="text" /> 
						<input id="chkTitleBold" name="chkTitleBold" value="1" type="checkbox" /><label for="chkTitleBold"><?php echo $_smarty_tpl->getVariable('lang')->value->bold;?>
</label>
						<input id="chkTitleItalic" name="chkTitleItalic" value="1" type="checkbox" /><label for="chkTitleItalic"><?php echo $_smarty_tpl->getVariable('lang')->value->italic;?>
</label>
					</td>
				</tr>
				<?php }?>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->status;?>
</td>
					<td class="editRtTd">
						<input id="isApproved" name="data[isApproved]" value="1" type="checkbox" checked /><label for="isApproved"><?php echo $_smarty_tpl->getVariable('lang')->value->audit;?>
</label>
						<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasTop']){?><input id="isTop" name="data[isTop]" value="1" type="checkbox" /><label for="isTop"><?php echo $_smarty_tpl->getVariable('lang')->value->status_top;?>
</label><?php }?>
						<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasRecommended']){?><input id="isRecommended" name="data[isRecommended]" value="1" type="checkbox" /><label for="isRecommended"><?php echo $_smarty_tpl->getVariable('lang')->value->status_recommend;?>
</label><?php }?>
						<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasHot']){?><input id="isHot" name="data[isHot]" value="1" type="checkbox" /><label for="isHot"><?php echo $_smarty_tpl->getVariable('lang')->value->status_hot;?>
</label><?php }?>
					</td>
				</tr>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasView']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->hits;?>
</td>
						<td class="editRtTd"><input name="data[hits]" value="" type="text" size="10" maxlength="10" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasAlias']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->alias;?>
</td>
						<td class="editRtTd"><input name="data[alias]" value="" type="text" size="60" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasUrl']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->link_address;?>
</td>
						<td class="editRtTd"><input name="data[url]" value="" type="text" size="60" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasPageTitle']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_title;?>
</td>
						<td class="editRtTd"><input name="data[pageTitle]" value="" type="text" size="100" maxlength="100" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasKeywords']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_keywords;?>
</td>
						<td class="editRtTd"><input name="data[keywords]" value="" type="text" size="100" maxlength="150" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasDescription']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_description;?>
</td>
						<td class="editRtTd"><input name="data[description]" value="" type="text" size="100" maxlength="250" class="text" /></td>
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
						<td class="editRtTd"><input name="data[publishedDate]" value="" type="text" size="15" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasSource']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->source;?>
</td>
						<td class="editRtTd"><input name="data[source]" value="" type="text" size="15" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasAuthor']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->author;?>
</td>
						<td class="editRtTd"><input name="data[author]" value="" type="text" size="15" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasImageUrl']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->thumbnail;?>
</td>
						<td class="editRtTd"><input name="imageUrl" type="file" size="30" cropsize="<?php echo $_smarty_tpl->getVariable('class')->value['other']['pic1width'];?>
,<?php echo $_smarty_tpl->getVariable('class')->value['other']['pic1height'];?>
" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasBigImageUrl']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->enlarge;?>
</td>
						<td class="editRtTd"><input name="bigImageUrl" type="file" size="30" cropsize="<?php echo $_smarty_tpl->getVariable('class')->value['other']['pic2width'];?>
,<?php echo $_smarty_tpl->getVariable('class')->value['other']['pic2height'];?>
" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasInfoPic']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->album;?>
</td>
						<td class="editRtTd">
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
							<p>Allow the following types: <?php if ($_smarty_tpl->getVariable('class')->value['other']['exts']){?><?php echo $_smarty_tpl->getVariable('class')->value['other']['exts'];?>
<?php }else{ ?>jpg,jpeg,png,gif,rar,doc,docx,xls,xlsx,pdf,zip<?php }?></p>
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasIntro']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->intro;?>
</td>
						<td class="editor"><textarea name="data[intro]" style="width:98%; height:100px;"></textarea></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasSourceHtml']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->source_url;?>
</td>
						<td class="editRtTd"><input name="data[sourceHtml]" type="text" size="60" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('class')->value['info']['hasContent']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->detail;?>
</td>
						<td class="editor"><textarea id="content" name="data[content]"></textarea></td>
					</tr>
				<?php }?>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=info/&class_id=<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
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