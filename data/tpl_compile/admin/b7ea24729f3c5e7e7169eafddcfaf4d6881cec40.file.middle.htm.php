<?php /* Smarty version Smarty-3.0.6, created on 2017-07-10 16:15:24
         compiled from "D:/www/mishi/core/common/skin/admin\common/middle.htm" */ ?>
<?php /*%%SmartyHeaderCode:199425963379c2ab068-26225958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ea24729f3c5e7e7169eafddcfaf4d6881cec40' => 
    array (
      0 => 'D:/www/mishi/core/common/skin/admin\\common/middle.htm',
      1 => 1413791098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199425963379c2ab068-26225958',
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