<?php /* Smarty version Smarty-3.0.6, created on 2017-07-10 17:36:10
         compiled from "D:/www/mishi/core/common/skin/admin\adv/ride/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2814259634a8a096e64-72123456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccdb03215399a5cfd1bb795a2e29e97122d6d3fa' => 
    array (
      0 => 'D:/www/mishi/core/common/skin/admin\\adv/ride/index.htm',
      1 => 1499679367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2814259634a8a096e64-72123456',
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
<script>
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
')) $('#listForm').attr('action', '<?php echo $_smarty_tpl->getVariable('doUrl')->value;?>
act=delete').submit();
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
			<a href="../../../../../../index.php" class="lnkRefresh"><?php echo $_smarty_tpl->getVariable('lang')->value->refresh;?>
</a>
			<a onclick="DeleteSome();" class="lnkDeleteSome"><?php echo $_smarty_tpl->getVariable('lang')->value->delete;?>
</a>
		</div>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="listTable">
			<tr class="listHdTr">
				<td width="40"><input type="checkbox" id="checkAll" /></td>
				<td>NAME</td>
				<td>TEL</td>
				<td>EMAIL</td>
				<td>SUBMIT-TIME</td>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value->view;?>
</td>
				<td width="8%"><?php echo $_smarty_tpl->getVariable('lang')->value->delete;?>
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
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['lastname'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
					<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['item']->value['createTime']);?>
</td>
					<td><a href="<?php echo $_smarty_tpl->getVariable('doUrl')->value;?>
act=edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->view;?>
</td>
					<td><a href="<?php echo $_smarty_tpl->getVariable('doUrl')->value;?>
act=delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();"></a></td>
				</tr>
			<?php }} ?>
			</form>
			<tr class="listFtTr">
				<td colspan="10"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>