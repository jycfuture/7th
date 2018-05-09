<?php /* Smarty version 2.6.26, created on 2012-08-14 10:04:30
         compiled from info/index/index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'strpad', 'info/index/index.htm', 150, false),array('function', 'int2string', 'info/index/index.htm', 241, false),)), $this); ?>
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
<script>
function searchSubmit ()
{
	var class_idObj		= document.getElementsByName('class_id')[0];
	var class_id = null;
	if ( class_idObj ) {
		class_id = class_idObj.value();
	}
	else {
		class_id = '<?php echo $this->_tpl_vars['class_id']; ?>
';
	}
	var withSubItemsObj	= document.getElementsByName('withSubItems')[0];
	var withSubItems = null;
	if ( withSubItemsObj ) {
		withSubItems = withSubItemsObj.value();
	}
	var publishedDate	= document.getElementsByName('publishedDate')[0].value;
	var isApproved		= document.getElementsByName('isApproved')[0].value;
	var type			= document.getElementsByName('type')[0].value;
	var keyword			= document.getElementsByName('keyword')[0].value;
	var perPageCountObj	= document.getElementsByName('perPageCount')[0];
	var perPageCount	= null;
	if ( perPageCountObj ) {
		perPageCount	= perPageCountObj.value;
	}

	window.location.href = '?con=admin&ctl=info/&class_id=' + class_id + '&withSubItems=' + withSubItems + '&publishedDate=' + publishedDate + '&isApproved=' + isApproved + '&type=' + type + '&perPageCount=' + perPageCount + '&keyword=' + encodeURI(keyword) + '&noback=<?php echo $this->_tpl_vars['noback']; ?>
';
}

function stateSubmit ()
{
	if (parseInt($('#state').val()) > 0)
	{
		var class_idObj		= document.getElementsByName('class_id')[0];
		var class_id = null;
		if ( class_idObj ) {
			class_id = class_idObj.value();
		}
		else {
			class_id = '<?php echo $this->_tpl_vars['class_id']; ?>
';
		}
		var withSubItemsObj	= document.getElementsByName('withSubItems')[0];
		var withSubItems = null;
		if ( withSubItemsObj ) {
			withSubItems = withSubItemsObj.value();
		}
		var publishedDate	= document.getElementsByName('publishedDate')[0].value;
		var isApproved		= document.getElementsByName('isApproved')[0].value;
		var type			= document.getElementsByName('type')[0].value;
		var keyword			= document.getElementsByName('keyword')[0].value;
		var perPageCountObj	= document.getElementsByName('perPageCount')[0];
		var perPageCount	= null;
		if ( perPageCountObj ) {
			perPageCount	= perPageCountObj.value;
		}
		var state			= document.getElementsByName('state')[0].value;

		$('#listForm').attr('action', '?con=admin&ctl=info/&act=state&class_id=' + class_id + '&withSubItems=' + withSubItems + '&publishedDate=' + publishedDate + '&isApproved=' + isApproved + '&type=' + type + '&perPageCount=' + perPageCount + '&state=' + state + '&keyword=' + encodeURI(keyword) + '&noback=<?php echo $this->_tpl_vars['noback']; ?>
').submit();
	}
}

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

function move ()  //批量转移
{
	if ($('#targetClass').val() == '')
	{
		alert('Please select the target classification');
		return false;
	}
	if (countSelect() <= 0)
	{
		alert('Please select the information you want to batch processing.');
		return false;
	}
	$('#listForm').attr('action', '?con=admin&ctl=info/&act=move&class_id=<?php echo $this->_tpl_vars['class_id']; ?>
&targetClass=' + $('#targetClass').val()).submit();
}

function copy ()  //批量复制
{
	if ($('#targetClass').val() == '')
	{
		alert('Please select the target classification');
		return false;
	}
	if (countSelect() <= 0)
	{
		alert('Please select the information you want to batch processing.');
		return false;
	}
	$('#listForm').attr('action', '?con=admin&ctl=info/&act=copy&class_id=<?php echo $this->_tpl_vars['class_id']; ?>
&targetClass=' + $('#targetClass').val()).submit();
}

function DeleteSome ()  //批量删除
{
	if (countSelect() <= 0)
	{
		alert('Please select the information you want to batch processing.');
		return false;
	}
	if (window.confirm('You sure you want to delete the selected information?')) $('#listForm').attr('action', '?con=admin&ctl=info/&act=delete&class_id=<?php echo $this->_tpl_vars['class_id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
').submit();
}

function html ()
{
	if (countSelect() <= 0)
	{
		alert('Please select the information you want to batch processing.');
		return false;
	}
	if (window.confirm('Sure you select the information you want to generate static files?')) $('#listForm').attr('action', '?con=admin&ctl=info/&act=html&class_id=<?php echo $this->_tpl_vars['class_id']; ?>
').submit();
}

$(function(){
	$('#checkAll').click(function(){
		$('input.listChk').attr('checked', $(this).attr('checked'));
	});
});
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<?php if ($this->_tpl_vars['noback']): ?>
			<?php else: ?>
			<span>
				<select id="targetClass" name="targetClass">
					<option value="">--Select a Category--</option>
					<?php $_from = $this->_tpl_vars['infoclasslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
						<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"><?php echo smarty_function_strpad(array('str' => '','len' => $this->_tpl_vars['item']['level'],'pad' => '-'), $this);?>
<?php echo $this->_tpl_vars['item']['name']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>&nbsp;
				<a href="#" onclick="move();">Batch transfer</a>&nbsp;
				<a href="#" onclick="copy();">Batch copy</a>
			</span>
			<?php endif; ?>
			<a onclick="DeleteSome();" class="lnkDeleteSome">Batch delete</a>
			<?php if ($this->_tpl_vars['noback']): ?><?php else: ?><a href="?con=admin&ctl=info/class" class="lnkReturn">Back to category</a><?php endif; ?>
			<a href="<?php echo $this->_tpl_vars['refreshUrl']; ?>
" class="lnkRefresh">Refresh the list</a>
			<?php if ($this->_tpl_vars['hideColumn']['info_add']): ?><a href="?con=admin&ctl=info/&act=add&class_id=<?php echo $this->_tpl_vars['class_id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
" class="lnkAdd">Release information</a><?php endif; ?>
			<!--a onclick="html();">Batch to generate static</a-->
			<select id="state" name="state" onchange="stateSubmit();">
				<option value="0">Set status is</option>
				<option value="1">Unaudited</option>
				<option value="2">Audited</option>
				<option value="3">Unstuck</option>
				<option value="4">Top</option>
				<option value="5">Not recommended</option>
				<option value="6">Recommend</option>
				<option value="7">Cancel the hot</option>
				<option value="8">Hot spot</option>
			</select>
		</div>
		<div class="search">
			<?php if ($this->_tpl_vars['hideColumn']['class_columnSetting']): ?><a href="?con=admin&ctl=info/class&act=columnSetting&id=<?php echo $this->_tpl_vars['class_id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
" class="column-setting" title="Setting fields"></a><?php endif; ?>
			<?php if ($this->_tpl_vars['noback']): ?>
			<?php else: ?>
			<select onchange="searchSubmit();" name="class_id">
				<option value="">--Select a Category--</option>
				<?php $_from = $this->_tpl_vars['infoclasslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<option value="<?php echo $this->_tpl_vars['item']['id']; ?>
"<?php if ($this->_tpl_vars['item']['id'] == $this->_tpl_vars['class_id']): ?> selected<?php endif; ?>><?php echo smarty_function_strpad(array('str' => '','len' => $this->_tpl_vars['item']['level'],'pad' => '-'), $this);?>
<?php echo $this->_tpl_vars['item']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
			<select onchange="searchSubmit();" name="withSubItems">
				<option value="1"<?php if ($this->_tpl_vars['search']['withSubItems'] != 0): ?> selected<?php endif; ?>>Including sub-class information</option>
				<option value="0"<?php if ($this->_tpl_vars['search']['withSubItems'] == 0): ?> selected<?php endif; ?>>Does not include sub-class information</option>
			</select>
			<?php endif; ?>
			<select onchange="searchSubmit();" name="publishedDate">
				<option value=""<?php if ($this->_tpl_vars['search']['publishedDate'] == ''): ?> selected<?php endif; ?>>Published</option>
				<option value="today"<?php if ($this->_tpl_vars['search']['publishedDate'] == 'today'): ?> selected<?php endif; ?>>Today</option>
				<option value="week"<?php if ($this->_tpl_vars['search']['publishedDate'] == 'week'): ?> selected<?php endif; ?>>This week</option>
				<option value="month"<?php if ($this->_tpl_vars['search']['publishedDate'] == 'month'): ?> selected<?php endif; ?>>This month</option>
				<option value="year"<?php if ($this->_tpl_vars['search']['publishedDate'] == 'year'): ?> selected<?php endif; ?>>This year</option>
			</select>			
			<select onchange="searchSubmit();" name="isApproved">
				<option value=""<?php if ($this->_tpl_vars['search']['isApproved'] == ''): ?> selected<?php endif; ?>>Whether the audit</option>
				<option value="1"<?php if ($this->_tpl_vars['search']['isApproved'] == '1'): ?> selected<?php endif; ?>>Have audited</option>
				<option value="0"<?php if ($this->_tpl_vars['search']['isApproved'] == '0'): ?> selected<?php endif; ?>>The unaudited</option>
			</select>
			<select name="type">
				<option value="title"<?php if ($this->_tpl_vars['search']['type'] == 'title'): ?> selected<?php endif; ?>>Title</option>
				<option value="createUser"<?php if ($this->_tpl_vars['search']['type'] == 'createUser'): ?> selected<?php endif; ?>>Post a user account</option>
				<option value="keywords"<?php if ($this->_tpl_vars['search']['type'] == 'keywords'): ?> selected<?php endif; ?>>Keyword</option>
				<option value="description"<?php if ($this->_tpl_vars['search']['type'] == 'description'): ?> selected<?php endif; ?>>Description</option>
				<option value="content"<?php if ($this->_tpl_vars['search']['type'] == 'content'): ?> selected<?php endif; ?>>Text</option>
			</select>
			<input type="text" style="width:100px;" maxlength="50" name="keyword" value="<?php echo $this->_tpl_vars['search']['keyword']; ?>
" />
			<a onclick="searchSubmit();" class="lnkSearch">Search</a>
		</div>
		<table class="listTable">
			<tr class="listHdTr">
				<td width="40"><input type="checkbox" id="checkAll" /></td>
				<?php $_from = $this->_tpl_vars['column']['columnName']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
					<td><a href="<?php echo $this->_tpl_vars['refreshUrl']; ?>
order=<?php echo $this->_tpl_vars['column']['columnField'][$this->_tpl_vars['key']]; ?>
&ordertype=<?php if ($this->_tpl_vars['order']['order'] == $this->_tpl_vars['column']['columnField'][$this->_tpl_vars['key']]): ?><?php if ($this->_tpl_vars['order']['ordertype'] == 'desc'): ?>asc<?php else: ?>desc<?php endif; ?><?php else: ?>desc<?php endif; ?>"><?php echo $this->_tpl_vars['item']; ?>
</a></td>
				<?php endforeach; endif; unset($_from); ?>
				<td>Operating</td>
			</tr>
			<form id="listForm" name="listForm" action="" method="post">
			<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<tr<?php if ($this->_tpl_vars['key'] % 2 == 0): ?> class="Alternating"<?php endif; ?>>
					<td><input type="checkbox" name="ids[]" value="<?php echo $this->_tpl_vars['item']['id']; ?>
" class="listChk" /></td>
					<?php $_from = $this->_tpl_vars['column']['columnField']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ckey'] => $this->_tpl_vars['citem']):
?>
						<?php if ($this->_tpl_vars['citem'] == 'ordinal'): ?>
							<td><?php if (( $this->_tpl_vars['class_id'] == '' && $this->_tpl_vars['item']['hideColumn']['info_preview'] ) || $this->_tpl_vars['hideColumn']['info_preview']): ?><a href="?con=admin&ctl=info/&act=preview&class_id=<?php echo $this->_tpl_vars['item']['classId']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
" target="_blank" title="Click to view page"><?php echo $this->_tpl_vars['item'][$this->_tpl_vars['citem']]; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['item'][$this->_tpl_vars['citem']]; ?>
<?php endif; ?></td>
						<?php elseif ($this->_tpl_vars['citem'] == 'title'): ?>
							<td><?php if (( $this->_tpl_vars['class_id'] == '' && $this->_tpl_vars['item']['hideColumn']['info_edit'] ) || ( $this->_tpl_vars['class_id'] != '' && $this->_tpl_vars['hideColumn']['info_edit'] )): ?><a href="?con=admin&ctl=info/&act=edit&class_id=<?php echo $this->_tpl_vars['item']['classId']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
&noback=<?php echo $this->_tpl_vars['noback']; ?>
" title="Click to edit information"><?php echo $this->_tpl_vars['item'][$this->_tpl_vars['citem']]; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['item'][$this->_tpl_vars['citem']]; ?>
<?php endif; ?></td>
						<?php elseif ($this->_tpl_vars['citem'] == 'isHot' || $this->_tpl_vars['citem'] == 'isRecommended' || $this->_tpl_vars['citem'] == 'isTop' || $this->_tpl_vars['citem'] == 'isApproved'): ?>
							<td><?php if ($this->_tpl_vars['item'][$this->_tpl_vars['citem']]): ?><font color="FF0000">Yes</font><?php else: ?>No<?php endif; ?></td>
						<?php elseif ($this->_tpl_vars['citem'] == 'imageUrl'): ?>
							<td><a href="<?php if (( $this->_tpl_vars['class_id'] == '' && $this->_tpl_vars['item']['hideColumn']['pic'] ) || ( $this->_tpl_vars['class_id'] != '' && $this->_tpl_vars['hideColumn']['pic'] )): ?>javascript:infoPic(<?php echo $this->_tpl_vars['item']['id']; ?>
, 'info', 'id', 'imageUrl');<?php else: ?><?php if ($this->_tpl_vars['item']['imageUrl'] == ''): ?>javascript:void(0);<?php else: ?><?php echo $this->_tpl_vars['UPLOAD_PATH']; ?>
<?php echo $this->_tpl_vars['item']['imageUrl']; ?>
<?php endif; ?><?php endif; ?>"><?php if ($this->_tpl_vars['item'][$this->_tpl_vars['citem']] != ''): ?><font color="FF6600">Have</font><?php else: ?>Not<?php endif; ?></a></td>
						<?php elseif ($this->_tpl_vars['citem'] == 'bigImageUrl'): ?>
							<td><a href="<?php if (( $this->_tpl_vars['class_id'] == '' && $this->_tpl_vars['item']['hideColumn']['pic2'] ) || ( $this->_tpl_vars['class_id'] != '' && $this->_tpl_vars['hideColumn']['pic2'] )): ?>javascript:infoPic(<?php echo $this->_tpl_vars['item']['id']; ?>
, 'info', 'id', 'bigImageUrl');<?php else: ?><?php if ($this->_tpl_vars['item']['bigImageUrl'] == ''): ?>javascript:void(0);<?php else: ?><?php echo $this->_tpl_vars['UPLOAD_PATH']; ?>
<?php echo $this->_tpl_vars['item']['bigImageUrl']; ?>
<?php endif; ?><?php endif; ?>"><?php if ($this->_tpl_vars['item'][$this->_tpl_vars['citem']] != ''): ?><font color="FF6600">Have</font><?php else: ?>Not<?php endif; ?></a></td>
						<?php elseif ($this->_tpl_vars['citem'] == 'files'): ?>
							<td><a href="<?php if (( $this->_tpl_vars['class_id'] == '' && $this->_tpl_vars['item']['hideColumn']['file'] ) || ( $this->_tpl_vars['class_id'] != '' && $this->_tpl_vars['hideColumn']['file'] )): ?>javascript:infoFile(<?php echo $this->_tpl_vars['item']['id']; ?>
, 'info', 'id', 'files');<?php else: ?><?php if ($this->_tpl_vars['item']['files'] == ''): ?>javascript:void(0);<?php else: ?><?php echo $this->_tpl_vars['UPLOAD_PATH']; ?>
<?php echo $this->_tpl_vars['item']['files']; ?>
<?php endif; ?><?php endif; ?>"><?php if ($this->_tpl_vars['item'][$this->_tpl_vars['citem']] != ''): ?><font color="FF6600">Have</font><?php else: ?>Not<?php endif; ?></a></td>
						<?php elseif ($this->_tpl_vars['citem'] == 'createdUserId'): ?>
							<td><?php echo $this->_tpl_vars['item']['userName']; ?>
 (<?php echo $this->_tpl_vars['item']['userDisplayName']; ?>
)</td>
						<?php elseif ($this->_tpl_vars['citem'] == 'companyId'): ?>
							<td><?php if ($this->_tpl_vars['item']['companyName']): ?><?php echo $this->_tpl_vars['item']['companyName']; ?>
<?php else: ?><font style="color:#F60;">Is not specified, the enterprises</font><?php endif; ?></td>
						<?php elseif ($this->_tpl_vars['citem'] == 'createdDate' || $this->_tpl_vars['citem'] == 'lastModifiedDate'): ?>
							<td><?php echo smarty_function_int2string(array('str' => 'Y-m-d','time' => $this->_tpl_vars['item'][$this->_tpl_vars['citem']]), $this);?>
</td>
						<?php else: ?>
							<td><?php echo $this->_tpl_vars['item'][$this->_tpl_vars['citem']]; ?>
</td>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
					<td>
						<?php if (( $this->_tpl_vars['class_id'] == '' && $this->_tpl_vars['item']['hideColumn']['info_delete'] ) || ( $this->_tpl_vars['class_id'] != '' && $this->_tpl_vars['hideColumn']['info_delete'] )): ?><a href="<?php echo $this->_tpl_vars['refreshUrl']; ?>
act=delete&class_id=<?php echo $this->_tpl_vars['item']['classId']; ?>
&id=<?php echo $this->_tpl_vars['item']['id']; ?>
" class="lnkDelete" onclick="return chkDelete();"></a><?php endif; ?>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			</form>
			<tr class="listFtTr">
				<td colspan="<?php echo $this->_tpl_vars['column']['count']+2; ?>
"><?php echo $this->_tpl_vars['pager']; ?>
</td>
			</tr>
		</table>
	</div>
</div>

<div id="loading">Loading...<img src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/loading.gif" /></div>
</body>
</html>