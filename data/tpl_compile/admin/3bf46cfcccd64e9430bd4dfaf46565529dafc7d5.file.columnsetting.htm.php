<?php /* Smarty version Smarty-3.0.6, created on 2017-10-16 07:52:39
         compiled from "D:/www/kxmh/core/common/skin/admin\info/class/columnsetting.htm" */ ?>
<?php /*%%SmartyHeaderCode:1917759e46547eca586-39509288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bf46cfcccd64e9430bd4dfaf46565529dafc7d5' => 
    array (
      0 => 'D:/www/kxmh/core/common/skin/admin\\info/class/columnsetting.htm',
      1 => 1413798150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1917759e46547eca586-39509288',
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
js/niewei.js"></script>
<script type="text/javascript">
$(function(){
	$('#sortable li').hover(function(){
		$(this).addClass('Hover');
	}, function(){
		$(this).removeClass('Hover');
	});

	$("#sortable").sortable({
		placeholder : 'ui-state-highlight'
	});
	//$("#sortable").disableSelection();
});
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=info/&class_id=<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
		</div>
		<form action="?con=admin&ctl=info/class&act=columnSetting&id=<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" method="post">
			<table class="listTable">
				<tr class="listHdTr">
					<td align="left"><?php echo $_smarty_tpl->getVariable('lang')->value->whether_display_and_column_name;?>
</td>
				</tr>
				<tr>
					<td class="sortable-box" align="left">
						<ul id="sortable">
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['column_list']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['column_list']['iteration']++;
?>
								<li<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['column_list']['iteration']%2==0){?> class="Alternating"<?php }?>>
									<input name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
[show]" value="1" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['item']->value['show']){?> checked<?php }?> /> <input name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
[name]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" type="text" size="20" class="text" />
								</li>
							<?php }} ?>
						</ul>
					</td>
				</tr>
			</table>
			<div class="editBtn clearfix">
				<input type="submit" value="Save" class="lnkSave" /> 
				<a href="?con=admin&ctl=info/&class_id=<?php echo $_smarty_tpl->getVariable('class_id')->value;?>
&noback=<?php echo $_smarty_tpl->getVariable('noback')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
			</div>
		</form>
	</div>
</div>
</body>
</html>