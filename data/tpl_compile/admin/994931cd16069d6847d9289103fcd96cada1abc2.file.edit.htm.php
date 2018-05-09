<?php /* Smarty version Smarty-3.0.6, created on 2018-03-28 00:07:44
         compiled from "D:/www/vstar/core/common/skin/admin\system/user/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:189615abadcd08fb1e3-09076100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '994931cd16069d6847d9289103fcd96cada1abc2' => 
    array (
      0 => 'D:/www/vstar/core/common/skin/admin\\system/user/edit.htm',
      1 => 1413798902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189615abadcd08fb1e3-09076100',
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
<script type="text/javascript">
function check (form)
{
	name = document.getElementsByName('data[displayName]')[0];
	if (name.value == '')
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->person_name;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->can_not_empty;?>
');
		name.focus();
		return false;
	}

	name = document.getElementsByName('data[password]')[0];
	if (name.value != '')
	{
		if (name.value.length < 8)
		{
			alert('<?php echo $_smarty_tpl->getVariable('lang')->value->password_length_error_or_not_match;?>
');
			name.focus();
			name.select();
			return false;
		}

		var name1 = document.getElementsByName('data[password2]')[0];
		if (name.value == '')
		{
			alert('<?php echo $_smarty_tpl->getVariable('lang')->value->password_length_error_or_not_match;?>
');
			name.focus();
			return false;
		}

		if (name.value != name1.value)
		{
			alert('<?php echo $_smarty_tpl->getVariable('lang')->value->password_length_error_or_not_match;?>
');
			name.focus();
			name.select();
			return false;
		}
	}

	return true;
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=system/user" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['user_delete']){?><a href="?con=admin&ctl=system/user&act=delete&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();"><?php echo $_smarty_tpl->getVariable('lang')->value->delete;?>
</a><?php }?>
		</div>
		<form action="?con=admin&ctl=system/user&act=edit&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->edit_user;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->user_name;?>
</td>
					<td class="editRtTd"><input name="name" value="<?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
" type="text" size="30" class="text" disabled /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->person_name;?>
</td>
					<td class="editRtTd"><input name="data[displayName]" value="<?php echo $_smarty_tpl->getVariable('data')->value['displayName'];?>
" type="text" size="30" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->email;?>
</td>
					<td class="editRtTd"><input name="data[email]" value="<?php echo $_smarty_tpl->getVariable('data')->value['email'];?>
" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->password;?>
</td>
					<td class="editRtTd"><input name="data[password]" value="<?php echo $_smarty_tpl->getVariable('data')->value['password'];?>
" type="password" size="30" class="text" /> <?php echo $_smarty_tpl->getVariable('lang')->value->edit_password_tips;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->confirm_password;?>
</td>
					<td class="editRtTd"><input name="data[password2]" value="<?php echo $_smarty_tpl->getVariable('data')->value['password2'];?>
" type="password" size="30" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->user_administrator_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->whether_administrator;?>
</em></td>
					<td class="editRtTd"><input id="isAdmin" name="data[isAdmin]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['isAdmin']==1){?> checked<?php }?> /><label for="isAdmin"><?php echo $_smarty_tpl->getVariable('lang')->value->yes;?>
</label></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->user_audit_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->whether_audit;?>
</em></td>
					<td class="editRtTd"><input id="isApproved" name="data[isApproved]" value="1" type="checkbox"<?php if ($_smarty_tpl->getVariable('data')->value['isApproved']==1){?> checked<?php }?> /><label for="isApproved"><?php echo $_smarty_tpl->getVariable('lang')->value->yes;?>
</label></td>
				</tr>
				<?php if ($_smarty_tpl->getVariable('user_id')->value=='-1'){?>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->group;?>
</td>
					<td class="editRtTd"><input name="data[groupid]" value="<?php echo $_smarty_tpl->getVariable('data')->value['groupid'];?>
" type="text" size="10" class="text" /></td>
				</tr>
				<?php }?>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->role;?>
</td>
					<td class="editRtTd">
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('roles')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<input id="role<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="data[role]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['role']==$_smarty_tpl->tpl_vars['item']->value['id']){?> checked<?php }?> /><label for="role<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</label>
						<?php }} ?>
						<input id="roleCustom" name="data[role]" value="0" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['role']==0){?> checked<?php }?> /><label for="roleCustom"><?php echo $_smarty_tpl->getVariable('lang')->value->custom;?>
</label>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->role_inheritance_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->role_inheritance;?>
</em></td>
					<td class="editRtTd">
						<input id="roleExtendType0" name="data[roleExtendType]" value="0" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['roleExtendType']==0){?> checked<?php }?> /><label for="roleExtendType0"><?php echo $_smarty_tpl->getVariable('lang')->value->not_inherit;?>
</label>
						<input id="roleExtendType1" name="data[roleExtendType]" value="1" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['roleExtendType']==1){?> checked<?php }?> /><label for="roleExtendType1"><?php echo $_smarty_tpl->getVariable('lang')->value->full_inherit;?>
</label>
						<input id="roleExtendType2" name="data[roleExtendType]" value="2" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['roleExtendType']==2){?> checked<?php }?> /><label for="roleExtendType2"><?php echo $_smarty_tpl->getVariable('lang')->value->merge_inherit;?>
</label>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->user_copy_permission_from_tips;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->user_copy_permission_from;?>
</em></td>
					<td class="editRtTd">
						<select name="extendBy">
							<option>--<?php echo $_smarty_tpl->getVariable('lang')->value->user_copy_permission_from;?>
--</option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('extendBy')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['displayName'];?>
 [<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
]</option>
							<?php }} ?>
						</select> 
						<?php echo $_smarty_tpl->getVariable('lang')->value->user_copy_permission_from_note;?>

					</td>
				</tr>
			</table>
			<div class="editBtn clearfix">
				<input type="submit" value="Save" class="lnkSave" /> 
				<a href="?con=admin&ctl=system/user" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
			</div>
		</form>
	</div>
</div>
</body>
</html>