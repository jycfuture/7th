<?php /* Smarty version 2.6.26, created on 2012-11-22 11:21:57
         compiled from common/main.htm */ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/main.css">
</head>

<body>
<div class="wrap clearfix">
	<div class="container">
		<div>
			<ul class="msg">
				<li class="time"><?php echo $this->_tpl_vars['time']; ?>
</li>
				<li class="name"><?php echo $this->_tpl_vars['user']['displayName']; ?>
</li>
				<li><?php echo $this->_tpl_vars['lang']->welcome_management; ?>
</li>
			</ul>
		</div>
		<div class="grid-m0s330 layout">
			<div class="col-main">
				<div class="main-wrap">
					<div class="statistics box-skin-blue">
						<div class="hd">
							<h4><?php echo $this->_tpl_vars['lang']->statistics; ?>
</h4>
						</div>
						<div class="bd clearfix">
							<div class="column">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sub">
				<div class="information box-skin-blue">
					<div class="hd">
						<h4><?php echo $this->_tpl_vars['lang']->your_nformation; ?>
</h4>
					</div>
					<div class="bd">
						<ul class="info-list">
							<li><span><?php echo $this->_tpl_vars['lang']->user_name; ?>
:</span><?php echo $this->_tpl_vars['user']['name']; ?>
</li>
							<li><span><?php echo $this->_tpl_vars['lang']->ip; ?>
:</span><?php echo $this->_tpl_vars['user']['lastLoginIP']; ?>
</li>
							<li><span><?php echo $this->_tpl_vars['lang']->login_count; ?>
:</span><?php echo $this->_tpl_vars['user']['loginCount']; ?>
</li>
							<li><span><?php echo $this->_tpl_vars['lang']->last_login_time; ?>
:</span><?php echo $this->_tpl_vars['user']['lastLoginDate']; ?>
</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>