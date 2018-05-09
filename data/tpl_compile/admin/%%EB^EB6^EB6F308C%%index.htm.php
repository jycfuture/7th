<?php /* Smarty version 2.6.26, created on 2012-09-29 10:05:07
         compiled from info/class/index.htm */ ?>
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
js/list.js"></script>
<script type="text/javascript">
$(function(){
	var list = $('.listTable tr[id]');
	list.each(function(i){
		$(this).find('.toggle-ico').click(function(){
			var tr		= list.eq(i);
			var trid	= tr.attr('id');
			if ($(this).attr('class') == 'toggle-ico btn-toggle-open')
			{
				$(this).attr('class', 'toggle-ico btn-toggle-close');
				$("tr[id^='" + trid + "']").not(tr).hide();
			}
			else if ($(this).attr('class') == 'toggle-ico btn-toggle-close')
			{
				$(this).attr('class', 'toggle-ico btn-toggle-open');
				$("tr[id^='" + trid + "']").not(tr).show().find('.toggle-ico').not("[class='toggle-ico btn-toggle-noson']").attr('class', 'toggle-ico btn-toggle-open');
			}
		});
	});

	$('#checkAll').click(function(){
		$('input.listChk').attr('checked', $(this).attr('checked'));
	});
});

function countSelect ()
{
	var cnt		= 0;
	var list	= document.getElementsByName('ids[]');
	for (var i = 0; i < list.length; i++)
	{
		if (list[i].checked) cnt++;
	}
	return cnt;
}

function DeleteSome ()  //批量删除
{
	if (countSelect() <= 0)
	{
		alert('Please select the batch processing of information classification');
		return false;
	}
	if (window.confirm('You sure you want to delete the selected information classification?')) $('#listForm').attr('action', '?con=admin&ctl=info/class&act=delete').submit();
}

function html ()
{
	if (countSelect() <= 0)
	{
		alert('Please select the batch processing of information classification');
		return false;
	}
	if (window.confirm('You sure you want to generate static files to select the classification of information?')) $('#listForm').attr('action', '?con=admin&ctl=info/class&act=html').submit();
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a onclick="DeleteSome();" class="lnkDeleteSome">Batch delete</a>
			<a href="?con=admin&ctl=info/class" class="lnkRefresh">Refresh the list</a>
			<a href="?con=admin&ctl=info/class&act=add&parent_id=" class="lnkAdd">To increase the top-level classification</a>
			<!--a onclick="html();">Batch to generate static</a-->
		</div>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="listTable">
			<tr class="listHdTr">
				<td width="40"><input type="checkbox" id="checkAll" /></td>
				<td>Category Name</td>
				<td width="8%"><em class="tip" tips="The system supports the classification level of 20">Increase the subclass</em></td>
				<td width="6%">Picture</td>
				<td width="6%">Attachment</td>
				<td width="6%"><em class="tip" tips="Remove the classification of the premise: the need to remove all subcategories">Delete</em></td>
				<td width="8%">Content Management</td>
				<td width="8%">Display Mode</td>
				<!--td width="8%">Generate static</td-->
				<td width="8%"><em class="tip" tips="Set the column name and sort of the classification list">Column Setting</em></td>
			</tr>
			<form id="listForm" name="listForm" action="" method="post">
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<tr<?php if ($this->_tpl_vars['key'] % 2 == 0): ?> class="Alternating"<?php endif; ?> id="class-<?php echo $this->_tpl_vars['item']['id']; ?>
">
					<td><input type="checkbox" name="ids[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" class="listChk" /></td>
					<td align="left"><div class="lnkCategoryToggle" style="margin-left:<?php echo $this->_tpl_vars['item']['level']*30; ?>
px;"><span class="toggle-ico btn-toggle-<?php if ($this->_tpl_vars['item']['hasSon']): ?>open<?php else: ?>noson<?php endif; ?>" title="Expand / Collapse child classification"></span><?php if ($this->_tpl_vars['item']['column']['class_edit']): ?><a href="?con=admin&ctl=info/class&act=edit&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" title="Edit this classification"><?php endif; ?><?php echo $this->_tpl_vars['item']['name']; ?>
<?php if ($this->_tpl_vars['item']['column']['class_edit'] == 1): ?></a><?php endif; ?><?php if ($this->_tpl_vars['item']['infocnt'] > 0): ?><span class="infocnt">(Posts:<em><?php echo $this->_tpl_vars['item']['infocnt']; ?>
</em>)</span><?php endif; ?><?php if ($this->_tpl_vars['item']['hidecnt'] > 0): ?><span class="infocnt">(Unaudited:<em><?php echo $this->_tpl_vars['item']['hidecnt']; ?>
</em>)</span><?php endif; ?></div></td>
					<td><?php if ($this->_tpl_vars['item']['level'] < 19 && $this->_tpl_vars['item']['column']['class_add']): ?><a href="?con=admin&ctl=info/class&act=add&parent_id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkAdd" title="Add a sub-class classification"></a><?php endif; ?></td>
					<td>
						<?php if ($this->_tpl_vars['item']['extend']['hasImageUrl']): ?>
						<a href="<?php if ($this->_tpl_vars['item']['column']['pic']): ?>javascript:infoPic('<?php echo $this->_tpl_vars['item']['id']; ?>
', 'infoClass', 'id', 'imageUrl');<?php else: ?><?php if ($this->_tpl_vars['item']['imageUrl'] == ''): ?>javascript:void(0);<?php else: ?><?php echo $this->_tpl_vars['UPLOAD_PATH']; ?>
<?php echo $this->_tpl_vars['item']['imageUrl']; ?>
<?php endif; ?><?php endif; ?>" title="Category images">
							<?php if ($this->_tpl_vars['item']['imageUrl'] != ''): ?><font color="#FF6600">Have</font><?php else: ?>No<?php endif; ?>
						</a>
						<?php endif; ?>
					</td>
					<td>
						<?php if ($this->_tpl_vars['item']['extend']['hasFiles']): ?>
						<a href="<?php if ($this->_tpl_vars['item']['column']['file']): ?>javascript:infoFile('<?php echo $this->_tpl_vars['item']['id']; ?>
', 'infoClass', 'id', 'files');<?php else: ?><?php if ($this->_tpl_vars['item']['files'] == ''): ?>javascript:void(0);<?php else: ?><?php echo $this->_tpl_vars['UPLOAD_PATH']; ?>
<?php echo $this->_tpl_vars['item']['files']; ?>
<?php endif; ?><?php endif; ?>" title="Classification attachment">
							<?php if ($this->_tpl_vars['item']['files'] != ''): ?><font color="#FF6600">Have</font><?php else: ?>No<?php endif; ?>
						</a>
						<?php endif; ?>
					</td>
					<td><?php if ($this->_tpl_vars['item']['column']['class_delete']): ?><a href="?con=admin&ctl=info/class&act=delete&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkDelete" onclick="return chkDelete();" title="Remove the classification"></a><?php endif; ?></td>
					<td><?php if ($this->_tpl_vars['item']['column']['info_index']): ?><a href="?con=admin&ctl=info/&class_id=<?php echo $this->_tpl_vars['item']['id']; ?>
&withSubItems=1" class="lnkView" title="Check the classified information"></a><?php endif; ?></td>
					<td>
						<?php if ($this->_tpl_vars['item']['defaultDisplayMode'] == 1): ?>
						Graphic content
						<?php elseif ($this->_tpl_vars['item']['defaultDisplayMode'] == 2): ?>
						News List
						<?php elseif ($this->_tpl_vars['item']['defaultDisplayMode'] == 4): ?>
						List of images
						<?php elseif ($this->_tpl_vars['item']['defaultDisplayMode'] == 8): ?>
						Graphic list
						<?php else: ?>
						Unknown mode
						<?php endif; ?>
					</td>
					<!--td><a href="?con=admin&ctl=info/class&act=html&id=<?php echo $this->_tpl_vars['item']['id']; ?>
">Generate static</a></td-->
					<td><?php if ($this->_tpl_vars['item']['column']['class_columnSetting']): ?><a href="?con=admin&ctl=info/class&act=columnSetting&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkView" title="Column to edit the list of classified information"></a><?php endif; ?></td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			</form>
			<tr class="listFtTr">
				<td colspan="10">&nbsp;</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>