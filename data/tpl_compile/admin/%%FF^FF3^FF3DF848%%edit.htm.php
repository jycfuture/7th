<?php /* Smarty version 2.6.26, created on 2012-11-20 10:20:00
         compiled from adv/subscribe/edit.htm */ ?>
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
js/jquery.validate.min.js"></script>
<script type="text/javascript">
$(function(){
	$('#editForm').validate();
});
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=adv/subscribe" class="lnkReturn">Return List</a> 
		</div>
		<form id="editForm" action="?con=admin&ctl=adv/subscribe&act=edit&id=<?php echo $this->_tpl_vars['data']['id']; ?>
" method="post">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Edit e-mail</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Category Name</td>
					<td class="editRtTd">
						<select name="data[classId]">
							<option value="0">--Please choose category--</option>
							<?php $_from = $this->_tpl_vars['classlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
								<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"<?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['data']['classId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">First name *</td>
					<td class="editor"><input name="data[firstName]" value="<?php if ($this->_tpl_vars['form']['firstName']): ?><?php echo $this->_tpl_vars['form']['firstName']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['firstName']; ?>
<?php endif; ?>" type="text" size="50" class="text required" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Last name *</td>
					<td class="editor"><input name="data[lastName]" value="<?php if ($this->_tpl_vars['form']['lastName']): ?><?php echo $this->_tpl_vars['form']['lastName']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['lastName']; ?>
<?php endif; ?>" type="text" size="50" class="text required" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">E-mail *</td>
					<td class="editor"><input name="data[email]" value="<?php if ($this->_tpl_vars['form']['email']): ?><?php echo $this->_tpl_vars['form']['email']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['email']; ?>
<?php endif; ?>" type="text" size="50" class="text required" /></td>
				</tr>

				<tr class="editTr">
					<td class="editLtTd">Company name</td>
					<td class="editor"><input name="data[companyName]" value="<?php if ($this->_tpl_vars['form']['companyName']): ?><?php echo $this->_tpl_vars['form']['companyName']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['companyName']; ?>
<?php endif; ?>" type="text" size="50" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Phone</td>
					<td class="editor"><input name="data[phone]" value="<?php if ($this->_tpl_vars['form']['phone']): ?><?php echo $this->_tpl_vars['form']['phone']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['phone']; ?>
<?php endif; ?>" type="text" size="50" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Mobile</td>
					<td class="editor"><input name="data[mobile]" value="<?php if ($this->_tpl_vars['form']['mobile']): ?><?php echo $this->_tpl_vars['form']['mobile']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['mobile']; ?>
<?php endif; ?>" type="text" size="50" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Address</td>
					<td class="editor"><input name="data[address]" value="<?php if ($this->_tpl_vars['form']['address']): ?><?php echo $this->_tpl_vars['form']['address']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['address']; ?>
<?php endif; ?>" type="text" size="50" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Website</td>
					<td class="editor"><input name="data[website]" value="<?php if ($this->_tpl_vars['form']['website']): ?><?php echo $this->_tpl_vars['form']['website']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['website']; ?>
<?php endif; ?>" type="text" size="50" class="text" /></td>
				</tr>

				<tr class="editTr">
					<td class="editLtTd">Msn</td>
					<td class="editor"><input name="data[msn]" value="<?php if ($this->_tpl_vars['form']['msn']): ?><?php echo $this->_tpl_vars['form']['msn']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['msn']; ?>
<?php endif; ?>" type="text" size="50" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">QQ</td>
					<td class="editor"><input name="data[qq]" value="<?php if ($this->_tpl_vars['form']['qq']): ?><?php echo $this->_tpl_vars['form']['qq']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['qq']; ?>
<?php endif; ?>" type="text" size="50" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Skype</td>
					<td class="editor"><input name="data[skype]" value="<?php if ($this->_tpl_vars['form']['skype']): ?><?php echo $this->_tpl_vars['form']['skype']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['skype']; ?>
<?php endif; ?>" type="text" size="50" class="text" /></td>
				</tr>

				<tr class="editTr">
					<td class="editLtTd">More information for this company</td>
					<td class="editor"><textarea name="data[memo]" class="text" style="width:90%; height:100px;"><?php if ($this->_tpl_vars['form']['memo']): ?><?php echo $this->_tpl_vars['form']['memo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['data']['memo']; ?>
<?php endif; ?></textarea></td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=adv/subscribe" class="lnkReturn">Return List</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>