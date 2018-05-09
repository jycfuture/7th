<?php /* Smarty version 2.6.26, created on 2012-03-27 22:19:32
         compiled from hidden/column/index.htm */ ?>
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
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/niewei.js"></script>
<script type="text/javascript">
$(function(){
	$('#sortable li').hover(function(){
		$(this).addClass('Hover');
	}, function(){
		$(this).removeClass('Hover');
	});

	$("#sortable").sortable({
		placeholder : 'ui-state-highlight'
	});
	$("#sortable").disableSelection();
});
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips"></div>
		<form action="?con=admin&ctl=hidden/column" method="post">
			<table class="listTable">
				<tr class="listHdTr">
					<td align="left">Whether to display / column name</td>
				</tr>
				<tr>
					<td class="sortable-box" align="left">
						<ul id="sortable">
							<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['column_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['column_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['column_list']['iteration']++;
?>
								<li<?php if ($this->_foreach['column_list']['iteration'] % 2 == 0): ?> class="Alternating"<?php endif; ?>>
									<input name="<?php echo $this->_tpl_vars['key']; ?>
[show]" value="1" type="checkbox"<?php if ($this->_tpl_vars['item']['show']): ?> checked<?php endif; ?> /> <input name="<?php echo $this->_tpl_vars['key']; ?>
[name]" value="<?php echo $this->_tpl_vars['item']['name']; ?>
" type="text" size="20" class="text" />
								</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
					</td>
				</tr>
				<tr class="listFtTr">
					<td align="left">
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=info/" class="lnkReturn">Return to list</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>