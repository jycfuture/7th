<?php /* Smarty version Smarty-3.0.6, created on 2017-07-10 17:30:05
         compiled from "D:/www/mishi/core/common/skin/admin\hidden/relation/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:93115963491d2b34d9-47570220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99530d321e9ff319bee600f777b52415ed480bf3' => 
    array (
      0 => 'D:/www/mishi/core/common/skin/admin\\hidden/relation/add.htm',
      1 => 1413799118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93115963491d2b34d9-47570220',
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
js/global.js"></script>
<script type="text/javascript">
function check (form)
{
	var name = document.getElementsByName('data[name]')[0];
	if (name.value == '')
	{
		alert('<?php echo $_smarty_tpl->getVariable('lang')->value->menu_name;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->can_not_empty;?>
');
		name.focus();
		return false;
	}

	return true;
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=hidden/relation" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
		</div>
		<form action="?con=admin&ctl=hidden/relation&act=add&parent_id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->create_menu;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->ordinal;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
</td>
					<td class="editRtTd"><input name="data[ordinal]" value="<?php echo $_smarty_tpl->getVariable('ordinal')->value;?>
" type="text" size="20" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->menu_name;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
</td>
					<td class="editRtTd"><input name="data[name]" value="" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->link_address;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
</td>
					<td class="editRtTd"><input name="data[url]" value="" type="text" size="60" class="text" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->open_method;?>
<?php echo $_smarty_tpl->getVariable('lang')->value->maohao;?>
</td>
					<td class="editRtTd"><input name="data[target]" value="" type="text" size="60" class="text" /></td>
				</tr>
			</table>
			<div class="editBtn clearfix">
				<input type="submit" value="Save" class="lnkSave" /> 
				<a href="?con=admin&ctl=hidden/relation" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
			</div>
		</form>
	</div>
</div>
</body>
</html>