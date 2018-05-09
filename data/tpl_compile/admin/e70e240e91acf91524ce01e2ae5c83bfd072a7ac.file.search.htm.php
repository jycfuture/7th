<?php /* Smarty version Smarty-3.0.6, created on 2018-03-27 01:54:56
         compiled from "D:/www/vstar/core/common/skin/admin\info/index/search.htm" */ ?>
<?php /*%%SmartyHeaderCode:109955ab9a470b69a57-17682528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70e240e91acf91524ce01e2ae5c83bfd072a7ac' => 
    array (
      0 => 'D:/www/vstar/core/common/skin/admin\\info/index/search.htm',
      1 => 1413797424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109955ab9a470b69a57-17682528',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_strpad')) include 'D:\www\vstar\core\smarty\plugins\function.strpad.php';
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
<script src="<?php echo $_smarty_tpl->getVariable('STATIC_PATH')->value;?>
calendar/ui.datepicker-zh-cn.js"></script>
</head>
<script>
function searchSubmit ()
{
	var class_id	= document.getElementsByName('class_id')[0].value;
	var creator		= document.getElementsByName('creator')[0].value;
	var pub_from	= document.getElementsByName('pub_from')[0].value;
	var pub_to		= document.getElementsByName('pub_to')[0].value;
	var keyword		= document.getElementsByName('keyword')[0].value;

	window.location.href = '?con=admin&ctl=info/&type=title&class_id=' + class_id + '&creator=' + creator + '&pub_from=' + pub_from + '&pub_to=' + pub_to + '&keyword=' + encodeURI(keyword) + '&withSubItems=1';
}

$(function(){
	var pub_from = document.getElementsByName('pub_from')[0];
	$(pub_from).keydown(function(){
		return false;
	}).datepicker($.datepicker.regional["zh-cn"]);

	var pub_to = document.getElementsByName('pub_to')[0];
	$(pub_to).keydown(function(){
		return false;
	}).datepicker($.datepicker.regional["zh-cn"]);
});
</script>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=info/&act=add" class="lnkAdd"><?php echo $_smarty_tpl->getVariable('lang')->value->add_info;?>
</a>
		</div>
		<table class="editTable">
			<tr class="editHdTr">
				<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->search_info;?>
</td>
			</tr>
			<tr class="editTr">
				<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->select_category;?>
</td>
				<td class="editRtTd">
					<select name="class_id">
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
					</select>
				</td>
			</tr>
			<tr class="editTr">
				<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->select_publish_user;?>
</td>
				<td class="editRtTd">
						<select name="creator">
						<option value="">--<?php echo $_smarty_tpl->getVariable('lang')->value->select_publish_user;?>
--</option>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
						<?php }} ?>
					</select>
				</td>
			</tr>
			<tr class="editTr">
				<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->search_in_title;?>
</td>
				<td class="editRtTd"><input type="text" name="keyword" class="text" size="50" /></td>
			</tr>
			<tr class="editTr">
				<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->specify_publish_date_range;?>
</td>
				<td class="editRtTd">
					<?php echo $_smarty_tpl->getVariable('lang')->value->start_date;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
<input type="text" name="pub_from" class="text" size="12" /> 
					<?php echo $_smarty_tpl->getVariable('lang')->value->end_date;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
<input type="text" name="pub_to" class="text" size="12" />
				</td>
			</tr>
		</table>
		<div class="editBtn clearfix">
			<input type="button" value="Save" class="lnkSave" onclick="searchSubmit();"/>
		</div>
	</div>
</div>
</body>
</html>