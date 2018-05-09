<?php /* Smarty version Smarty-3.0.6, created on 2017-10-16 10:00:10
         compiled from "D:/www/kxmh/core/common/skin/admin\info/index/preview.htm" */ ?>
<?php /*%%SmartyHeaderCode:2251559e4832a644341-79145473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b1094594a4203dc1ac23fb1c3868b16be881ef8' => 
    array (
      0 => 'D:/www/kxmh/core/common/skin/admin\\info/index/preview.htm',
      1 => 1359010044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2251559e4832a644341-79145473',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_smarty_tpl->getVariable('data')->value['pageTitle'];?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->getVariable('data')->value['keywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->getVariable('data')->value['description'];?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/preview.css">
</head>

<body>
<div class="artbox">
	<h1 style="<?php echo $_smarty_tpl->getVariable('data')->value['titleStyle'];?>
"><?php echo $_smarty_tpl->getVariable('data')->value['title'];?>
</h1>
	<div class="info"><?php echo $_smarty_tpl->getVariable('data')->value['publishedDate'];?>
 <?php echo $_smarty_tpl->getVariable('lang')->value->author;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
 <?php echo $_smarty_tpl->getVariable('data')->value['author'];?>
 &nbsp; <?php echo $_smarty_tpl->getVariable('lang')->value->source;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
 <?php echo $_smarty_tpl->getVariable('data')->value['source'];?>
 &nbsp; <?php echo $_smarty_tpl->getVariable('lang')->value->hits;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
 <?php echo $_smarty_tpl->getVariable('data')->value['hits'];?>
</div>
</div>
<div class="article" id="article">
	<?php echo $_smarty_tpl->getVariable('data')->value['content'];?>

</div>
</body>
</html>