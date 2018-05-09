<?php /* Smarty version Smarty-3.0.6, created on 2018-03-28 00:44:28
         compiled from "D:/www/vstar/core/common/skin/admin\adv/inquire/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:140315abae56c5ab740-88973417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0191e63bad126a9f25ee5240d33dd91a20eaa23' => 
    array (
      0 => 'D:/www/vstar/core/common/skin/admin\\adv/inquire/edit.htm',
      1 => 1500054382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140315abae56c5ab740-88973417',
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
			<a href="<?php echo $_smarty_tpl->getVariable('returnUrl')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
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
				     <td class="editLtTd">Other Relevant information</td>
				      <td class="editor">
					     <?php echo $_smarty_tpl->getVariable('data')->value['message'];?>

				      </td>
			    </tr>
				<tr class="editTr">
					<td class="editLtTd">SubmiteTime：</td>
					<td class="editRtTd"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->getVariable('data')->value['createTime']);?>
</td>
				</tr>
			</table>
			<div class="editBtn clearfix">
				<a href="<?php echo $_smarty_tpl->getVariable('returnUrl')->value;?>
" class="lnkReturn"><?php echo $_smarty_tpl->getVariable('lang')->value->return_to_list;?>
</a> 
			</div>
		</form>
	</div>
</div>
</body>
</html>