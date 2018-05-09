<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 03:20:06
         compiled from "D:/www/ark/core/common/skin/admin\info/class/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:208475add50e654f801-17753182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c584e73aa5947f78f0d03df9b53eb3bfce7d2668' => 
    array (
      0 => 'D:/www/ark/core/common/skin/admin\\info/class/index.htm',
      1 => 1428168898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208475add50e654f801-17753182',
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
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
js/list.js"></script>
<script type="text/javascript">
$(function(){
	var list = $('.listTable tr[id]');
	list.each(function(i){
		$(this).find('.toggle-ico').click(function(){
			var tr		= list.eq(i);
			var trid	= tr.attr('id');
			if ($(this).attr('class') == 'toggle-ico btn-toggle-open')
			{
				$(this).attr('class', 'toggle-ico btn-toggle-close');
				$("tr[id^='" + trid + "']").not(tr).hide();
			}
			else if ($(this).attr('class') == 'toggle-ico btn-toggle-close')
			{
				$(this).attr('class', 'toggle-ico btn-toggle-open');
				$("tr[id^='" + trid + "']").not(tr).show().find('.toggle-ico').not("[class='toggle-ico btn-toggle-noson']").attr('class', 'toggle-ico btn-toggle-open');
			}
		});
	});

	$('#checkAll').click(function(){
		$('input.listChk').attr('checked', $(this).attr('checked'));
	});
});

function countSelect ()
{
	var cnt		= 0;
	var list	= document.getElementsByName('ids[]');
	for (var i = 0; i < list.length; i++)
	{
		if (list[i].checked) cnt++;
	}
	return cnt;
}

function DeleteSome ()  //批量删除
{
	if (countSelect() <= 0)
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->please_select_batch_records;?>
');
		return false;
	}
	if (window.confirm('<?php echo $_smarty_tpl->getVariable('lang')->value->are_you_sure_delete_selected_records;?>
')) $('#listForm').attr('action', '?con=admin&ctl=info/class&act=delete').submit();
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a onclick="DeleteSome();" class="lnkDeleteSome"><?php echo $_smarty_tpl->getVariable('lang')->value->bulk_delete;?>
</a>
			<a href="?con=admin&ctl=info/class" class="lnkRefresh"><?php echo $_smarty_tpl->getVariable('lang')->value->refresh;?>
</a>
			<a href="?con=admin&ctl=info/class&act=add&parent_id=" class="lnkAdd"><?php echo $_smarty_tpl->getVariable('lang')->value->add_top_category;?>
</a>
		</div>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="listTable">
			<tr class="listHdTr">
				<td width="40"><input type="checkbox" id="checkAll" /></td>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value->category_name;?>
</td>
				<td width="8%"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->category_max_level_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->add_sub_category;?>
</em></td>
				<td width="6%"><?php echo $_smarty_tpl->getVariable('lang')->value->thumbnail;?>
</td>
				<td width="6%"><?php echo $_smarty_tpl->getVariable('lang')->value->attachment;?>
</td>
				<td width="6%"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->delete_category_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->delete;?>
</em></td>
				<td width="8%"><?php echo $_smarty_tpl->getVariable('lang')->value->display_mode;?>
</td>
				<td width="8%"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->column_setting_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->column_setting;?>
</em></td>
			</tr>
			<form id="listForm" name="listForm" action="" method="post">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr<?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?> class="Alternating"<?php }?> id="class-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="listChk" /></td>
					<td align="left"><div class="lnkCategoryToggle" style="margin-left:<?php echo $_smarty_tpl->tpl_vars['item']->value['level']*30;?>
px;"><span class="toggle-ico btn-toggle-<?php if ($_smarty_tpl->tpl_vars['item']->value['hasSon']){?>open<?php }else{ ?>noson<?php }?>" title="<?php echo $_smarty_tpl->getVariable('lang')->value->expand_and_collapse_child;?>
"></span><?php if ($_smarty_tpl->tpl_vars['item']->value['column']['class_edit']){?><a href="?con=admin&ctl=info/class&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="<?php echo $_smarty_tpl->getVariable('lang')->value->edit;?>
"><?php }?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['column']['class_edit']==1){?></a><?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['column']['info_index']){?><a href="?con=admin&ctl=info/&class_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&withSubItems=1" class="lnkView" title="<?php echo $_smarty_tpl->getVariable('lang')->value->view_articles_list;?>
"><?php if ($_smarty_tpl->tpl_vars['item']->value['infocnt']>0){?><span class="infocnt">(<?php echo $_smarty_tpl->getVariable('lang')->value->articles_count;?>
:<em><?php echo $_smarty_tpl->tpl_vars['item']->value['infocnt'];?>
</em>)</span><?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['hidecnt']>0){?><span class="infocnt">(<?php echo $_smarty_tpl->getVariable('lang')->value->unaudited;?>
:<em><?php echo $_smarty_tpl->tpl_vars['item']->value['hidecnt'];?>
</em>)</span><?php }?></a><?php }?></div></td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['level']<19&&$_smarty_tpl->tpl_vars['item']->value['column']['class_add']){?><a href="?con=admin&ctl=info/class&act=add&parent_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkAdd" title="<?php echo $_smarty_tpl->getVariable('lang')->value->add_sub_category;?>
"></a><?php }?></td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['extend']['hasImageUrl']){?>
						<a href="<?php if ($_smarty_tpl->tpl_vars['item']->value['column']['pic']){?>javascript:infoPic('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
', 'infoClass', 'id', 'imageUrl');<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['item']->value['imageUrl']==''){?>javascript:void(0);<?php }else{ ?><?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['imageUrl'];?>
<?php }?><?php }?>" title="<?php echo $_smarty_tpl->getVariable('lang')->value->thumbnail;?>
">
							<?php if ($_smarty_tpl->tpl_vars['item']->value['imageUrl']!=''){?><font color="#FF6600"><?php echo $_smarty_tpl->getVariable('lang')->value->have;?>
</font><?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang')->value->nothing;?>
<?php }?>
						</a>
						<?php }?>
					</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['extend']['hasFiles']){?>
						<a href="<?php if ($_smarty_tpl->tpl_vars['item']->value['column']['file']){?>javascript:infoFile('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
', 'infoClass', 'id', 'files');<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['item']->value['files']==''){?>javascript:void(0);<?php }else{ ?><?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['files'];?>
<?php }?><?php }?>" title="<?php echo $_smarty_tpl->getVariable('lang')->value->attachment;?>
">
							<?php if ($_smarty_tpl->tpl_vars['item']->value['files']!=''){?><font color="#FF6600"><?php echo $_smarty_tpl->getVariable('lang')->value->have;?>
</font><?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang')->value->nothing;?>
<?php }?>
						</a>
						<?php }?>
					</td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['column']['class_delete']){?><a href="?con=admin&ctl=info/class&act=delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();" title="<?php echo $_smarty_tpl->getVariable('lang')->value->delete;?>
"></a><?php }?></td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['item']->value['defaultDisplayMode']==1){?>
						<?php echo $_smarty_tpl->getVariable('lang')->value->graphic_content;?>

						<?php }elseif($_smarty_tpl->tpl_vars['item']->value['defaultDisplayMode']==2){?>
						<?php echo $_smarty_tpl->getVariable('lang')->value->news_list;?>

						<?php }elseif($_smarty_tpl->tpl_vars['item']->value['defaultDisplayMode']==4){?>
						<?php echo $_smarty_tpl->getVariable('lang')->value->pic_list;?>

						<?php }elseif($_smarty_tpl->tpl_vars['item']->value['defaultDisplayMode']==8){?>
						<?php echo $_smarty_tpl->getVariable('lang')->value->graphic_list;?>

						<?php }else{ ?>
						<?php echo $_smarty_tpl->getVariable('lang')->value->unknow;?>

						<?php }?>
					</td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['column']['class_columnSetting']){?><a href="?con=admin&ctl=info/class&act=columnSetting&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkView" title="<?php echo $_smarty_tpl->getVariable('lang')->value->column_setting_tips;?>
"></a><?php }?></td>
				</tr>
			<?php }} ?>
			</form>
		</table>
	</div>
</div>
</body>
</html>