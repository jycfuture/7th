<?php /* Smarty version Smarty-3.0.6, created on 2018-03-27 02:06:04
         compiled from "D:/www/vstar/core/common/skin/admin\info/index/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:8475ab9a70c5bdf35-76545362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5144a2d0574f16a1764fbb4ca3bd33b8fd21e015' => 
    array (
      0 => 'D:/www/vstar/core/common/skin/admin\\info/index/index.htm',
      1 => 1508149310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8475ab9a70c5bdf35-76545362',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_strpad')) include 'D:\www\vstar\core\smarty\plugins\function.strpad.php';
if (!is_callable('smarty_function_int2string')) include 'D:\www\vstar\core\smarty\plugins\function.int2string.php';
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
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
js/list.js"></script>
<script>
function searchSubmit ()
{
	var class_idObj		= document.getElementsByName('class_id')[0];
	var class_id = null;
	if ( class_idObj ) {
		class_id = class_idObj.value;
	}
	else {
		class_id = '<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
';
	}
	var withSubItemsObj	= document.getElementsByName('withSubItems')[0];
	var withSubItems = null;
	if ( withSubItemsObj ) {
		withSubItems = withSubItemsObj.value;
	}
	var publishedDate	= document.getElementsByName('publishedDate')[0].value;
	var isApproved		= document.getElementsByName('isApproved')[0].value;
	var type			= document.getElementsByName('type')[0].value;
	var keyword			= document.getElementsByName('keyword')[0].value;
	var perPageCountObj	= document.getElementsByName('perPageCount')[0];
	var perPageCount	= null;
	if ( perPageCountObj ) {
		perPageCount	= perPageCountObj.value;
	}

	window.location.href = '?con=admin&ctl=info/&class_id=' + class_id + '&withSubItems=' + withSubItems + '&publishedDate=' + publishedDate + '&isApproved=' + isApproved + '&type=' + type + '&perPageCount=' + perPageCount + '&keyword=' + encodeURI(keyword) + '&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
';
}

function stateSubmit ()
{
	if (parseInt($('#state').val()) > 0)
	{
		var class_idObj		= document.getElementsByName('class_id')[0];
		var class_id = null;
		if ( class_idObj ) {
			class_id = class_idObj.value;
		}
		else {
			class_id = '<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
';
		}
		var withSubItemsObj	= document.getElementsByName('withSubItems')[0];
		var withSubItems = null;
		if ( withSubItemsObj ) {
			withSubItems = withSubItemsObj.value;
		}
		var publishedDate	= document.getElementsByName('publishedDate')[0].value;
		var isApproved		= document.getElementsByName('isApproved')[0].value;
		var type			= document.getElementsByName('type')[0].value;
		var keyword			= document.getElementsByName('keyword')[0].value;
		var perPageCountObj	= document.getElementsByName('perPageCount')[0];
		var perPageCount	= null;
		if ( perPageCountObj ) {
			perPageCount	= perPageCountObj.value;
		}
		var state			= document.getElementsByName('state')[0].value;

		$('#listForm').attr('action', '?con=admin&ctl=info/&act=state&class_id=' + class_id + '&withSubItems=' + withSubItems + '&publishedDate=' + publishedDate + '&isApproved=' + isApproved + '&type=' + type + '&perPageCount=' + perPageCount + '&state=' + state + '&keyword=' + encodeURI(keyword) + '&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
').submit();
	}
}

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

function move ()  //批量转移
{
	if ($('#targetClass').val() == '')
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->please_select_target_category;?>
');
		return false;
	}
	if (countSelect() <= 0)
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->please_select_batch_records;?>
');
		return false;
	}
	$('#listForm').attr('action', '?con=admin&ctl=info/&act=move&class_id=<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
&targetClass=' + $('#targetClass').val()).submit();
}

function copy ()  //批量复制
{
	if ($('#targetClass').val() == '')
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->please_select_target_category;?>
');
		return false;
	}
	if (countSelect() <= 0)
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->please_select_batch_records;?>
');
		return false;
	}
	$('#listForm').attr('action', '?con=admin&ctl=info/&act=copy&class_id=<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
&targetClass=' + $('#targetClass').val()).submit();
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
')) $('#listForm').attr('action', '?con=admin&ctl=info/&act=delete&class_id=<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
').submit();
}

$(function(){
	$('#checkAll').click(function(){
		$('input.listChk').attr('checked', $(this).attr('checked'));
	});
});
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<?php if ($_smarty_tpl->getVariable('noback')->value){?>
			<?php }else{ ?>
			<span>
				<select id="targetClass" name="targetClass">
					<option value="">--<?php echo $_smarty_tpl->getVariable('lang')->value->select_category;?>
--</option>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('infoclasslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo smarty_function_strpad(array('str'=>'','len'=>$_smarty_tpl->tpl_vars['item']->value['level'],'pad'=>'-'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
					<?php }} ?>
				</select>&nbsp;
				<a href="#" onclick="move();"><?php echo $_smarty_tpl->getVariable('lang')->value->bulk_transfer;?>
</a>&nbsp;
				<a href="#" onclick="copy();"><?php echo $_smarty_tpl->getVariable('lang')->value->bulk_copy;?>
</a>
			</span>
			<?php }?>
			<a onclick="DeleteSome();" class="lnkDeleteSome"><?php echo $_smarty_tpl->getVariable('lang')->value->bulk_delete;?>
</a>
			<?php if ($_smarty_tpl->getVariable('noback')->value){?><?php }else{ ?><a href="?con=admin&ctl=info/class" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_category_list;?>
</a><?php }?>
			<a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
" class="lnkRefresh"><?php echo $_smarty_tpl->getVariable('lang')->value->refresh;?>
</a>
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['info_add']){?><a href="?con=admin&ctl=info/&act=add&class_id=<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" class="lnkAdd"><?php echo $_smarty_tpl->getVariable('lang')->value->add_info;?>
</a><?php }?>
			<select id="state" name="state" onchange="stateSubmit();">
				<option value="0"><?php echo $_smarty_tpl->getVariable('lang')->value->set_status_as;?>
</option>
				<option value="1"><?php echo $_smarty_tpl->getVariable('lang')->value->unaudited;?>
</option>
				<option value="2"><?php echo $_smarty_tpl->getVariable('lang')->value->audited;?>
</option>
				<option value="3"><?php echo $_smarty_tpl->getVariable('lang')->value->status_top_no;?>
</option>
				<option value="4"><?php echo $_smarty_tpl->getVariable('lang')->value->status_top;?>
</option>
				<option value="5"><?php echo $_smarty_tpl->getVariable('lang')->value->status_recommend_no;?>
</option>
				<option value="6"><?php echo $_smarty_tpl->getVariable('lang')->value->status_recommend;?>
</option>
				<option value="7"><?php echo $_smarty_tpl->getVariable('lang')->value->status_hot_no;?>
</option>
				<option value="8"><?php echo $_smarty_tpl->getVariable('lang')->value->status_hot;?>
</option>
			</select>
		</div>
		<div class="search">
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['class_columnSetting']){?><a href="?con=admin&ctl=info/class&act=columnSetting&id=<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" class="column-setting" title="<?php echo $_smarty_tpl->getVariable('lang')->value->column_setting;?>
"></a><?php }?>
			<?php if ($_smarty_tpl->getVariable('noback')->value){?>
			<?php }else{ ?>
			<select onchange="searchSubmit();" name="class_id">
				<option value="">--<?php echo $_smarty_tpl->getVariable('lang')->value->select_category;?>
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
			<select onchange="searchSubmit();" name="withSubItems">
				<option value="1"<?php if ($_smarty_tpl->getVariable('search')->value['withSubItems']!=0){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->include_sub_category_articles;?>
</option>
				<option value="0"<?php if ($_smarty_tpl->getVariable('search')->value['withSubItems']==0){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->not_include_sub_category_articles;?>
</option>
			</select>
			<?php }?>
			<select onchange="searchSubmit();" name="publishedDate">
				<option value=""<?php if ($_smarty_tpl->getVariable('search')->value['publishedDate']==''){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->publish_date;?>
</option>
				<option value="today"<?php if ($_smarty_tpl->getVariable('search')->value['publishedDate']=='today'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->today;?>
</option>
				<option value="week"<?php if ($_smarty_tpl->getVariable('search')->value['publishedDate']=='week'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->this_week;?>
</option>
				<option value="month"<?php if ($_smarty_tpl->getVariable('search')->value['publishedDate']=='month'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->this_month;?>
</option>
				<option value="year"<?php if ($_smarty_tpl->getVariable('search')->value['publishedDate']=='year'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->this_year;?>
</option>
			</select>			
			<select onchange="searchSubmit();" name="isApproved">
				<option value=""<?php if ($_smarty_tpl->getVariable('search')->value['isApproved']==''){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->whether_audit;?>
</option>
				<option value="1"<?php if ($_smarty_tpl->getVariable('search')->value['isApproved']=='1'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->audited;?>
</option>
				<option value="0"<?php if ($_smarty_tpl->getVariable('search')->value['isApproved']=='0'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->unaudited;?>
</option>
			</select>
			<select name="type">
				<option value="title"<?php if ($_smarty_tpl->getVariable('search')->value['type']=='title'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->title;?>
</option>
				<option value="createUser"<?php if ($_smarty_tpl->getVariable('search')->value['type']=='createUser'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->publish_user;?>
</option>
				<option value="keywords"<?php if ($_smarty_tpl->getVariable('search')->value['type']=='keywords'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->page_keywords;?>
</option>
				<option value="description"<?php if ($_smarty_tpl->getVariable('search')->value['type']=='description'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->page_description;?>
</option>
				<option value="content"<?php if ($_smarty_tpl->getVariable('search')->value['type']=='content'){?> selected<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->detail;?>
</option>
			</select>
			<input type="text" class="text" style="width:100px;" maxlength="50" name="keyword" value="<?php echo $_smarty_tpl->getVariable('search')->value['keyword'];?>
" />
			<a onclick="searchSubmit();" class="lnkSearch"><?php echo $_smarty_tpl->getVariable('lang')->value->search;?>
</a>
		</div>
		<table class="listTable">
			<tr class="listHdTr">
				<td width="40"><input type="checkbox" id="checkAll" /></td>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('column')->value['columnName']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<td><a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
order=<?php echo $_smarty_tpl->getVariable('column')->value['columnField'][$_smarty_tpl->tpl_vars['key']->value];?>
&ordertype=<?php if ($_smarty_tpl->getVariable('order')->value['order']==$_smarty_tpl->getVariable('column')->value['columnField'][$_smarty_tpl->tpl_vars['key']->value]){?><?php if ($_smarty_tpl->getVariable('order')->value['ordertype']=='desc'){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?>desc<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></td>
				<?php }} ?>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value->operate;?>
</td>
			</tr>
			<form id="listForm" name="listForm" action="" method="post">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr<?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?> class="Alternating"<?php }?>>
					<td><input type="checkbox" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="listChk" /></td>
					<?php  $_smarty_tpl->tpl_vars['citem'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['ckey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('column')->value['columnField']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['citem']->key => $_smarty_tpl->tpl_vars['citem']->value){
 $_smarty_tpl->tpl_vars['ckey']->value = $_smarty_tpl->tpl_vars['citem']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['citem']->value=='ordinal'){?>
							<td><?php if (($_smarty_tpl->getVariable('class_id')->value==''&&$_smarty_tpl->tpl_vars['item']->value['hideColumn']['info_preview'])||$_smarty_tpl->getVariable('hideColumn')->value['info_preview']){?><a href="?con=admin&ctl=info/&act=preview&class_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['classId'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" target="_blank" title="<?php echo $_smarty_tpl->getVariable('lang')->value->preview;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['citem']->value];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['citem']->value];?>
<?php }?></td>
						<?php }elseif($_smarty_tpl->tpl_vars['citem']->value=='title'){?>
							<td><?php if (($_smarty_tpl->getVariable('class_id')->value==''&&$_smarty_tpl->tpl_vars['item']->value['hideColumn']['info_edit'])||($_smarty_tpl->getVariable('class_id')->value!=''&&$_smarty_tpl->getVariable('hideColumn')->value['info_edit'])){?><a href="?con=admin&ctl=info/&act=edit&class_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['classId'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" title="<?php echo $_smarty_tpl->getVariable('lang')->value->edit;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['citem']->value];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['citem']->value];?>
<?php }?></td>
						<?php }elseif($_smarty_tpl->tpl_vars['citem']->value=='isHot'||$_smarty_tpl->tpl_vars['citem']->value=='isRecommended'||$_smarty_tpl->tpl_vars['citem']->value=='isTop'||$_smarty_tpl->tpl_vars['citem']->value=='isApproved'){?>
							<td><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['citem']->value]){?><font color="FF0000"><?php echo $_smarty_tpl->getVariable('lang')->value->yes;?>
</font><?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang')->value->no;?>
<?php }?></td>
						<?php }elseif($_smarty_tpl->tpl_vars['citem']->value=='imageUrl'){?>
							<td><a href="<?php if (($_smarty_tpl->getVariable('class_id')->value==''&&$_smarty_tpl->tpl_vars['item']->value['hideColumn']['pic'])||($_smarty_tpl->getVariable('class_id')->value!=''&&$_smarty_tpl->getVariable('hideColumn')->value['pic'])){?>javascript:infoPic(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, 'info', 'id', 'imageUrl');<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['item']->value['imageUrl']==''){?>javascript:void(0);<?php }else{ ?><?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['imageUrl'];?>
<?php }?><?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['citem']->value]!=''){?><font color="FF6600"><?php echo $_smarty_tpl->getVariable('lang')->value->have;?>
</font><?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang')->value->nothing;?>
<?php }?></a></td>
						<?php }elseif($_smarty_tpl->tpl_vars['citem']->value=='bigImageUrl'){?>
							<td><a href="<?php if (($_smarty_tpl->getVariable('class_id')->value==''&&$_smarty_tpl->tpl_vars['item']->value['hideColumn']['pic2'])||($_smarty_tpl->getVariable('class_id')->value!=''&&$_smarty_tpl->getVariable('hideColumn')->value['pic2'])){?>javascript:infoPic(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, 'info', 'id', 'bigImageUrl');<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['item']->value['bigImageUrl']==''){?>javascript:void(0);<?php }else{ ?><?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['bigImageUrl'];?>
<?php }?><?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['citem']->value]!=''){?><font color="FF6600"><?php echo $_smarty_tpl->getVariable('lang')->value->have;?>
</font><?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang')->value->nothing;?>
<?php }?></a></td>
						<?php }elseif($_smarty_tpl->tpl_vars['citem']->value=='files'){?>
							<td><a href="<?php if (($_smarty_tpl->getVariable('class_id')->value==''&&$_smarty_tpl->tpl_vars['item']->value['hideColumn']['file'])||($_smarty_tpl->getVariable('class_id')->value!=''&&$_smarty_tpl->getVariable('hideColumn')->value['file'])){?>javascript:infoFile(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
, 'info', 'id', 'files');<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['item']->value['files']==''){?>javascript:void(0);<?php }else{ ?><?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['files'];?>
<?php }?><?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['citem']->value]!=''){?><font color="FF6600"><?php echo $_smarty_tpl->getVariable('lang')->value->have;?>
</font><?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang')->value->nothing;?>
<?php }?></a></td>
						<?php }elseif($_smarty_tpl->tpl_vars['citem']->value=='createdUserId'){?>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['userName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value['userDisplayName'];?>
)</td>
						<?php }elseif($_smarty_tpl->tpl_vars['citem']->value=='classId'){?>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['className'];?>
</td>
						<?php }elseif($_smarty_tpl->tpl_vars['citem']->value=='createdDate'||$_smarty_tpl->tpl_vars['citem']->value=='lastModifiedDate'){?>
							<td><?php echo smarty_function_int2string(array('str'=>'Y-m-d','time'=>$_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['citem']->value]),$_smarty_tpl);?>
</td>
						<?php }else{ ?>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['citem']->value];?>
</td>
						<?php }?>
					<?php }} ?>
					<td>
						<?php if (($_smarty_tpl->getVariable('class_id')->value==''&&$_smarty_tpl->tpl_vars['item']->value['hideColumn']['info_delete'])||($_smarty_tpl->getVariable('class_id')->value!=''&&$_smarty_tpl->getVariable('hideColumn')->value['info_delete'])){?><?php if ($_smarty_tpl->getVariable('class_id')->value!='105'){?><a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
act=delete&class_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['classId'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();">Delete</a><?php }?><?php }?>
					</td>
				</tr>
			<?php }} ?>
			</form>
			<tr class="listFtTr">
				<td colspan="<?php echo $_smarty_tpl->getVariable('column')->value['count']+2;?>
"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>