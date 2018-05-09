<?php /* Smarty version Smarty-3.0.6, created on 2013-01-02 19:09:20
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\system/pick/do.htm" */ ?>
<?php /*%%SmartyHeaderCode:1586850e415603f3b35-17600066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49864d77b5702e56e2df4eace9bb419fd4ca733f' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\system/pick/do.htm',
      1 => 1357124534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1586850e415603f3b35-17600066',
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
<table class="listTable" id="preloader">
	<tr class="listHdTr">
		<td align="left" style="padding-left:20px;">采集进度</td>
	</tr>
	<tr>
		<td>
			<div class="pick-result"><span></span><strong><em>5</em>/20</strong></div>
			<script type="text/javascript"> var pickResult = $('script:last').prev(); var pickResultPreloader = pickResult.find('span'); var pickResultPreloaderText = pickResult.find('em'); </script>
			<script type="text/javascript"> pickResultPreloader.css( 'width', ( 5 / 20 ) * 100 + '%' ); pickResultPreloaderText.html(  ); </script>
		</td>
	</tr>
</table>
<script type="text/javascript"> $('#preloader').hide(); </script>
<table class="listTable">
	<tr class="listHdTr">
		<td align="left" style="padding-left:20px;">Acquisition results</td>
	</tr>
	<tr>
		<td>To information were collected:<?php echo $_smarty_tpl->getVariable('listCount')->value;?>
 which the successful storage:<?php echo $_smarty_tpl->getVariable('infoCnt')->value;?>
 download pictures:<?php echo $_smarty_tpl->getVariable('urlItemImgCount')->value;?>
!</td>
	</tr>
</table>
</body>
</html>