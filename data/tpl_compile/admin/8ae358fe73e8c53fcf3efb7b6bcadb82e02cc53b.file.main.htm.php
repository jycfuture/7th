<?php /* Smarty version Smarty-3.0.6, created on 2015-04-10 10:43:54
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\common/main.htm" */ ?>
<?php /*%%SmartyHeaderCode:24106552738ea5f33d0-32344624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae358fe73e8c53fcf3efb7b6bcadb82e02cc53b' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\common/main.htm',
      1 => 1413815950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24106552738ea5f33d0-32344624',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/main.css">
</head>

<body>
<div class="wrap clearfix">
	<div class="container">
		<div>
			<ul class="msg clearfix">
				<li class="adminFace"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/admin_face.png" width="84" height="84" alt="admin face" /></li>
				<li class="name"><em><?php echo $_smarty_tpl->getVariable('user')->value['displayName'];?>
</em>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value->welcome_management;?>
</li>
				<li class="time"><?php echo $_smarty_tpl->getVariable('time')->value;?>
</li>
				<li></li>
			</ul>
		</div>
		<div class="grid-m0s330 layout">
			<div class="col-main">
				<div class="main-wrap">
					<div class="statistics box-skin-blue">
						<div class="hd">
							<h4><?php echo $_smarty_tpl->getVariable('lang')->value->statistics;?>
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
						<h4><?php echo $_smarty_tpl->getVariable('lang')->value->your_nformation;?>
</h4>
					</div>
					<div class="bd">
						<ul class="info-list">
							<li class="clearfix"><span><?php echo $_smarty_tpl->getVariable('lang')->value->user_name;?>
:</span>admin<?php echo $_smarty_tpl->getVariable('user')->value['name'];?>
</li>
							<li class="clearfix"><span><?php echo $_smarty_tpl->getVariable('lang')->value->ip;?>
:</span><?php echo $_smarty_tpl->getVariable('user')->value['lastLoginIP'];?>
</li>
							<li class="clearfix"><span><?php echo $_smarty_tpl->getVariable('lang')->value->login_count;?>
:</span><?php echo $_smarty_tpl->getVariable('user')->value['loginCount'];?>
</li>
							<li class="clearfix"><span><?php echo $_smarty_tpl->getVariable('lang')->value->last_login_time;?>
:</span><?php echo $_smarty_tpl->getVariable('user')->value['lastLoginDate'];?>
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