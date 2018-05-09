<?php /* Smarty version Smarty-3.0.6, created on 2018-05-03 03:25:06
         compiled from "D:/www/7th/core/common/skin/admin\hidden/relation/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:282035aea8112369806-18311344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2527d9d2ab677990b924a67d09cd8ce1b95d2895' => 
    array (
      0 => 'D:/www/7th/core/common/skin/admin\\hidden/relation/index.htm',
      1 => 1413799156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282035aea8112369806-18311344',
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
images/main.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
js/global.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
js/list.js"></script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=hidden/relation" class="lnkRefresh"><?php echo $_smarty_tpl->getVariable('lang')->value->refresh;?>
</a>
			<a href="?con=admin&ctl=hidden/relation&act=add&parent_id=" class="lnkAdd"><?php echo $_smarty_tpl->getVariable('lang')->value->create_top_level_menu;?>
</a>
		</div>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="listTable">
			<tr class="listHdTr">
				<td width="8%"><em class="help"><a href="#"><?php echo $_smarty_tpl->getVariable('lang')->value->ordinal;?>
</a></em></td>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value->menu_name;?>
</td>
				<td width="15%"><?php echo $_smarty_tpl->getVariable('lang')->value->create_sub_menu;?>
</td>
				<td width="8%"><?php echo $_smarty_tpl->getVariable('lang')->value->delete;?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr<?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?> class="Alternating"<?php }?>>
					<td><a href="#" class="listArrow" style="display:block;"><?php echo $_smarty_tpl->tpl_vars['item']->value['sortnum'];?>
</a></td>
					<td align="left"><a href="?con=admin&ctl=hidden/relation&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['level']>0){?> class="lnkSubCategory" style="margin-left:<?php echo $_smarty_tpl->tpl_vars['item']->value['level']*30;?>
px;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['level']==0){?><a href="?con=admin&ctl=hidden/relation&act=add&parent_id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkAdd"></a><?php }?></td>
					<td><a href="?con=admin&ctl=hidden/relation&act=delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();"></a></td>
				</tr>
			<?php }} ?>
			<tr class="listFtTr">
				<td colspan="7">&nbsp;</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>