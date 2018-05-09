<?php /* Smarty version 2.6.26, created on 2012-04-04 22:08:40
         compiled from system/user/index.htm */ ?>
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
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
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
			<a href="?con=admin&ctl=system/user" class="lnkRefresh">Refresh the list</a>
			<?php if ($this->_tpl_vars['hideColumn']['user_add']): ?><a href="?con=admin&ctl=system/user&act=add" class="lnkAdd">Increase user</a><?php endif; ?>
		</div>
		<div class="search">
			<select onchange="searchSubmit()" name="role">
				<option value="0">Filter by Role</option>
				<?php $_from = $this->_tpl_vars['rolelist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"<?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['search']['role']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
			<select name="type">
				<option value="name"<?php if ($this->_tpl_vars['search']['type'] == 'name'): ?> selected="selected"<?php endif; ?>>User name</option>
				<option value="displayName"<?php if ($this->_tpl_vars['search']['type'] == 'displayName'): ?> selected="selected"<?php endif; ?>>Name</option>
				<option value="email"<?php if ($this->_tpl_vars['search']['type'] == 'email'): ?> selected="selected"<?php endif; ?>>Email</option>
			</select>
			<input type="text" style="width:100px;" maxlength="50" name="keyword" value="<?php echo $this->_tpl_vars['search']['keyword']; ?>
" />
			<input type="checkbox" onclick="searchSubmit()" name="onlyNotApproved"<?php if ($this->_tpl_vars['search']['onlyNotApproved']): ?> checked<?php endif; ?> /> Display unreviewed users only
			<a onclick="searchSubmit()" class="lnkSearch">Search</a>
		</div>
		<table class="listTable">
			<tr class="listHdTr">
				<td width="15%">User name</td>
				<td width="20%">Name</td>
				<td width="15%">Role</td>
				<td width="8%"><em class="tip" tips="Non-administrators will not be able to enter the management center">Administrator</em></td>
				<td width="8%"><em class="tip" tips="unaudited user will not be able to enter the management center">Whether the audit</em></td>
				<td width="12%">Registration date</td>
				<td width="12%">Last login time</td>
				<?php if ($this->_tpl_vars['hideColumn']['user_authorize']): ?><td width="6%"><em class="tip" tips="User's permissions can be inherited from the role of inheritance as 'inheritance', then the user will not be able to separate authorization">Authorize</em></td><?php endif; ?>
				<?php if ($this->_tpl_vars['hideColumn']['user_delete']): ?><td width="6%">Delete</td><?php endif; ?>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<tr<?php if ($this->_tpl_vars['key'] % 2 == 0): ?> class="Alternating"<?php endif; ?>>
					<td><?php if ($this->_tpl_vars['hideColumn']['user_edit'] && ( $this->_tpl_vars['item']['groupid'] == 1 || $this->_tpl_vars['user_id'] == -1 )): ?><a href="?con=admin&ctl=system/user&act=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php endif; ?></td>
					<td><?php echo $this->_tpl_vars['item']['displayName']; ?>
</td>
					<td><?php echo $this->_tpl_vars['item']['roleName']; ?>
</td>
					<td><?php if ($this->_tpl_vars['item']['isAdmin'] == 1): ?>Yes<?php else: ?><font color="FF0000">No</font><?php endif; ?></td>
					<td><?php if ($this->_tpl_vars['item']['isApproved'] == 1): ?>Yes<?php else: ?><font color="FF0000">No</font><?php endif; ?></td>
					<td><?php echo $this->_tpl_vars['item']['createdDate']; ?>
</td>
					<td><?php echo $this->_tpl_vars['item']['lastLoginDate']; ?>
</td>
					<?php if ($this->_tpl_vars['hideColumn']['user_authorize']): ?><td><?php if (( $this->_tpl_vars['item']['roleExtendType'] != 1 || $this->_tpl_vars['item']['role'] == 0 ) && ( $this->_tpl_vars['item']['groupid'] == 1 || $this->_tpl_vars['user_id'] == -1 )): ?><a href="?con=admin&ctl=system/user&act=authorize&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkAuthorize"></a><?php endif; ?></td><?php endif; ?>
					<?php if ($this->_tpl_vars['hideColumn']['user_delete']): ?><td><?php if ($this->_tpl_vars['item']['groupid'] == 1 || $this->_tpl_vars['user_id'] == -1): ?><a href="?con=admin&ctl=system/user&act=delete&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkDelete" onclick="return chkDelete();"></a><?php endif; ?></td><?php endif; ?>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			<tr class="listFtTr">
				<td colspan="9" align="right"><?php echo $this->_tpl_vars['pager']; ?>
</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>