<?php /* Smarty version 2.6.26, created on 2012-11-20 10:33:00
         compiled from system/site/other.htm */ ?>
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
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips"></div>
		<table class="tabTable">
			<tr>
				<?php if ($this->_tpl_vars['hideColumn']['site_index']): ?><td><a href="?con=admin&ctl=system/site">Basic Settings</a></td><?php endif; ?>
				<?php if ($this->_tpl_vars['hideColumn']['site_other']): ?><td><a class="current" href="#">Advanced Settings</a></td><?php endif; ?>
			</tr>
		</table>
		<form action="?con=admin&ctl=system/site&act=other&id=<?php echo $this->_tpl_vars['data']['id']; ?>
" method="post" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Advanced Settings</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Copyright Information</td>
					<td class="editRtTd">
						<input id="isCopyrightEnabled1" name="data[isCopyrightEnabled]" value="1" type="radio"<?php if ($this->_tpl_vars['data']['isCopyrightEnabled']): ?> checked<?php endif; ?> /><label for="isCopyrightEnabled1">Show</label>
						<input id="isCopyrightEnabled2" name="data[isCopyrightEnabled]" value="0" type="radio"<?php if (! $this->_tpl_vars['data']['isCopyrightEnabled']): ?> checked<?php endif; ?> /><label for="isCopyrightEnabled2">Do not show</label>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Contact Information</td>
					<td class="editRtTd">
						<input id="isContactEnabled1" name="data[isContactEnabled]" value="1" type="radio"<?php if ($this->_tpl_vars['data']['isContactEnabled']): ?> checked<?php endif; ?> /><label for="isContactEnabled1">Show</label>
						<input id="isContactEnabled2" name="data[isContactEnabled]" value="0" type="radio"<?php if (! $this->_tpl_vars['data']['isContactEnabled']): ?> checked<?php endif; ?> /><label for="isContactEnabled2">Do not show</label>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Head JavaScript</td>
					<td class="editRtTd">
						<input id="isHeadJavascriptEnabled1" name="data[isHeadJavascriptEnabled]" value="1" type="radio"<?php if ($this->_tpl_vars['data']['isHeadJavascriptEnabled']): ?> checked<?php endif; ?> /><label for="isHeadJavascriptEnabled1">Show</label>
						<input id="isHeadJavascriptEnabled2" name="data[isHeadJavascriptEnabled]" value="0" type="radio"<?php if (! $this->_tpl_vars['data']['isHeadJavascriptEnabled']): ?> checked<?php endif; ?> /><label for="isHeadJavascriptEnabled2">Do not show</label>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Foot JavaScript</td>
					<td class="editRtTd">
						<input id="isFootJavascriptEnabled1" name="data[isFootJavascriptEnabled]" value="1" type="radio"<?php if ($this->_tpl_vars['data']['isFootJavascriptEnabled']): ?> checked<?php endif; ?> /><label for="isFootJavascriptEnabled1">Show</label>
						<input id="isFootJavascriptEnabled2" name="data[isFootJavascriptEnabled]" value="0" type="radio"<?php if (! $this->_tpl_vars['data']['isFootJavascriptEnabled']): ?> checked<?php endif; ?> /><label for="isFootJavascriptEnabled2">Do not show</label>
					</td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>