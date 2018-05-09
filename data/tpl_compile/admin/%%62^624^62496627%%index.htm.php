<?php /* Smarty version 2.6.26, created on 2012-04-04 22:08:14
         compiled from system/role/index.htm */ ?>
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
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=system/role" class="lnkRefresh">Refresh the list</a>
			<?php if ($this->_tpl_vars['hideColumn']['role_add']): ?><a href="?con=admin&ctl=system/role&act=add" class="lnkAdd">Increase the role</a><?php endif; ?>
		</div>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="listTable">
			<tr class="listHdTr">
				<td width="20%"><em class="tip" tips="System roles can not be modified">Role name</em></td>
				<td>Role description</td>
				<td><em class="tip" tips="The system is the role of the role of the embedded system, mainly used to initialize the other roles">System role</em></td>
				<td width="8%"><em class="tip" tips="See all users in that role">User</em></td>
				<?php if ($this->_tpl_vars['hideColumn']['role_authorize']): ?><td width="8%"><em class="tip" tips="System roles can not be authorized">Authorize</em></td><?php endif; ?>
				<?php if ($this->_tpl_vars['hideColumn']['role_delete']): ?><td width="8%"><em class="tip" tips="System roles can not be deleted">Delete</em></td><?php endif; ?>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<tr<?php if ($this->_tpl_vars['key'] % 2 == 0): ?> class="Alternating"<?php endif; ?>>
					<td><?php if ($this->_tpl_vars['hideColumn']['role_edit'] && ( ! $this->_tpl_vars['item']['isSystem'] || $this->_tpl_vars['user_id'] == '-1' )): ?><a href="?con=admin&ctl=system/role&act=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php endif; ?></td>
					<td><?php echo $this->_tpl_vars['item']['description']; ?>
</td>
					<td><?php if ($this->_tpl_vars['item']['isSystem']): ?><font color="#FF0000">Yes</font><?php else: ?>No<?php endif; ?></td>
					<td><a href="?con=admin&ctl=system/user&role=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkView"></a></td>
					<?php if ($this->_tpl_vars['hideColumn']['role_authorize']): ?><td><?php if ($this->_tpl_vars['item']['isSystem'] && $this->_tpl_vars['user_id'] != '-1'): ?><?php else: ?><a href="?con=admin&ctl=system/role&act=authorize&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkAuthorize"></a><?php endif; ?></td><?php endif; ?>
					<?php if ($this->_tpl_vars['hideColumn']['role_delete']): ?><td><?php if ($this->_tpl_vars['item']['isSystem'] || $this->_tpl_vars['item']['isSuper']): ?><?php else: ?><a href="?con=admin&ctl=system/role&act=delete&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkDelete" onclick="return chkDelete();"></a><?php endif; ?></td><?php endif; ?>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			<tr class="listFtTr">
				<td colspan="6">&nbsp;</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>