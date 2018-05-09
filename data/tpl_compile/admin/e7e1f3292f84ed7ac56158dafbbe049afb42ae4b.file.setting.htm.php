<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 03:21:25
         compiled from "D:/www/ark/core/common/skin/admin\info/class/setting.htm" */ ?>
<?php /*%%SmartyHeaderCode:231845add5135bc93f2-53296295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7e1f3292f84ed7ac56158dafbbe049afb42ae4b' => 
    array (
      0 => 'D:/www/ark/core/common/skin/admin\\info/class/setting.htm',
      1 => 1446130720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231845add5135bc93f2-53296295',
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
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
		</div>
		<table class="tabTable" id="tableTab">
			<tr>
				<td><a href="?con=admin&ctl=info/class&act=edit&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->basic_parameters;?>
</a></td>
				<td><a class="current" href="#"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->advanced_parameters_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->advanced_parameters;?>
</em></a></td>
			</tr>
		</table>
		<form action="?con=admin&ctl=info/class&act=setting&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" method="post">
			<table class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->advanced_parameters;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->per_page_count_of_list;?>
</td>
					<td class="editRtTd">
						<input type="text" name="data[perPageCount]" size="10" maxlength="3" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['perPageCount'];?>
" />
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->category_thumbnail_size;?>
</td>
					<td class="editRtTd">
						<input type="text" name="other[cpic1width]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['cpic1width'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->width;?>
 
						<input type="text" name="other[cpic1height]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['cpic1height'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->height;?>

					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->category_enlarge_size;?>
</td>
					<td class="editRtTd">
						<input type="text" name="other[cpic2width]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['cpic2width'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->width;?>
 
						<input type="text" name="other[cpic2height]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['cpic2height'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->height;?>

					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->article_thumbnail_size;?>
</td>
					<td class="editRtTd">
						<input type="text" name="other[pic1width]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['pic1width'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->width;?>
 
						<input type="text" name="other[pic1height]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['pic1height'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->height;?>

					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->article_enlarge_size;?>
</td>
					<td class="editRtTd">
						<input type="text" name="other[pic2width]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['pic2width'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->width;?>
 
						<input type="text" name="other[pic2height]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['pic2height'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->height;?>

					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->article_pics_thumbnail_size;?>
</td>
					<td class="editRtTd">
						<input type="text" name="other[infopic1width]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['infopic1width'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->width;?>
 
						<input type="text" name="other[infopic1height]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['infopic1height'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->height;?>

					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->article_pics_enlarge_size;?>
</td>
					<td class="editRtTd">
						<input type="text" name="other[infopic2width]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['infopic2width'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->width;?>
 
						<input type="text" name="other[infopic2height]" size="10" maxlength="4" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['infopic2height'];?>
" /> <?php echo $_smarty_tpl->getVariable('lang')->value->height;?>

					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->attachment_allow_types;?>
</td>
					<td class="editRtTd">
						<input type="text" name="other[exts]" size="60" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['other']['exts'];?>
" />
						<?php echo $_smarty_tpl->getVariable('lang')->value->attachment_allow_types_tips;?>

					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->display_mode;?>
</td>
					<td class="editRtTd">
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['displayModes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<input id="displayModes<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" name="displayModes[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['item']->value[2]){?> checked<?php }?> /><label for="displayModes<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</label>
						<?php }} ?>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Control the basic parameters of the information classification can be configured item"><?php echo $_smarty_tpl->getVariable('lang')->value->category_setting;?>
</em></td>
					<td class="editRtTd">
						<input id="classhasDisplayMode" name="class[hasDisplayMode]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasDisplayMode']){?> checked<?php }?> /><label for="classhasDisplayMode"><?php echo $_smarty_tpl->getVariable('lang')->value->display_mode;?>
</label>
						<input id="classhasNameEn" name="class[hasNameEn]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasNameEn']){?> checked<?php }?> /><label for="classhasNameEn"><?php echo $_smarty_tpl->getVariable('lang')->value->category_name_en;?>
</label>
						<input id="classhasAlias" name="class[hasAlias]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasAlias']){?> checked<?php }?> /><label for="classhasAlias"><?php echo $_smarty_tpl->getVariable('lang')->value->alias;?>
</label>
						<input id="classhasDomain" name="class[hasDomain]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasDomain']){?> checked<?php }?> /><label for="classhasDomain"><?php echo $_smarty_tpl->getVariable('lang')->value->category_directory;?>
</label>
						<input id="classStyle" name="class[hasclassStyle]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasclassStyle']){?> checked<?php }?> /><label for="classStyle"><?php echo $_smarty_tpl->getVariable('lang')->value->style;?>
</label>
						<input id="classhasUrl" name="class[hasUrl]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasUrl']){?> checked<?php }?> /><label for="classhasUrl"><?php echo $_smarty_tpl->getVariable('lang')->value->link_address;?>
</label>
						<input id="classhasPageTitle" name="class[hasPageTitle]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasPageTitle']){?> checked<?php }?> /><label for="classhasPageTitle"><?php echo $_smarty_tpl->getVariable('lang')->value->page_title;?>
</label>
						<input id="classhasKeywords" name="class[hasKeywords]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasKeywords']){?> checked<?php }?> /><label for="classhasKeywords"><?php echo $_smarty_tpl->getVariable('lang')->value->page_keywords;?>
</label>
						<input id="classhasDescription" name="class[hasDescription]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasDescription']){?> checked<?php }?> /><label for="classhasDescription"><?php echo $_smarty_tpl->getVariable('lang')->value->page_description;?>
</label>
						<input id="classhasImageUrl" name="class[hasImageUrl]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasImageUrl']){?> checked<?php }?> /><label for="classhasImageUrl"><?php echo $_smarty_tpl->getVariable('lang')->value->thumbnail;?>
</label>
						<input id="classhasBigImageUrl" name="class[hasBigImageUrl]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasBigImageUrl']){?> checked<?php }?> /><label for="classhasBigImageUrl"><?php echo $_smarty_tpl->getVariable('lang')->value->enlarge;?>
</label>
						<input id="classhasFiles" name="class[hasFiles]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasFiles']){?> checked<?php }?> /><label for="classhasFiles"><?php echo $_smarty_tpl->getVariable('lang')->value->attachment;?>
</label>
						<br />
						<input id="classhasIntro" name="class[hasIntro]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasIntro']){?> checked<?php }?> /><label for="classhasIntro"><?php echo $_smarty_tpl->getVariable('lang')->value->intro;?>
</label>
						<input id="classhasContent" name="class[hasContent]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasContent']){?> checked<?php }?> /><label for="classhasContent"><?php echo $_smarty_tpl->getVariable('lang')->value->detail;?>
</label>
						<input id="classhasTemplate" name="class[hasTemplate]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasTemplate']){?> checked<?php }?> /><label for="classhasTemplate"><?php echo $_smarty_tpl->getVariable('lang')->value->template;?>
</label>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Control of all information in the classification of configuration items"><?php echo $_smarty_tpl->getVariable('lang')->value->article_setting;?>
</em></td>
					<td class="editor">
						<input id="hasTop" name="info[hasTop]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasTop']){?> checked<?php }?> /><label for="hasTop"><?php echo $_smarty_tpl->getVariable('lang')->value->status_top;?>
</label>
						<input id="hasRecommended" name="info[hasRecommended]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasRecommended']){?> checked<?php }?> /><label for="hasRecommended"><?php echo $_smarty_tpl->getVariable('lang')->value->status_recommend;?>
</label>
						<input id="hasHot" name="info[hasHot]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasHot']){?> checked<?php }?> /><label for="hasHot"><?php echo $_smarty_tpl->getVariable('lang')->value->status_hot;?>
</label>
						<input id="hasView" name="info[hasView]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasView']){?> checked<?php }?> /><label for="hasView"><?php echo $_smarty_tpl->getVariable('lang')->value->hits;?>
</label>
						<input id="hasSubTitle" name="info[hasSubTitle]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasSubTitle']){?> checked<?php }?> /><label for="hasSubTitle"><?php echo $_smarty_tpl->getVariable('lang')->value->sub_title;?>
</label>
						<input id="hasPageTitle" name="info[hasPageTitle]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasPageTitle']){?> checked<?php }?> /><label for="hasPageTitle"><?php echo $_smarty_tpl->getVariable('lang')->value->page_title;?>
</label>
						<input id="hasKeywords" name="info[hasKeywords]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasKeywords']){?> checked<?php }?> /><label for="hasKeywords"><?php echo $_smarty_tpl->getVariable('lang')->value->page_keywords;?>
</label>
						<input id="hasDescription" name="info[hasDescription]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasDescription']){?> checked<?php }?> /><label for="hasDescription"><?php echo $_smarty_tpl->getVariable('lang')->value->page_description;?>
</label>
						<input id="hasPublishdate" name="info[hasPublishdate]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasPublishdate']){?> checked<?php }?> /><label for="hasPublishdate"><?php echo $_smarty_tpl->getVariable('lang')->value->publish_date;?>
</label>
						<input id="hasSource" name="info[hasSource]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasSource']){?> checked<?php }?> /><label for="hasSource"><?php echo $_smarty_tpl->getVariable('lang')->value->source;?>
</label>
						<br />
						<input id="hasAuthor" name="info[hasAuthor]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasAuthor']){?> checked<?php }?> /><label for="hasAuthor"><?php echo $_smarty_tpl->getVariable('lang')->value->author;?>
</label>
						<input id="hasUrl" name="info[hasUrl]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasUrl']){?> checked<?php }?> /><label for="hasUrl"><?php echo $_smarty_tpl->getVariable('lang')->value->link_address;?>
</label>
						<input id="hasTitleStyle" name="info[hasTitleStyle]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasTitleStyle']){?> checked<?php }?> /><label for="hasTitleStyle"><?php echo $_smarty_tpl->getVariable('lang')->value->style;?>
</label>
						<input id="hasAlias" name="info[hasAlias]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasAlias']){?> checked<?php }?> /><label for="hasAlias"><?php echo $_smarty_tpl->getVariable('lang')->value->alias;?>
</label>
						<input id="hasImageUrl" name="info[hasImageUrl]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasImageUrl']){?> checked<?php }?> /><label for="hasImageUrl"><?php echo $_smarty_tpl->getVariable('lang')->value->thumbnail;?>
</label>
						<input id="hasBigImageUrl" name="info[hasBigImageUrl]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasBigImageUrl']){?> checked<?php }?> /><label for="hasBigImageUrl"><?php echo $_smarty_tpl->getVariable('lang')->value->enlarge;?>
</label>
						<input id="hasInfoPic" name="info[hasInfoPic]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasInfoPic']){?> checked<?php }?> /><label for="hasInfoPic"><?php echo $_smarty_tpl->getVariable('lang')->value->album;?>
</label>
						<input id="hasFiles" name="info[hasFiles]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasFiles']){?> checked<?php }?> /><label for="hasFiles"><?php echo $_smarty_tpl->getVariable('lang')->value->attachment;?>
</label>
						<br />
						<input id="hasIntro" name="info[hasIntro]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasIntro']){?> checked<?php }?> /><label for="hasIntro"><?php echo $_smarty_tpl->getVariable('lang')->value->intro;?>
</label>
						<input id="hasSourceHtml" name="info[hasSourceHtml]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasSourceHtml']){?> checked<?php }?> /><label for="hasSourceHtml"><?php echo $_smarty_tpl->getVariable('lang')->value->source_url;?>
</label>
						<input id="hasContent" name="info[hasContent]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasContent']){?> checked<?php }?> /><label for="hasContent"><?php echo $_smarty_tpl->getVariable('lang')->value->detail;?>
</label>
						<input id="hasTags" name="info[hasTags]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['info']['hasTags']){?> checked<?php }?> /><label for="hasTags"><?php echo $_smarty_tpl->getVariable('lang')->value->tags;?>
</label>
					</td>
				</tr>
			</table>
			<div class="editBtn clearfix">
				<input type="submit" value="Save" class="lnkSave" /> 
				<a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
			</div>
		</form>
	</div>
</div>
</body>
</html>