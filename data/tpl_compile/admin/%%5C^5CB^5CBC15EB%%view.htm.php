<?php /* Smarty version 2.6.26, created on 2012-11-20 10:16:11
         compiled from adv/subscribe/view.htm */ ?>
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
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=adv/subscribe" class="lnkReturn">Return List</a> 
			<a href="?con=admin&ctl=adv/subscribe&act=edit&id=<?php echo $this->_tpl_vars['data']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/ico-list-edit.gif" alt="Edit" style="vertical-align:middle;" /> Edit</a> 
		</div>
		<form id="editForm" method="post">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">E-mail details</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Category Name</td>
					<td class="editRtTd"><?php echo $this->_tpl_vars['data']['category_name']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">First name *</td>
					<td class="editor"><?php echo $this->_tpl_vars['data']['firstName']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Last name *</td>
					<td class="editor"><?php echo $this->_tpl_vars['data']['lastName']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">E-mail *</td>
					<td class="editor"><?php if ($this->_tpl_vars['data']['email']): ?><?php echo $this->_tpl_vars['data']['email']; ?>
 &nbsp; <a href="?con=admin&ctl=adv/subscribe&act=sendone&email=<?php echo $this->_tpl_vars['data']['email']; ?>
">Send email to him/her</a><?php endif; ?></td>
				</tr>

				<tr class="editTr">
					<td class="editLtTd">Company name</td>
					<td class="editor"><?php echo $this->_tpl_vars['data']['companyName']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Phone</td>
					<td class="editor"><?php echo $this->_tpl_vars['data']['phone']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Mobile</td>
					<td class="editor"><?php echo $this->_tpl_vars['data']['mobile']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Address</td>
					<td class="editor"><?php echo $this->_tpl_vars['data']['address']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Website</td>
					<td class="editor"><?php if ($this->_tpl_vars['data']['website']): ?><a href="<?php echo $this->_tpl_vars['data']['website']; ?>
" target="_blank"><?php echo $this->_tpl_vars['data']['website']; ?>
</a><?php endif; ?></td>
				</tr>

				<tr class="editTr">
					<td class="editLtTd">Msn</td>
					<td class="editor"><?php echo $this->_tpl_vars['data']['msn']; ?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">QQ</td>
					<td class="editor"><?php if ($this->_tpl_vars['data']['qq']): ?><?php echo $this->_tpl_vars['data']['qq']; ?>
 &nbsp; <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_tpl_vars['data']['qq']; ?>
&site=qq&menu=yes" target="_blank">Click here to chat via QQ</a><?php endif; ?></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Skype</td>
					<td class="editor"><?php echo $this->_tpl_vars['data']['skype']; ?>
</td>
				</tr>

				<tr class="editTr">
					<td class="editLtTd">More information for this company</td>
					<td class="editor"><?php echo $this->_tpl_vars['data']['memo']; ?>
</td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<a href="?con=admin&ctl=adv/subscribe" class="lnkReturn">Return List</a> 
						<a href="?con=admin&ctl=adv/subscribe&act=edit&id=<?php echo $this->_tpl_vars['data']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/ico-list-edit.gif" alt="Edit" style="vertical-align:middle;" /> Edit</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>