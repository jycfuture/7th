<?php /* Smarty version 2.6.26, created on 2012-11-22 11:22:01
         compiled from common/warning.htm */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['lang']->system_prompts; ?>
</title>
<style type="text/css">
body { height:30px; line-height:30px; margin:0; padding:0; background-color:#fff; color:#000; font-size:12px; font-family:Arial; }
a { color:#174A7D; }
#container { clear:both; width:500px; margin:100px auto; padding:10px 20px; background:#ffa; border:1px solid #cc9; -moz-box-shadow: 2px 2px 11px #666; -webkit-box-shadow: 2px 2px 11px #666; }
#title { font-weight:bold; }
#content { padding:0 20px; height:60px; }
#url { font-weight:bold; text-align:center; }
</style>
</head>
<body>
<div id="container">
	<div id="title"><?php echo $this->_tpl_vars['lang']->system_prompts; ?>
</div>
	<div id="content"><?php echo $this->_tpl_vars['msg']; ?>
</div>
	<div id="url"><a href="<?php echo $this->_tpl_vars['url']; ?>
"><?php echo $this->_tpl_vars['lang']->click_here_continue; ?>
</a></div>
</div>
</body>
</html>