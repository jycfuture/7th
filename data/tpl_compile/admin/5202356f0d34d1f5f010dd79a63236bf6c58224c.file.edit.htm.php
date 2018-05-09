<?php /* Smarty version Smarty-3.0.6, created on 2017-07-10 17:41:45
         compiled from "D:/www/mishi/core/common/skin/admin\adv/ride/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:643959634bd9cf64d7-75471164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5202356f0d34d1f5f010dd79a63236bf6c58224c' => 
    array (
      0 => 'D:/www/mishi/core/common/skin/admin\\adv/ride/edit.htm',
      1 => 1499679694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643959634bd9cf64d7-75471164',
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
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="../../../../../../index.php" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a>
		</div>
		<form method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value->view;?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Name：</td>
					<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('data')->value['firstname'];?>
 <?php echo $_smarty_tpl->getVariable('data')->value['lastname'];?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Tel：</td>
					<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('data')->value['phone'];?>
</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Email：</td>
					<td class="editRtTd"><?php echo $_smarty_tpl->getVariable('data')->value['email'];?>
</td>
				</tr>

				<tr class="editTr">
					<td class="editLtTd">SubmiteTime：</td>
					<td class="editRtTd"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->getVariable('data')->value['createTime']);?>
</td>
				</tr>
			</table>
			<div class="editBtn clearfix">
				<a href="../../../../../../index.php" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a>
			</div>
		</form>
	</div>
</div>
</body>
</html>