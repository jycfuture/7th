<?php /* Smarty version 2.6.26, created on 2012-11-20 10:03:18
         compiled from adv/subscribe/send.htm */ ?>
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
<script src="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
/editor/ckeditor/ckeditor.js"></script>
<script>
$(function(){
	CKEDITOR.replace('mail_content', {
		height : 350,
		filebrowserImageUploadUrl : '?con=admin&ctl=editor&act=pic'
	});
});
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=adv/subscribe" class="lnkReturn">Back to list</a> 
		</div>
		<form action="?con=admin&ctl=adv/subscribe&act=send" method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Send Mail</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Choose category : </td>
					<td class="editor">
						<select onchange="window.location.href = '?con=admin&ctl=adv/subscribe&act=send&classId=' + this.value;">
							<option value="0">--Choose a category--</option>
							<?php $_from = $this->_tpl_vars['classlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
								<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"<?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['classId']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
							<?php endforeach; endif; unset($_from); ?>
							<option value="-1"<?php if ($this->_tpl_vars['classId'] == -1): ?> selected<?php endif; ?>>--Send all--</option>
						</select>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Mail Address : </td>
					<td class="editor">
						<textarea name="mail_addr" rows="10" cols="100"><?php echo $this->_tpl_vars['mail_addr']; ?>
<?php $_from = $this->_tpl_vars['mails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>; <?php echo $this->_tpl_vars['item']['email']; ?>
<?php endforeach; endif; unset($_from); ?></textarea>
						<p>E-mail address; (semicolon + space) separated</p>
						<p>The first e-mail address for the system mail, bulk mail will also send an email to the system, for easy viewing message content</p>
						<p>The system will automatically filter duplicate email address</p>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Exclude mail : </td>
					<td class="editor">
						<?php $_from = $this->_tpl_vars['mails']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
							<input type="checkbox" name="exclude_mails[]" value="<?php echo $this->_tpl_vars['item']['email']; ?>
" id="em_<?php echo $this->_tpl_vars['key']; ?>
" /><label for="em_<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['item']['email']; ?>
</label> &nbsp;
						<?php endforeach; endif; unset($_from); ?>
						<p>Does not send a message to the selected mailbox.</p>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Mail Content : </td>
					<td class="editor">
						<textarea name="mail_content" id="mail_content" rows="10" cols="100"></textarea>
					</td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=adv/subscribe" class="lnkReturn">Back to list</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>