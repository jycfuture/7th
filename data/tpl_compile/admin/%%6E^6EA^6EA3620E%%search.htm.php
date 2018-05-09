<?php /* Smarty version 2.6.26, created on 2012-08-14 09:18:15
         compiled from info/index/search.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'strpad', 'info/index/search.htm', 57, false),)), $this); ?>
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
<link href="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.core.css" rel="stylesheet" />
<link href="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.datepicker.css" rel="stylesheet" />
<link href="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.theme.css" rel="stylesheet" />
<script src="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.core.js"></script>
<script src="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.datepicker.js"></script>
<script src="<?php echo $this->_tpl_vars['STATIC_PATH']; ?>
calendar/ui.datepicker-zh-cn.js"></script>
</head>
<script>
function searchSubmit ()
{
	var class_id	= document.getElementsByName('class_id')[0].value;
	var creator		= document.getElementsByName('creator')[0].value;
	var pub_from	= document.getElementsByName('pub_from')[0].value;
	var pub_to		= document.getElementsByName('pub_to')[0].value;
	var keyword		= document.getElementsByName('keyword')[0].value;

	window.location.href = '?con=admin&ctl=info/&type=title&class_id=' + class_id + '&creator=' + creator + '&pub_from=' + pub_from + '&pub_to=' + pub_to + '&keyword=' + encodeURI(keyword) + '&withSubItems=1';
}

$(function(){
	var pub_from = document.getElementsByName('pub_from')[0];
	$(pub_from).keydown(function(){
		return false;
	}).datepicker($.datepicker.regional["zh-cn"]);

	var pub_to = document.getElementsByName('pub_to')[0];
	$(pub_to).keydown(function(){
		return false;
	}).datepicker($.datepicker.regional["zh-cn"]);
});
</script>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=info/&act=add" class="lnkAdd">Release information</a>
		</div>
		<table class="editTable">
			<tr class="editHdTr">
				<td colspan="2">Information Search</td>
			</tr>
			<tr class="editTr">
				<td class="editLtTd">Specified category</td>
				<td class="editRtTd">
					<select name="class_id">
						<option value="">--Please select the information classification--</option>
						<?php $_from = $this->_tpl_vars['infoclasslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
							<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo smarty_function_strpad(array('str' => '','len' => $this->_tpl_vars['item']['level'],'pad' => '-'), $this);?>
<?php echo $this->_tpl_vars['item']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				</td>
			</tr>
			<tr class="editTr">
				<td class="editLtTd">Specify the role / user</td>
				<td class="editRtTd">
						<select name="creator">
						<option value="">--Please select the user--</option>
						<?php $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
							<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
				</td>
			</tr>
			<tr class="editTr">
				<td class="editLtTd">Search in title</td>
				<td class="editRtTd"><input type="text" name="keyword" class="text" size="50" /></td>
			</tr>
			<tr class="editTr">
				<td class="editLtTd"><em class="tip" tips="In order to ensure the correct time format, the system limits can not be entered, please select a date from the calendar control">Specify the Published range</em></td>
				<td class="editRtTd">
					Start time:<input type="text" name="pub_from" class="text" size="12" /> 
					Deadline:<input type="text" name="pub_to" class="text" size="12" />
				</td>
			</tr>
			<tr class="editFtTr">
				<td></td>
				<td><input type="button" value="" class="lnkSave" onclick="searchSubmit();"/></td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>