<?php /* Smarty version 2.6.26, created on 2012-11-22 11:22:23
         compiled from hidden/relation/index.htm */ ?>
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
			<a href="?con=admin&ctl=hidden/relation" class="lnkRefresh">Refresh the list</a>
			<a href="?con=admin&ctl=hidden/relation&act=add&parent_id=" class="lnkAdd">To increase the top-level menu</a>
		</div>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="listTable">
			<tr class="listHdTr">
				<td width="8%"><em class="help"><a href="#">Ordinal</a></em></td>
				<td>Menu name</td>
				<td width="15%">Increase the sub-menu</td>
				<td width="8%">Delete</td>
			</tr>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<tr<?php if ($this->_tpl_vars['key'] % 2 == 0): ?> class="Alternating"<?php endif; ?>>
					<td><a href="#" class="listArrow" style="display:block;"><?php echo $this->_tpl_vars['item']['sortnum']; ?>
</a></td>
					<td align="left"><a href="?con=admin&ctl=hidden/relation&act=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
"<?php if ($this->_tpl_vars['item']['level'] > 0): ?> class="lnkSubCategory" style="margin-left:<?php echo $this->_tpl_vars['item']['level']*30; ?>
px;"<?php endif; ?>><?php echo $this->_tpl_vars['item']['name']; ?>
</a></td>
					<td><?php if ($this->_tpl_vars['item']['level'] == 0): ?><a href="?con=admin&ctl=hidden/relation&act=add&parent_id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkAdd"></a><?php endif; ?></td>
					<td><a href="?con=admin&ctl=hidden/relation&act=delete&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkDelete" onclick="return chkDelete();"></a></td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			<tr class="listFtTr">
				<td colspan="7">&nbsp;</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>