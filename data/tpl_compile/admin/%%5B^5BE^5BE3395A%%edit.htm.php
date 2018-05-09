<?php /* Smarty version 2.6.26, created on 2012-04-04 22:08:42
         compiled from system/user/edit.htm */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/main.css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/global.js"></script>
<script type="text/javascript">
function check (form)
{
	name = document.getElementsByName('data[displayName]')[0];
	if (name.value == '')
	{
		alert('The name can not be empty!');
		name.focus();
		return false;
	}

	name = document.getElementsByName('data[password]')[0];
	if (name.value != '')
	{
		if (name.value.length < 8)
		{
			alert('The password length can not be less than 8!');
			name.focus();
			name.select();
			return false;
		}

		var name1 = document.getElementsByName('data[password2]')[0];
		if (name.value == '')
		{
			alert('Again confirm the password can not be empty!');
			name.focus();
			return false;
		}

		if (name.value != name1.value)
		{
			alert('Two entered passwords do not match!');
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
			<a href="?con=admin&ctl=system/user" class="lnkReturn">Return to list</a> 
			<?php if ($this->_tpl_vars['hideColumn']['user_delete']): ?><a href="?con=admin&ctl=system/user&act=delete&id=<?php echo $this->_tpl_vars['data']['id']; ?>
" class="lnkDelete" onclick="return chkDelete();">Delete</a><?php endif; ?>
		</div>
		<form action="?con=admin&ctl=system/user&act=edit&id=<?php echo $this->_tpl_vars['data']['id']; ?>
" method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Edit user</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">User name</td>
					<td class="editRtTd"><input name="name" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" type="text" size="30" class="text" disabled /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Name</td>
					<td class="editRtTd"><input name="data[displayName]" value="<?php echo $this->_tpl_vars['data']['displayName']; ?>
" type="text" size="30" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Email</td>
					<td class="editRtTd"><input name="data[email]" value="<?php echo $this->_tpl_vars['data']['email']; ?>
" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Password</td>
					<td class="editRtTd"><input name="data[password]" value="<?php echo $this->_tpl_vars['data']['password']; ?>
" type="password" size="30" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Confirm the password again</td>
					<td class="editRtTd"><input name="data[password2]" value="<?php echo $this->_tpl_vars['data']['password2']; ?>
" type="password" size="30" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Non-administrators will not be able to enter the management center">Whether the administrator</em></td>
					<td class="editRtTd"><input id="isAdmin" name="data[isAdmin]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['isAdmin'] == 1): ?> checked<?php endif; ?> /><label for="isAdmin">Yes</label></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Audit user will not be able to enter the management center">Whether the audit</em></td>
					<td class="editRtTd"><input id="isApproved" name="data[isApproved]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['isApproved'] == 1): ?> checked<?php endif; ?> /><label for="isApproved">Yes</label></td>
				</tr>
				<?php if ($this->_tpl_vars['user_id'] == '-1'): ?>
				<tr class="editTr">
					<td class="editLtTd">Group</td>
					<td class="editRtTd"><input name="data[groupid]" value="<?php echo $this->_tpl_vars['data']['groupid']; ?>
" type="text" size="10" class="text" /></td>
				</tr>
				<?php endif; ?>
				<tr class="editTr">
					<td class="editLtTd">Role</td>
					<td class="editRtTd">
						<?php $_from = $this->_tpl_vars['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
							<input id="role<?php echo $this->_tpl_vars['key']; ?>
" name="data[role]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" type="radio"<?php if ($this->_tpl_vars['data']['role'] == $this->_tpl_vars['item']['id']): ?> checked<?php endif; ?> /><label for="role<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</label>
						<?php endforeach; endif; unset($_from); ?>
						<input id="roleCustom" name="data[role]" value="0" type="radio"<?php if ($this->_tpl_vars['data']['role'] == 0): ?> checked<?php endif; ?> /><label for="roleCustom">Custom</label>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Inheritance: the user's permissions completely separate allocation will not inherit the permissions of the role; full inheritance: To completely inherited from the role; merger inheritance: the sum of user privileges and roles permissions, run slower">Role inheritance</em></td>
					<td class="editRtTd">
						<input id="roleExtendType0" name="data[roleExtendType]" value="0" type="radio"<?php if ($this->_tpl_vars['data']['roleExtendType'] == 0): ?> checked<?php endif; ?> /><label for="roleExtendType0">Does not inherit</label>
						<input id="roleExtendType1" name="data[roleExtendType]" value="1" type="radio"<?php if ($this->_tpl_vars['data']['roleExtendType'] == 1): ?> checked<?php endif; ?> /><label for="roleExtendType1">Fully inherited</label>
						<input id="roleExtendType2" name="data[roleExtendType]" value="2" type="radio"<?php if ($this->_tpl_vars['data']['roleExtendType'] == 2): ?> checked<?php endif; ?> /><label for="roleExtendType2">Merge inheritance</label>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Copy permissions from other users">Copying permissions from</em></td>
					<td class="editRtTd">
						<select name="extendBy">
							<option>--Copy permissions from users--</option>
							<?php $_from = $this->_tpl_vars['extendBy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
								<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['displayName']; ?>
 [<?php echo $this->_tpl_vars['item']['name']; ?>
]</option>
							<?php endforeach; endif; unset($_from); ?>
						</select> 
						Note: Select to copy the permissions from other users of the current user roles and permissions will be overwritten!
					</td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=system/user" class="lnkReturn">Return to list</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>