<?php /* Smarty version 2.6.26, created on 2012-04-04 22:13:11
         compiled from system/role/authorize.htm */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/main.css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
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
			<a href="?con=admin&ctl=system/role" class="lnkReturn">Return to list</a> 
		</div>
		<table class="tabTable" id="tableTab">
			<tr>
				<td><a class="current" href="#"><em class="tip" tips="Background menu on the left side of authority, the selected item is displayed in the left">Menu permissions</em></a></td>
				<td id="tdInfoClass2"><a href="#"><em class="tip" tips="Each information classification can be used alone to assign the appropriate permissions Note: here is to exclude the way, if checked, no privileges, and the subclass will inherit the permissions of the parent class">Information Classification permissions (excluding)</em></a></td>
				<td id="tdAction"><a href="#"><em class="tip" tips="In addition to all the actions in the information-related permissions, permissions, select the competent">Action permissions</em></a></td>
			</tr>
		</table>
		<form action="?con=admin&ctl=system/role&act=authorize&id=<?php echo $this->_tpl_vars['data']['id']; ?>
" method="post">
			<div id="panes">
				<table class="editTable">
					<tr class="editHdTr">
						<td colspan="2">Edit menu permissions</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd">Role name</td>
						<td class="editRtTd"><?php echo $this->_tpl_vars['data']['name']; ?>
</td>
					</tr>
					<?php if ($this->_tpl_vars['relation']): ?>
					<?php $_from = $this->_tpl_vars['relation']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
						<tr class="editTr">
							<td class="editLtTd"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
							<td class="editRtTd">
								<?php $_from = $this->_tpl_vars['item']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subkey'] => $this->_tpl_vars['sub']):
?>
									<input type="checkbox" id="<?php echo $this->_tpl_vars['subkey']; ?>
" name="relation[]" value="<?php echo $this->_tpl_vars['subkey']; ?>
"<?php if ($this->_tpl_vars['sub']['istrue']): ?> checked<?php endif; ?> /><label for="<?php echo $this->_tpl_vars['subkey']; ?>
"><?php echo $this->_tpl_vars['sub']['name']; ?>
</label>
								<?php endforeach; endif; unset($_from); ?>
							</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
				</table>
				<table class="editTable" style="display:none;">
					<tr class="editHdTr">
						<td colspan="2">Editing role information classification authority (excluding)</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd">Role name</td>
						<td class="editRtTd"><?php echo $this->_tpl_vars['data']['name']; ?>
</td>
					</tr>
					<tr class="editTr">
						<td class="editor" colspan="2">
							<?php if ($this->_tpl_vars['infoClass']): ?>
								<p>
									<input type="checkbox" id="checkAll" class="selectRow" /><label for="checkAll">Select all</label>
									<?php $_from = $this->_tpl_vars['infoAction']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
										<?php $_from = $this->_tpl_vars['item']['value'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subkey'] => $this->_tpl_vars['sub']):
?>
											<input type="checkbox" id="checkAll/<?php echo $this->_tpl_vars['key']; ?>
/<?php echo $this->_tpl_vars['sub']; ?>
" class="selectRow" value="<?php echo $this->_tpl_vars['key']; ?>
/<?php echo $this->_tpl_vars['sub']; ?>
" /><label for="checkAll/<?php echo $this->_tpl_vars['key']; ?>
/<?php echo $this->_tpl_vars['sub']; ?>
"><?php echo $this->_tpl_vars['item']['value'][0][$this->_tpl_vars['subkey']]; ?>
</label>
										<?php endforeach; endif; unset($_from); ?>
									<?php endforeach; endif; unset($_from); ?>
								</p>
								<?php $_from = $this->_tpl_vars['infoClass']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
									<p style="margin:5px 0;">
										<span<?php if ($this->_tpl_vars['item']['level'] > 0): ?> class="lnkSubCategory" style="margin-left:<?php echo $this->_tpl_vars['item']['level']*30; ?>
px;"<?php endif; ?>><input type="checkbox" id="<?php echo $this->_tpl_vars['item']['id']; ?>
/<?php echo $this->_tpl_vars['key']; ?>
" name="info[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" class="selectCurrentRow"<?php if ($this->_tpl_vars['item']['istrue']): ?> checked<?php endif; ?> /><label for="<?php echo $this->_tpl_vars['item']['id']; ?>
/<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</label></span>
										<span class="toggleRow"><a href="javascript:void(0);">Detailed settings&gt;</a></span>
										<span class="detailRow"><?php $_from = $this->_tpl_vars['item']['action']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subkey'] => $this->_tpl_vars['sub']):
?>
											<?php $_from = $this->_tpl_vars['sub']['value'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kk'] => $this->_tpl_vars['ss']):
?>
												<input type="checkbox" id="<?php echo $this->_tpl_vars['item']['id']; ?>
/<?php echo $this->_tpl_vars['subkey']; ?>
/<?php echo $this->_tpl_vars['ss']; ?>
" name="infoClass[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
/<?php echo $this->_tpl_vars['subkey']; ?>
/<?php echo $this->_tpl_vars['ss']; ?>
"<?php if ($this->_tpl_vars['sub']['value'][2][$this->_tpl_vars['kk']]): ?> checked<?php endif; ?> custom="<?php echo $this->_tpl_vars['subkey']; ?>
/<?php echo $this->_tpl_vars['ss']; ?>
"<?php if ($this->_tpl_vars['item']['istrue']): ?> disabled<?php endif; ?> /><label for="<?php echo $this->_tpl_vars['item']['id']; ?>
/<?php echo $this->_tpl_vars['subkey']; ?>
/<?php echo $this->_tpl_vars['ss']; ?>
"><?php echo $this->_tpl_vars['sub']['value'][0][$this->_tpl_vars['kk']]; ?>
</label>
											<?php endforeach; endif; unset($_from); ?>
										<?php endforeach; endif; unset($_from); ?></span>
									</p>
								<?php endforeach; endif; unset($_from); ?>
							<?php endif; ?>
						</td>
					</tr>
				</table>
				<table class="editTable" style="display:none;">
					<tr class="editHdTr">
						<td colspan="2">Edit the role of action permissions</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd">Role name</td>
						<td class="editRtTd"><?php echo $this->_tpl_vars['data']['name']; ?>
</td>
					</tr>
					<?php if ($this->_tpl_vars['action']): ?>
					<?php $_from = $this->_tpl_vars['action']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
						<tr class="editTr">
							<td class="editLtTd"><?php echo $this->_tpl_vars['item']['name']; ?>
</td>
							<td class="editRtTd">
								<?php $_from = $this->_tpl_vars['item']['value'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subkey'] => $this->_tpl_vars['sub']):
?>
									<input type="checkbox" id="<?php echo $this->_tpl_vars['key']; ?>
/<?php echo $this->_tpl_vars['sub']; ?>
" name="authorize[]" value="<?php echo $this->_tpl_vars['key']; ?>
/<?php echo $this->_tpl_vars['sub']; ?>
"<?php if ($this->_tpl_vars['item']['value'][2][$this->_tpl_vars['subkey']]): ?> checked<?php endif; ?> /><label for="<?php echo $this->_tpl_vars['key']; ?>
/<?php echo $this->_tpl_vars['sub']; ?>
"><?php echo $this->_tpl_vars['item']['value'][0][$this->_tpl_vars['subkey']]; ?>
</label>
								<?php endforeach; endif; unset($_from); ?>
							</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
					<?php endif; ?>
				</table>
			</div>
			<table class="editTable">
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=system/role" class="lnkReturn">Return to list</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>