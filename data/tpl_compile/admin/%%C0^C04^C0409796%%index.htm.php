<?php /* Smarty version 2.6.26, created on 2012-11-20 10:20:04
         compiled from adv/subscribe/index.htm */ ?>
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
<script>
function searchSubmit ()
{
	var classId		= document.getElementsByName('classId')[0].value;
	var fullname	= document.getElementsByName('fullname')[0].value;
	var companyname	= document.getElementsByName('companyname')[0].value;
	window.location.href = '?con=admin&ctl=adv/subscribe&classId=' + classId + '&fullname=' + encodeURI(fullname) + '&companyname=' + encodeURI(companyname);
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
function DeleteSome ()  //批量删除
{
	if (countSelect() <= 0)
	{
		alert('Please select the batch processing of records!');
		return false;
	}
	if (window.confirm('You sure you want to delete the selected records?')) $('#listForm').attr('action', '?con=admin&ctl=adv/subscribe&act=delete').submit();
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
			<a href="?con=admin&ctl=adv/subscribe" class="lnkRefresh">Refresh</a>
			<a onclick="DeleteSome();" class="lnkDeleteSome">Delete</a>
			<a href="?con=admin&ctl=adv/subscribe&act=add" class="lnkAdd">Create</a>
			<a href="?con=admin&ctl=adv/subscribe&act=send" class="lnkRefresh">SendMail</a>
		</div>
		<div class="search">
			<select onchange="searchSubmit();" name="classId">
				<option value="0">Select a category</option>
				<?php $_from = $this->_tpl_vars['classList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"<?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['search']['classId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
			<input type="text" style="width:200px;" maxlength="200" name="fullname" value="<?php echo $this->_tpl_vars['search']['fullname']; ?>
" />
			<input type="text" style="width:200px;" maxlength="200" name="companyname" value="<?php echo $this->_tpl_vars['search']['companyname']; ?>
" />
			<a onclick="searchSubmit()" class="lnkSearch">Search</a>
		</div>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="listTable">
			<tr class="listHdTr">
				<td width="40"><input type="checkbox" id="checkAll" /></td>
				<td>ID</td>
				<td>Category</td>
				<td>Full name</td>
				<td>Company name</td>
				<td>Email</td>
				<td>Phone</td>
				<td>Mobile</td>
				<td>Create time</td>
				<td width="5%">Send</td>
				<td width="5%">Edit</td>
				<td width="5%">Delete</td>
			</tr>
			<form id="listForm" name="listForm" action="" method="post">
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<tr<?php if ($this->_tpl_vars['key'] % 2 == 0): ?> class="Alternating"<?php endif; ?>>
					<td><input type="checkbox" name="ids[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" class="listChk" /></td>
					<td><?php echo $this->_tpl_vars['item']['id']; ?>
</td>
					<td><?php echo $this->_tpl_vars['item']['category_name']; ?>
</td>
					<td><a href="?con=admin&ctl=adv/subscribe&act=view&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['firstName']; ?>
 <?php echo $this->_tpl_vars['item']['lastName']; ?>
</a></td>
					<td><a href="?con=admin&ctl=adv/subscribe&act=view&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['companyName']; ?>
</a></td>
					<td><a href="?con=admin&ctl=adv/subscribe&act=view&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['email']; ?>
</a></td>
					<td><a href="?con=admin&ctl=adv/subscribe&act=view&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['phone']; ?>
</a></td>
					<td><a href="?con=admin&ctl=adv/subscribe&act=view&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['mobile']; ?>
</a></td>
					<td><?php echo $this->_tpl_vars['item']['submit_time']; ?>
</td>
					<td><a href="?con=admin&ctl=adv/subscribe&act=sendone&email=<?php echo $this->_tpl_vars['item']['email']; ?>
"><img src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/ico-list-mail.png" alt="Send email to him/her" style="vertical-align:middle;" /></a></td>
					<td><a href="?con=admin&ctl=adv/subscribe&act=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/ico-list-edit.gif" alt="Edit" style="vertical-align:middle;" /></a></td>
					<td><a href="?con=admin&ctl=adv/subscribe&act=delete&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkDelete" onclick="return chkDelete();"></a></td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			</form>
			<tr class="listFtTr">
				<td colspan="12"><?php echo $this->_tpl_vars['pager']; ?>
</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>