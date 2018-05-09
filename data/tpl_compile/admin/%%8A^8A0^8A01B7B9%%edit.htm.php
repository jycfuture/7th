<?php /* Smarty version 2.6.26, created on 2012-11-19 19:45:58
         compiled from adv/subscribeclass/edit.htm */ ?>
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
	var title = document.getElementsByName('data[name]')[0];
	if (title.value == '')
	{
		alert('Category Name Can Not Empty!');
		title.focus();
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
			<a href="?con=admin&ctl=adv/subscribeclass" class="lnkReturn">Return List</a> 
		</div>
		<form action="?con=admin&ctl=adv/subscribeclass&act=edit&id=<?php echo $this->_tpl_vars['data']['id']; ?>
" method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Edit Category</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Category Name</td>
					<td class="editRtTd"><input name="data[name]" value="<?php echo $this->_tpl_vars['data']['name']; ?>
" type="text" size="50" class="text" /></td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=adv/subscribeclass" class="lnkReturn">Return List</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>