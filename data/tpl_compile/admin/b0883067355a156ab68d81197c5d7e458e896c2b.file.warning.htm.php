<?php /* Smarty version Smarty-3.0.6, created on 2018-05-03 03:24:32
         compiled from "D:/www/7th/core/common/skin/admin\common/warning.htm" */ ?>
<?php /*%%SmartyHeaderCode:6775aea80f03b1fd7-55016508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0883067355a156ab68d81197c5d7e458e896c2b' => 
    array (
      0 => 'D:/www/7th/core/common/skin/admin\\common/warning.htm',
      1 => 1350318740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6775aea80f03b1fd7-55016508',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('lang')->value->system_prompts;?>
</title>
<style type="text/css">
body { height:30px; line-height:30px; margin:0; padding:0; background-color:#fff; color:#000; font-size:12px; font-family:Arial; }
a { color:#174A7D; }
#container { clear:both; width:500px; margin:100px auto; padding:10px 20px; background:#ffa; border:1px solid #cc9; -moz-box-shadow: 2px 2px 11px #666; -webkit-box-shadow: 2px 2px 11px #666; }
#title { font-weight:bold; }
#content { padding:0 20px; height:60px; }
#url { font-weight:bold; text-align:center; }
</style>
</head>
<body>
<div id="container">
	<div id="title"><?php echo $_smarty_tpl->getVariable('lang')->value->system_prompts;?>
</div>
	<div id="content"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</div>
	<div id="url"><a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->click_here_continue;?>
</a></div>
</div>
</body>
</html>