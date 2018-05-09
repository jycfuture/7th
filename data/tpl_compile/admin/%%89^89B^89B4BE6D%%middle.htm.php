<?php /* Smarty version 2.6.26, created on 2012-11-22 11:21:57
         compiled from common/middle.htm */ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/middle.css">
<script language="JavaScript">
var flag = true;
function toggle(){
 window.parent.document.getElementById('all').cols= flag ? "0,15,*" : "218,15,*";
 document.getElementById("switchPoint").innerHTML = flag ? "<img src='<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/switchPoint_on.gif' width='8' height='75'>" : "<img src='<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/switchPoint_off.gif' width='8' height='75'>";
 flag = !flag;
}
</script>
</head>

<body>
<div class="middle clearfix">
	<div id="switchPoint" onclick="toggle()" class="switchPoint"><img src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/switchPoint_off.gif" width="8" height="75"></div>
</div>
</body>
</html>