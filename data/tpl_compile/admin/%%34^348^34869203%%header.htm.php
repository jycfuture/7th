<?php /* Smarty version 2.6.26, created on 2012-11-22 11:21:56
         compiled from common/header.htm */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/header.css">
</head>

<body>
<div class="header">
	<div class="inhead clearfix">
		<h1 class="logo"><a href="javascript:;">Site Admin Center</a><em class="ver"><?php echo $this->_tpl_vars['CMS_VERS']; ?>
</em></h1>
		<div class="set clearfix">
			<div class="breadcrumbs"><?php echo $this->_tpl_vars['admin_name']; ?>
</div>
			<ul class="quick-menu clearfix">
				<li class="nobg"><a href="<?php echo $this->_tpl_vars['http_root_www']; ?>
" target="_blank"><?php echo $this->_tpl_vars['lang']->home; ?>
</a></li>
				<?php if ($this->_tpl_vars['hideColumn']['user_changepass']): ?><li><a href="?con=admin&ctl=system/user&act=changepass" target="main"><?php echo $this->_tpl_vars['lang']->change_password; ?>
</a></li><?php endif; ?>
				<li class="exit"><a href="?con=admin&ctl=common/login&act=logout"><?php echo $this->_tpl_vars['lang']->exit_system; ?>
</a></li>
			</ul>
			<?php if ($this->_tpl_vars['langs_count'] > 1): ?>
			<div class="lang-set">
				<span>Select Language: </span>
				<?php $_from = $this->_tpl_vars['langs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<a href="<?php echo $this->_tpl_vars['http_root_www']; ?>
?con=admin&ctl=default&admin_lang=<?php echo $this->_tpl_vars['item']['id']; ?>
"<?php if ($this->_tpl_vars['admin_lang'] == $this->_tpl_vars['item']['id']): ?> class="current"<?php endif; ?> target="_parent"><?php echo $this->_tpl_vars['item']['name']; ?>
</a> |
				<?php endforeach; endif; unset($_from); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
</body>
</html>