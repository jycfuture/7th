<?php /* Smarty version Smarty-3.0.6, created on 2018-03-28 00:07:01
         compiled from "D:/www/vstar/core/common/skin/admin\system/role/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:64485abadca5c8c511-42914146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78e4362f8ab95cf9be69bc65d110f004834c942a' => 
    array (
      0 => 'D:/www/vstar/core/common/skin/admin\\system/role/index.htm',
      1 => 1359011306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64485abadca5c8c511-42914146',
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
			<a href="?con=admin&ctl=system/role" class="lnkRefresh"><?php echo $_smarty_tpl->getVariable('lang')->value->refresh;?>
</a>
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['role_add']){?><a href="?con=admin&ctl=system/role&act=add" class="lnkAdd"><?php echo $_smarty_tpl->getVariable('lang')->value->add_role;?>
</a><?php }?>
		</div>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="listTable">
			<tr class="listHdTr">
				<td width="20%"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->system_role_can_not_modify;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->role_name;?>
</em></td>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value->role_description;?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value->system_role;?>
</td>
				<td width="8%"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->see_role_users;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->users;?>
</em></td>
				<?php if ($_smarty_tpl->getVariable('hideColumn')->value['role_authorize']){?><td width="8%"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->system_role_can_not_authorize;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->authorize;?>
</em></td><?php }?>
				<?php if ($_smarty_tpl->getVariable('hideColumn')->value['role_delete']){?><td width="8%"><em class="tip" tips="<?php echo $_smarty_tpl->getVariable('lang')->value->system_role_can_not_delete;?>
"><?php echo $_smarty_tpl->getVariable('lang')->value->delete;?>
</em></td><?php }?>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr<?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?> class="Alternating"<?php }?>>
					<td><?php if ($_smarty_tpl->getVariable('hideColumn')->value['role_edit']&&(!$_smarty_tpl->tpl_vars['item']->value['isSystem']||$_smarty_tpl->getVariable('user_id')->value=='-1')){?><a href="?con=admin&ctl=system/role&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
					<td><?php if ($_smarty_tpl->tpl_vars['item']->value['isSystem']){?><font color="#FF0000"><?php echo $_smarty_tpl->getVariable('lang')->value->yes;?>
</font><?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang')->value->no;?>
<?php }?></td>
					<td><a href="?con=admin&ctl=system/user&role=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkView"></a></td>
					<?php if ($_smarty_tpl->getVariable('hideColumn')->value['role_authorize']){?><td><?php if ($_smarty_tpl->tpl_vars['item']->value['isSystem']&&$_smarty_tpl->getVariable('user_id')->value!='-1'){?><?php }else{ ?><a href="?con=admin&ctl=system/role&act=authorize&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkAuthorize"></a><?php }?></td><?php }?>
					<?php if ($_smarty_tpl->getVariable('hideColumn')->value['role_delete']){?><td><?php if ($_smarty_tpl->tpl_vars['item']->value['isSystem']||$_smarty_tpl->tpl_vars['item']->value['isSuper']){?><?php }else{ ?><a href="?con=admin&ctl=system/role&act=delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();"></a><?php }?></td><?php }?>
				</tr>
			<?php }} ?>
			<tr class="listFtTr">
				<td colspan="6">&nbsp;</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>