<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 02:54:15
         compiled from "D:/www/ark/core/common/skin/admin\default.htm" */ ?>
<?php /*%%SmartyHeaderCode:83305add4ad7971e69-48017814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '726d31a17fa49a6acd0aaccd56d7e7eec1c2829b' => 
    array (
      0 => 'D:/www/ark/core/common/skin/admin\\default.htm',
      1 => 1428634184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83305add4ad7971e69-48017814',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('lang')->value->website_management_center;?>
</title>
</head>
<frameset rows="140, *" border="0" frameborder="0" framespacing="0">
	<frame name="header" src="?con=admin&ctl=common/header" frameborder="0" scrolling="no" noresize>
	<frameset cols="250, 12,*" name="all" id="all">
		<frame name="left" src="?con=admin&ctl=common/menu" frameborder="0" scrolling="auto" noresize>
		<frame name="middle" src="?con=admin&ctl=common/middle" frameborder="0" scrolling="auto" noresize>
		<frameset rows="*, 60" border="0" frameborder="0" framespacing="0">
			<frame name="main" src="?con=admin&ctl=common/main" frameborder="0" scrolling="auto" noresize>
			<frame name="footer" src="?con=admin&ctl=common/footer" frameborder="0" scrolling="no" noresize>
		</frameset>
	</frameset>
</frameset>
</html>