<?php /* Smarty version 2.6.26, created on 2012-11-22 11:21:56
         compiled from common/menu.htm */ ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/menu.css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/menu.js"></script>
</head>

<body>
<div id="menu-area">
	<div id="menu">
		<dl>
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<?php if (! $this->_tpl_vars['item']['hide']): ?>
					<dt><?php if ($this->_tpl_vars['item']['url']): ?><a href="<?php echo $this->_tpl_vars['item']['url']; ?>
" target="main"><?php else: ?><a href="#"><?php endif; ?><span><?php echo $this->_tpl_vars['item']['name']; ?>
</span></a></dt>
					<?php if ($this->_tpl_vars['item']['childCount'] > 0): ?>
						<dd style="display:none;">
							<ul class="third-menu">
								<?php $_from = $this->_tpl_vars['item']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subkey'] => $this->_tpl_vars['sub']):
?>
									<?php if (! $this->_tpl_vars['sub']['hide']): ?>
										<li><a href="<?php echo $this->_tpl_vars['sub']['url']; ?>
" target="main"><?php echo $this->_tpl_vars['sub']['name']; ?>
</a></li>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							</ul>
						</dd>
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</dl>
	</div>
</div>
</body>
</html>