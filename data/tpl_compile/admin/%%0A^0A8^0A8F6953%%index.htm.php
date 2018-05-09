<?php /* Smarty version 2.6.26, created on 2012-11-20 10:16:05
         compiled from adv/subscribeclass/index.htm */ ?>
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
	if (window.confirm('You sure you want to delete the selected records?')) $('#listForm').attr('action', '?con=admin&ctl=adv/subscribeclass&act=delete').submit();
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
			<a href="?con=admin&ctl=adv/subscribeclass" class="lnkRefresh">Refresh</a>
			<a onclick="DeleteSome();" class="lnkDeleteSome">Delete</a>
			<a href="?con=admin&ctl=adv/subscribeclass&act=add" class="lnkAdd">Create</a>
		</div>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="listTable">
			<tr class="listHdTr">
				<td width="40"><input type="checkbox" id="checkAll" /></td>
				<td>ID</td>
				<td>Category Name</td>
				<td>Send mail</td>
				<td width="8%">Delete</td>
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
					<td><a href="?con=admin&ctl=adv/subscribeclass&act=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a></td>
					<td><a href="?con=admin&ctl=adv/subscribe&act=send&classId=<?php echo $this->_tpl_vars['item']['id']; ?>
">Send mail</a></td>
					<td><a href="?con=admin&ctl=adv/subscribeclass&act=delete&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkDelete" onclick="return chkDelete();"></a></td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			</form>
			<tr class="listFtTr">
				<td colspan="11"><?php echo $this->_tpl_vars['pager']; ?>
</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>