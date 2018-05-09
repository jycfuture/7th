<?php /* Smarty version Smarty-3.0.6, created on 2014-07-11 17:53:54
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\info/class/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:1993953bfb432d3bfb6-06903008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a2431fbb1db3a8e615a13cead51eb29da34c3b3' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\info/class/add.htm',
      1 => 1387264432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1993953bfb432d3bfb6-06903008',
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
		<form action="?con=admin&ctl=info/class&act=add&parent_id=<?php echo $_smarty_tpl->getVariable('parent_id')->value;?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" method="post" enctype="multipart/form-data" onsubmit="return check(this);">
			<table class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->basic_parameters;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->smaller_front;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->ordinal;?>
</em></td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $_smarty_tpl->getVariable('ordinal')->value;?>
" type="text" size="20" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->bulk_add_category_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->category_name;?>
</em></td>
					<td class="editor">
						<textarea name="data[name]" style="width:98%; height:120px;" class="text"></textarea>
					</td>
				</tr>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasAlias']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->alias;?>
</td>
						<td class="editRtTd"><input name="data[alias]" value="" type="text" size="60" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasTemplate']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->template;?>
</td>
						<td class="editRtTd"><input name="data[template]" value="" type="text" size="30" class="text" /></td>
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
						<td class="editRtTd"><input name="data[url]" value="" type="text" size="60" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasImageUrl']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->thumbnail;?>
</td>
						<td class="editRtTd">
							<input name="imageUrl" type="file" size="30" /><em><?php echo $_smarty_tpl->getVariable('lang')->value->size;?>
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
							<input name="bigImageUrl" type="file" size="30" /><em><?php echo $_smarty_tpl->getVariable('lang')->value->size;?>
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
						<td class="editRtTd"><input name="data[pageTitle]" value="" type="text" size="100" maxlength="100" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasKeywords']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_keywords;?>
</td>
						<td class="editRtTd"><input name="data[keywords]" value="" type="text" size="100" maxlength="150" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasDescription']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->page_description;?>
</td>
						<td class="editRtTd"><input name="data[description]" value="" type="text" size="100" maxlength="250" class="text" /></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasIntro']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->intro;?>
</td>
						<td class="editor"><textarea id="intro" name="data[intro]" style="width:98%; height:120px;" class="text"></textarea></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->getVariable('data')->value['extend']['hasContent']){?>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->detail;?>
</td>
						<td class="editor"><textarea id="content" name="data[content]" style="width:98%; height:120px;" class="text"></textarea></td>
					</tr>
				<?php }?>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<?php if ($_smarty_tpl->getVariable('noback')->value){?><?php }else{ ?><a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> <?php }?>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>