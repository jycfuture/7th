<?php /* Smarty version 2.6.26, created on 2012-04-04 22:10:01
         compiled from system/role/add.htm */ ?>
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
	var name = document.getElementsByName('data[name]')[0];
	if (name.value == '')
	{
		alert('The role name can not be empty!');
		name.focus();
		return false;
	}

	return true;
}

function chgDescription (obj)
{
	$('#roleDescription > p').hide();
	$('#roleDescription > p').eq(obj.selectedIndex - 1).show();
}
</script>
<style>
#roleDescription p { display:none; padding:5px; }
</style>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=system/role" class="lnkReturn">Return to list</a> 
		</div>
		<form action="?con=admin&ctl=system/role&act=add" method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Add Role</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Name:</td>
					<td class="editRtTd"><input name="data[name]" value="" type="text" size="30" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Role Description:</td>
					<td class="editRtTd"><input name="data[description]" value="" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Copy permissions from other roles to improve the efficiency of the allocation of privileges">Copying permissions from</em></td>
					<td class="editRtTd">
						<select name="extendBy" onchange="chgDescription(this)">
							<option>--Copy the permissions from the following roles--</option>
							<?php $_from = $this->_tpl_vars['extendBy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
								<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select> 
						Note: select copy permissions from other roles, the permissions of the current role will be overwritten!
						<div id="roleDescription">
							<?php $_from = $this->_tpl_vars['extendBy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?><p>Description: <?php echo $this->_tpl_vars['item']['description']; ?>
</p><?php endforeach; endif; unset($_from); ?>
						</div>
					</td>
				</tr>
				<?php if ($this->_tpl_vars['user_id'] == -1): ?>
				<tr class="editTr">
					<td class="editLtTd">Hide Settings</td>
					<td class="editRtTd">
						<input type="checkbox" id="chkSystem" name="data[isSystem]" value="1" /><label for="chkSystem">System role</label> 
						<input type="checkbox" id="chkSuper" name="data[isSuper]" value="1" /><label for="chkSuper">Super role</label>
					</td>
				</tr>
				<?php endif; ?>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=system/role" class="lnkReturn">Return to list</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>