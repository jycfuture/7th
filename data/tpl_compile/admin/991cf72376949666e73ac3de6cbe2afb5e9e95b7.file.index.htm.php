<?php /* Smarty version Smarty-3.0.6, created on 2018-03-27 01:56:39
         compiled from "D:/www/vstar/core/common/skin/admin\system/user/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:251295ab9a4d792d8b7-20898869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '991cf72376949666e73ac3de6cbe2afb5e9e95b7' => 
    array (
      0 => 'D:/www/vstar/core/common/skin/admin\\system/user/index.htm',
      1 => 1413815586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251295ab9a4d792d8b7-20898869',
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
function searchSubmit ()
{
	var role	= document.getElementsByName('role')[0].value;
	var type	= document.getElementsByName('type')[0].value;
	var keyword	= document.getElementsByName('keyword')[0].value;
	var onlyNotApproved	= document.getElementsByName('onlyNotApproved')[0];
	if (onlyNotApproved.checked) onlyNotApproved = 1;
	else onlyNotApproved = 0;

	window.location.href = '?con=admin&ctl=system/user&role=' + role + '&type=' + type + '&keyword=' + encodeURI(keyword) + '&onlyNotApproved=' + onlyNotApproved;
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=system/user" class="lnkRefresh"><?php echo $_smarty_tpl->getVariable('lang')->value->refresh;?>
</a>
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['user_add']){?><a href="?con=admin&ctl=system/user&act=add" class="lnkAdd"><?php echo $_smarty_tpl->getVariable('lang')->value->add_user;?>
</a><?php }?>
		</div>
		<div class="search clearfix">
			<select onchange="searchSubmit()" name="role">
				<option value="0"><?php echo $_smarty_tpl->getVariable('lang')->value->filter_by_role;?>
</option>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rolelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->getVariable('search')->value['role']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
				<?php }} ?>
			</select>
			<select name="type">
				<option value="name"<?php if ($_smarty_tpl->getVariable('search')->value['type']=="name"){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->user_name;?>
</option>
				<option value="displayName"<?php if ($_smarty_tpl->getVariable('search')->value['type']=="displayName"){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->person_name;?>
</option>
				<option value="email"<?php if ($_smarty_tpl->getVariable('search')->value['type']=="email"){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value->email;?>
</option>
			</select>
			<input type="text" class="text" style="width:100px;" maxlength="50" name="keyword" value="<?php echo $_smarty_tpl->getVariable('search')->value['keyword'];?>
" />
			<input type="checkbox" onclick="searchSubmit()" name="onlyNotApproved"<?php if ($_smarty_tpl->getVariable('search')->value['onlyNotApproved']){?> checked<?php }?> /> <?php echo $_smarty_tpl->getVariable('lang')->value->only_display_unaudited_users;?>

			<a onclick="searchSubmit()" class="lnkSearch"><?php echo $_smarty_tpl->getVariable('lang')->value->search;?>
</a>
		</div>
		<table class="listTable">
			<tr class="listHdTr">
				<td width="15%"><?php echo $_smarty_tpl->getVariable('lang')->value->user_name;?>
</td>
				<td width="20%"><?php echo $_smarty_tpl->getVariable('lang')->value->person_name;?>
</td>
				<td width="15%"><?php echo $_smarty_tpl->getVariable('lang')->value->role_name;?>
</td>
				<td width="8%"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->user_administrator_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->administrator;?>
</em></td>
				<td width="8%"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->user_audit_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->whether_audit;?>
</em></td>
				<td width="12%"><?php echo $_smarty_tpl->getVariable('lang')->value->register_date;?>
</td>
				<td width="12%"><?php echo $_smarty_tpl->getVariable('lang')->value->last_login_time;?>
</td>
				<?php if ($_smarty_tpl->getVariable('hideColumn')->value['user_authorize']){?><td width="6%"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->user_authorize_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->authorize;?>
</em></td><?php }?>
				<?php if ($_smarty_tpl->getVariable('hideColumn')->value['user_delete']){?><td width="6%"><?php echo $_smarty_tpl->getVariable('lang')->value->delete;?>
</td><?php }?>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr<?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?> class="Alternating"<?php }?>>
					<td><?php if ($_smarty_tpl->getVariable('hideColumn')->value['user_edit']&&($_smarty_tpl->tpl_vars['item']->value['groupid']==1||$_smarty_tpl->getVariable('user_id')->value==-1)){?><a href="?con=admin&ctl=system/user&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['displayName'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['roleName'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['isAdmin']==1){?><?php echo $_smarty_tpl->getVariable('lang')->value->yes;?>
<?php }else{ ?><font color="FF0000"><?php echo $_smarty_tpl->getVariable('lang')->value->no;?>
</font><?php }?></td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['isApproved']==1){?><?php echo $_smarty_tpl->getVariable('lang')->value->yes;?>
<?php }else{ ?><font color="FF0000"><?php echo $_smarty_tpl->getVariable('lang')->value->no;?>
</font><?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['createdDate'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['lastLoginDate'];?>
</td>
					<?php if ($_smarty_tpl->getVariable('hideColumn')->value['user_authorize']){?><td><?php if (($_smarty_tpl->tpl_vars['item']->value['roleExtendType']!=1||$_smarty_tpl->tpl_vars['item']->value['role']==0)&&($_smarty_tpl->tpl_vars['item']->value['groupid']==1||$_smarty_tpl->getVariable('user_id')->value==-1)){?><a href="?con=admin&ctl=system/user&act=authorize&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkAuthorize"></a><?php }?></td><?php }?>
					<?php if ($_smarty_tpl->getVariable('hideColumn')->value['user_delete']){?><td><?php if ($_smarty_tpl->tpl_vars['item']->value['groupid']==1||$_smarty_tpl->getVariable('user_id')->value==-1){?><a href="?con=admin&ctl=system/user&act=delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();"></a><?php }?></td><?php }?>
				</tr>
			<?php }} ?>
			<tr class="listFtTr">
				<td colspan="9" align="right"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>