<?php /* Smarty version Smarty-3.0.6, created on 2015-04-10 10:43:54
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\common/middle.htm" */ ?>
<?php /*%%SmartyHeaderCode:5542552738ea433784-95035134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb182767bda5662328725bab63512887b150d675' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\common/middle.htm',
      1 => 1413791097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5542552738ea433784-95035134',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/middle.css">
<script language="JavaScript">
var flag = true;
function toggle(){
 window.parent.document.getElementById('all').cols= flag ? "0,12,*" : "218,12,*";
 document.getElementById("switchPoint").innerHTML = flag ? "<img src='<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/switchPoint_on.gif' width='11' height='66'>" : "<img src='<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/switchPoint_off.gif' width='11' height='66'>";
 var eBody = document.getElementById("bg");
 if(flag==true){
	eBody.className = "left";
 }else{
	eBody.className = "right";
 }
 flag = !flag;
}
</script>
</head>

<body id="bg" class="right">
<div class="middle clearfix">
	<div id="switchPoint" onclick="toggle()" class="switchPoint"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
images/switchPoint_off.gif" width="11" height="66"></div>
</div>
</body>
</html>