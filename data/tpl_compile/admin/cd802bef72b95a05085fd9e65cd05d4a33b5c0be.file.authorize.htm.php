<?php /* Smarty version Smarty-3.0.6, created on 2018-03-28 00:07:03
         compiled from "D:/www/vstar/core/common/skin/admin\system/role/authorize.htm" */ ?>
<?php /*%%SmartyHeaderCode:24735abadca7c26759-69685748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd802bef72b95a05085fd9e65cd05d4a33b5c0be' => 
    array (
      0 => 'D:/www/vstar/core/common/skin/admin\\system/role/authorize.htm',
      1 => 1413798736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24735abadca7c26759-69685748',
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
<script>
$(function(){
	$('.selectRow').click(function(){
		if ($(this).attr('value') == 'on')
		{
			$(this).parent().parent().find('input').attr('checked', $(this).attr('checked'));
		}
		else
		{
			$(this).parent().parent().find('input[custom="'+ $(this).attr('value') +'"]').attr('checked', $(this).attr('checked'));
		}
	});
	$('.selectCurrentRow').click(function(){
		$(this).parent().parent().find('input').not($(this)).attr('disabled', $(this).attr('checked') ? 'true' : '').attr('checked', $(this).attr('checked'));
	});
	$('.toggleRow a').click(function(){
		$(this).parent().next().toggle();
	});
});
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=system/role" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
		</div>
		<table class="tabTable" id="tableTab">
			<tr>
				<td><a class="current" href="#"><?php echo $_smarty_tpl->getVariable('lang')->value->admin_menu_permission;?>
</a></td>
				<td id="tdInfoClass2"><a href="#"><?php echo $_smarty_tpl->getVariable('lang')->value->category_permission_exclude;?>
</a></td>
				<td id="tdAction"><a href="#"><?php echo $_smarty_tpl->getVariable('lang')->value->action_permission;?>
</a></td>
			</tr>
		</table>
		<form action="?con=admin&ctl=system/role&act=authorize&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" method="post">
			<div id="panes">
				<table class="editTable">
					<tr class="editHdTr">
						<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->admin_menu_permission;?>
</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->role_name;?>
</td>
						<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
</td>
					</tr>
					<?php if ($_smarty_tpl->getVariable('relation')->value){?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('relation')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr class="editTr">
							<td class="editLtTd"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
							<td class="editRtTd">
								<?php if ($_smarty_tpl->tpl_vars['item']->value['child']){?>
									<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['subkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value){
 $_smarty_tpl->tpl_vars['subkey']->value = $_smarty_tpl->tpl_vars['sub']->key;
?>
										<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['subkey']->value;?>
" name="relation[]" value="<?php echo $_smarty_tpl->tpl_vars['subkey']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['sub']->value['istrue']){?> checked<?php }?> /><label for="<?php echo $_smarty_tpl->tpl_vars['subkey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</label>
									<?php }} ?>
								<?php }else{ ?>
									<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="relation[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['istrue']){?> checked<?php }?> /><label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</label>
								<?php }?>
							</td>
						</tr>
					<?php }} ?>
					<?php }?>
				</table>
				<table class="editTable" style="display:none;">
					<tr class="editHdTr">
						<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->category_permission_exclude;?>
</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->role_name;?>
</td>
						<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
</td>
					</tr>
					<tr class="editTr">
						<td class="editor" colspan="2">
							<?php if ($_smarty_tpl->getVariable('infoClass')->value){?>
								<p>
									<input type="checkbox" id="checkAll" class="selectRow" /><label for="checkAll"><?php echo $_smarty_tpl->getVariable('lang')->value->select_all;?>
</label>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('infoAction')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
										<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['subkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['value'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value){
 $_smarty_tpl->tpl_vars['subkey']->value = $_smarty_tpl->tpl_vars['sub']->key;
?>
											<input type="checkbox" id="checkAll/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sub']->value;?>
" class="selectRow" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sub']->value;?>
" /><label for="checkAll/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sub']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'][0][$_smarty_tpl->tpl_vars['subkey']->value];?>
</label>
										<?php }} ?>
									<?php }} ?>
								</p>
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('infoClass')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
									<p style="margin:5px 0;">
										<span<?php if ($_smarty_tpl->tpl_vars['item']->value['level']>0){?> class="lnkSubCategory" style="margin-left:<?php echo $_smarty_tpl->tpl_vars['item']->value['level']*30;?>
px;"<?php }?>><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="info[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="selectCurrentRow"<?php if ($_smarty_tpl->tpl_vars['item']->value['istrue']){?> checked<?php }?> /><label for="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</label></span>
										<span class="toggleRow"><a href="javascript:void(0);"><?php echo $_smarty_tpl->getVariable('lang')->value->detail;?>
&gt;</a></span>
										<span class="detailRow"><?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['subkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['action']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value){
 $_smarty_tpl->tpl_vars['subkey']->value = $_smarty_tpl->tpl_vars['sub']->key;
?>
											<?php  $_smarty_tpl->tpl_vars['ss'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sub']->value['value'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ss']->key => $_smarty_tpl->tpl_vars['ss']->value){
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['ss']->key;
?>
												<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['subkey']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ss']->value;?>
" name="infoClass[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['subkey']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ss']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['sub']->value['value'][2][$_smarty_tpl->tpl_vars['kk']->value]){?> checked<?php }?> custom="<?php echo $_smarty_tpl->tpl_vars['subkey']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ss']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['istrue']){?> disabled<?php }?> /><label for="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['subkey']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['ss']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['value'][0][$_smarty_tpl->tpl_vars['kk']->value];?>
</label>
											<?php }} ?>
										<?php }} ?></span>
									</p>
								<?php }} ?>
							<?php }?>
						</td>
					</tr>
				</table>
				<table class="editTable" style="display:none;">
					<tr class="editHdTr">
						<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->action_permission;?>
</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><?php echo $_smarty_tpl->getVariable('lang')->value->role_name;?>
</td>
						<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
</td>
					</tr>
					<?php if ($_smarty_tpl->getVariable('action')->value){?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('action')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<tr class="editTr">
							<td class="editLtTd"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
							<td class="editRtTd">
								<?php  $_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['subkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['value'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sub']->key => $_smarty_tpl->tpl_vars['sub']->value){
 $_smarty_tpl->tpl_vars['subkey']->value = $_smarty_tpl->tpl_vars['sub']->key;
?>
									<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sub']->value;?>
" name="authorize[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sub']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['value'][2][$_smarty_tpl->tpl_vars['subkey']->value]){?> checked<?php }?> /><label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sub']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'][0][$_smarty_tpl->tpl_vars['subkey']->value];?>
</label>
								<?php }} ?>
							</td>
						</tr>
					<?php }} ?>
					<?php }?>
				</table>
			</div>
			<div class="editBtn clearfix">
				<input type="submit" value="Save" class="lnkSave" /> 
				<a href="?con=admin&ctl=system/role" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
			</div>
		</form>
	</div>
</div>
</body>
</html>