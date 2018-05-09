<?php /* Smarty version 2.6.26, created on 2012-11-20 10:19:27
         compiled from adv/subscribe/sendone.htm */ ?>
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
		<form action="?con=admin&ctl=adv/subscribe&act=sendone" method="post">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Send Mail</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Mail Address : </td>
					<td class="editor"><input name="mail_addr" value="<?php echo $this->_tpl_vars['mail_addr']; ?>
" type="text" size="50" class="text" /></td>
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