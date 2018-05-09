<?php /* Smarty version Smarty-3.0.6, created on 2017-10-16 07:52:01
         compiled from "D:/www/kxmh/core/common/skin/admin\info/class/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:1374759e46521744fb3-95820061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6c5b226141cbd7bc1d8c43cf26d84494248adb2' => 
    array (
      0 => 'D:/www/kxmh/core/common/skin/admin\\info/class/edit.htm',
      1 => 1413798176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1374759e46521744fb3-95820061',
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
<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasIntro']||$_smarty_tpl->getVariable('data')->value['extend']['hasContent']){?>
<script src="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
/editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
$(function(){
	<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasIntro']){?>
	CKEDITOR.replace('intro', {
		height : 200,
		filebrowserImageUploadUrl : '?con=admin&ctl=editor&act=pic'
	});
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasContent']){?>
	CKEDITOR.replace('content', {
		height : 350,
		filebrowserImageUploadUrl : '?con=admin&ctl=editor&act=pic'
	});
	<?php }?>
});
</script>
<?php }?>
<script type="text/javascript">
function check (form)
{
	var name = document.getElementsByName('data[name]')[0];
	if (name.value == '')
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->category_name;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->can_not_empty;?>
');
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
			<?php if ($_smarty_tpl->getVariable('noback')->value){?><?php }else{ ?><a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> <?php }?>
		</div>
		<?php if ($_smarty_tpl->getVariable('columnChk')->value['class_setting']){?>
		<table class="tabTable" id="tableTab">
			<tr>
				<td><a class="current" href="#"><?php echo $_smarty_tpl->getVariable('lang')->value->basic_parameters;?>
</a></a></td>
				<td><a href="?con=admin&ctl=info/class&act=setting&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->advanced_parameters_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->advanced_parameters;?>
</em></a></td>
			</tr>
		</table>
		<?php }?>
		<form action="?con=admin&ctl=info/class&act=edit&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
			<table class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->basic_parameters;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->category_map_path;?>
</td>
					<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('parentStr')->value;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->smaller_front;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->ordinal;?>
</em></td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $_smarty_tpl->getVariable('data')->value['ordinal'];?>
" type="text" size="20" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->category_name;?>
</td>
					<td class="editRtTd"><input name="data[name]" value="<?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
" type="text" size="60" class="text" /></td>
				</tr>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasAlias']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->alias;?>
</td>
						<td class="editRtTd"><input name="data[alias]" value="<?php echo $_smarty_tpl->getVariable('data')->value['alias'];?>
" type="text" size="60" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasTemplate']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->template;?>
</td>
						<td class="editRtTd"><input name="data[template]" value="<?php echo $_smarty_tpl->getVariable('data')->value['template'];?>
" type="text" size="30" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasDomain']){?>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->category_directory_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->category_directory;?>
</em></td>
						<td class="editRtTd"><input id="data[domain]" name="data[domain]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['domain']){?> checked<?php }?> /><label for="data[domain]"><?php echo $_smarty_tpl->getVariable('lang')->value->yes;?>
</label></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasclassStyle']){?>
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
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasDisplayMode']){?>
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
								<?php if ($_smarty_tpl->tpl_vars['item']->value[2]){?>
									<input id="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" name="data[defaultDisplayMode]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
" type="radio"<?php if ($_smarty_tpl->tpl_vars['item']->value[0]==$_smarty_tpl->getVariable('data')->value['defaultDisplayMode']){?> checked<?php }?> /><label for="<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</label>
								<?php }?>
							<?php }} ?>
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasUrl']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->link_address;?>
</td>
						<td class="editRtTd"><input name="data[url]" value="<?php echo $_smarty_tpl->getVariable('data')->value['url'];?>
" type="text" size="60" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasImageUrl']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->thumbnail;?>
</td>
						<td class="editRtTd">
							<input name="imageUrl" type="file" size="30" />
							<?php if ($_smarty_tpl->getVariable('data')->value['imageUrl']){?><a href="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->getVariable('data')->value['imageUrl'];?>
" target="_blank">[<?php echo $_smarty_tpl->getVariable('lang')->value->have;?>
]</a><?php }?>
							<em><?php echo $_smarty_tpl->getVariable('lang')->value->size;?>
: <?php if ($_smarty_tpl->getVariable('data')->value['other']['cpic1width']>0){?><?php echo $_smarty_tpl->getVariable('data')->value['other']['cpic1width'];?>
<?php }else{ ?>?<?php }?> x <?php if ($_smarty_tpl->getVariable('data')->value['other']['cpic1height']>0){?><?php echo $_smarty_tpl->getVariable('data')->value['other']['cpic1height'];?>
<?php }else{ ?>?<?php }?> px</em>
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasBigImageUrl']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->enlarge;?>
</td>
						<td class="editRtTd">
							<input name="bigImageUrl" type="file" size="30" />
							<?php if ($_smarty_tpl->getVariable('data')->value['bigImageUrl']){?><a href="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->getVariable('data')->value['bigImageUrl'];?>
" target="_blank">[<?php echo $_smarty_tpl->getVariable('lang')->value->have;?>
]</a><?php }?>
							<em><?php echo $_smarty_tpl->getVariable('lang')->value->size;?>
: <?php if ($_smarty_tpl->getVariable('data')->value['other']['cpic2width']>0){?><?php echo $_smarty_tpl->getVariable('data')->value['other']['cpic2width'];?>
<?php }else{ ?>?<?php }?> x <?php if ($_smarty_tpl->getVariable('data')->value['other']['cpic2height']>0){?><?php echo $_smarty_tpl->getVariable('data')->value['other']['cpic2height'];?>
<?php }else{ ?>?<?php }?> px</em>
						</td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasPageTitle']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_title;?>
</td>
						<td class="editRtTd"><input name="data[pageTitle]" value="<?php echo $_smarty_tpl->getVariable('data')->value['pageTitle'];?>
" type="text" size="100" maxlength="100" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasKeywords']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_keywords;?>
</td>
						<td class="editRtTd"><input name="data[keywords]" value="<?php echo $_smarty_tpl->getVariable('data')->value['keywords'];?>
" type="text" size="100" maxlength="150" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasDescription']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_description;?>
</td>
						<td class="editRtTd"><input name="data[description]" value="<?php echo $_smarty_tpl->getVariable('data')->value['description'];?>
" type="text" size="100" maxlength="250" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasIntro']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->intro;?>
</td>
						<td class="editor"><textarea id="intro" name="data[intro]" style="width:98%; height:120px;" class="text"><?php echo $_smarty_tpl->getVariable('data')->value['intro'];?>
</textarea></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasContent']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->detail;?>
</td>
						<td class="editor"><textarea id="content" name="data[content]" style="width:98%; height:120px;" class="text"><?php echo $_smarty_tpl->getVariable('data')->value['content'];?>
</textarea></td>
					</tr>
				<?php }?>
			</table>
			<div class="editBtn clearfix">
				<input type="submit" value="Save" class="lnkSave" /> 
				<?php if ($_smarty_tpl->getVariable('noback')->value){?><?php }else{ ?><a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> <?php }?>
			</div>
		</form>
	</div>
</div>
</body>
</html>