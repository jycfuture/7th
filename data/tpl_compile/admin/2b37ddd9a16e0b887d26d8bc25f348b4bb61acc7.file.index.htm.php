<?php /* Smarty version Smarty-3.0.6, created on 2018-03-27 06:56:15
         compiled from "D:/www/vstar/core/common/skin/admin\adv/config_data/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:75375ab9eb0f2fd3c6-37141415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b37ddd9a16e0b887d26d8bc25f348b4bb61acc7' => 
    array (
      0 => 'D:/www/vstar/core/common/skin/admin\\adv/config_data/index.htm',
      1 => 1508144458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75375ab9eb0f2fd3c6-37141415',
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
		$('input[name="data[service_fee]"]').click(function(){
			$('#service_fee_'+$(this).val()).show().siblings('div').hide();
		});
	});
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips"></div>
		<form id="editForm" method="post">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<!--<tr class="editHdTr">-->
					<!--<td colspan="2">Service Fee</td>-->
				<!--</tr>-->
				<!--<tr class="editTr">-->
					<!--<td class="editLtTd">Service Fee</td>-->
					<!--<td class="editRtTd">-->
						<!--<label><input type="radio" name="data[service_fee]" value="none"<?php if ($_smarty_tpl->getVariable('configs')->value['service_fee']=='none'){?> checked<?php }?> />None</label>-->
						<!--<label><input type="radio" name="data[service_fee]" value="fixed"<?php if ($_smarty_tpl->getVariable('configs')->value['service_fee']=='fixed'){?> checked<?php }?> />Fixed</label>-->
						<!--<label><input type="radio" name="data[service_fee]" value="percent"<?php if ($_smarty_tpl->getVariable('configs')->value['service_fee']=='percent'){?> checked<?php }?> />Percent</label>-->
						<!--<div id="service_fee_none" style="display:<?php if ($_smarty_tpl->getVariable('configs')->value['service_fee']=='none'){?>block<?php }else{ ?>none<?php }?>;"><p>Waive Fee</p></div>-->
						<!--<div id="service_fee_fixed" style="display:<?php if ($_smarty_tpl->getVariable('configs')->value['service_fee']=='fixed'){?>block<?php }else{ ?>none<?php }?>;">-->
							<!--<input name="data[service_fee_fixed]" value="<?php echo $_smarty_tpl->getVariable('configs')->value['service_fee_fixed'];?>
" type="text" size="50" class="text" />-->
							<!--<p>Fixed service fee</p>-->
						<!--</div>-->
						<!--<div id="service_fee_percent" style="display:<?php if ($_smarty_tpl->getVariable('configs')->value['service_fee']=='percent'){?>block<?php }else{ ?>none<?php }?>;">-->
							<!--<input name="data[service_fee_percent]" value="<?php echo $_smarty_tpl->getVariable('configs')->value['service_fee_percent'];?>
" type="text" size="50" class="text" />-->
							<!--<p>Service charge is a percentage of the total value</p>-->
						<!--</div>-->
					<!--</td>-->
				<!--</tr>-->
				<tr class="editTr">
					<td class="editLtTd">视频代码</td>
					<td class="editor">
						<input name="data[spdm]" class="text" value='<?php echo $_smarty_tpl->getVariable('configs')->value['spdm'];?>
' size="100"  />
					</td>
				</tr>
			</table>
			<div class="editBtn clearfix">
				<input type="submit" value="Save" class="lnkSave" />
			</div>
		</form>
	</div>
</div>
</body>
</html>