<?php /* Smarty version Smarty-3.0.6, created on 2015-04-10 10:43:54
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\common/header.htm" */ ?>
<?php /*%%SmartyHeaderCode:4865552738ea001b16-42784863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27e199a0cc707b52e0c425a1b81be6f44f39fa42' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\common/header.htm',
      1 => 1422871361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4865552738ea001b16-42784863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/header.css">
</head>

<body>
<div class="header">
	<div class="inhead clearfix">
		<h1 class="logo"><a href="javascript:;"><?php echo $_smarty_tpl->getVariable('lang')->value->website_management_center;?>
</a><em class="ver"><?php echo $_smarty_tpl->getVariable('CMS_VERS')->value;?>
</em></h1>
		<?php if ($_smarty_tpl->getVariable('langs_count')->value>1){?>
		<div class="lang-set">
			<!--span><?php echo $_smarty_tpl->getVariable('lang')->value->select_lang;?>
: </span-->
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('langs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<a<?php if ($_smarty_tpl->getVariable('admin_lang')->value==$_smarty_tpl->tpl_vars['item']->value['id']){?> class="current" href="javascript:;" style="cursor:default;"<?php }else{ ?> href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
?con=admin&ctl=default&admin_lang=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" target="_parent"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
			<?php }} ?>
		</div>
		<?php }?>
	</div>
	<div class="set clearfix">
		<div class="breadcrumbs"><?php echo $_smarty_tpl->getVariable('admin_name')->value;?>
</div>
		<ul class="quick-menu clearfix">
			<li class="nobg"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('lang')->value->home;?>
</a></li>
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['user_changepass']){?><li><a href="?con=admin&ctl=system/user&act=changepass" target="main"><?php echo $_smarty_tpl->getVariable('lang')->value->change_password;?>
</a></li><?php }?>
			<li class="exit"><a href="?con=admin&ctl=common/login&act=logout"><?php echo $_smarty_tpl->getVariable('lang')->value->exit_system;?>
</a></li>
		</ul>
	</div>
</div>
</body>
</html>
