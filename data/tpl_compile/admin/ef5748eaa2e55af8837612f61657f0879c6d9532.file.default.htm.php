<?php /* Smarty version Smarty-3.0.6, created on 2017-07-10 16:15:21
         compiled from "D:/www/mishi/core/common/skin/admin\default.htm" */ ?>
<?php /*%%SmartyHeaderCode:2934259633799049295-33816478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef5748eaa2e55af8837612f61657f0879c6d9532' => 
    array (
      0 => 'D:/www/mishi/core/common/skin/admin\\default.htm',
      1 => 1428634184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2934259633799049295-33816478',
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