<?php /* Smarty version 2.6.26, created on 2012-11-22 11:21:10
         compiled from hidden/relation/add.htm */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/main.css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/global.js"></script>
<script type="text/javascript">
function check (form)
{
	var name = document.getElementsByName('data[name]')[0];
	if (name.value == '')
	{
		alert('The menu name can not be empty!');
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
			<a href="?con=admin&ctl=hidden/relation" class="lnkReturn">Return to list</a> 
		</div>
		<form action="?con=admin&ctl=hidden/relation&act=add&parent_id=<?php echo $this->_tpl_vars['data']['id']; ?>
" method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Add menu</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Index:</td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $this->_tpl_vars['ordinal']; ?>
" type="text" size="20" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Name:</td>
					<td class="editRtTd"><input name="data[name]" value="" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Link address:</td>
					<td class="editRtTd"><input name="data[url]" value="" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=hidden/relation" class="lnkReturn">Return to list</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>