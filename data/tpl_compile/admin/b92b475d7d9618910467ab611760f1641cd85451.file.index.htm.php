<?php /* Smarty version Smarty-3.0.6, created on 2013-01-02 19:03:12
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\system/pick/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:1882750e413f0ab91a5-65393362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b92b475d7d9618910467ab611760f1641cd85451' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\system/pick/index.htm',
      1 => 1314055380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1882750e413f0ab91a5-65393362',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_int2string')) include 'D:\project\php\CoreCMSV1.0_en\core\smarty\plugins\function.int2string.php';
?><!DOCTYPE HTML>
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
<script>
function searchSubmit ()
{
	var createTime		= document.getElementsByName('createTime')[0].value;
	var updateTime		= document.getElementsByName('updateTime')[0].value;
	var type			= document.getElementsByName('type')[0].value;
	var keyword			= document.getElementsByName('keyword')[0].value;
	var perPageCount	= document.getElementsByName('perPageCount')[0].value;

	window.location.href = '?con=admin&ctl=system/pick&createTime=' + createTime + '&updateTime=' + updateTime + '&type=' + type + '&perPageCount=' + perPageCount + '&keyword=' + encodeURI(keyword);
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
" class="lnkRefresh">刷新列表</a>
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_add']){?><a href="?con=admin&ctl=system/pick&act=add" class="lnkAdd">添加采集规则</a><?php }?>
		</div>
		<div class="search">
			<select onchange="searchSubmit();" name="createTime">
				<option value=""<?php if ($_smarty_tpl->getVariable('search')->value['createTime']==''){?> selected<?php }?>>创建时间</option>
				<option value="today"<?php if ($_smarty_tpl->getVariable('search')->value['createTime']=='today'){?> selected<?php }?>>今天</option>
				<option value="week"<?php if ($_smarty_tpl->getVariable('search')->value['createTime']=='week'){?> selected<?php }?>>本周</option>
				<option value="month"<?php if ($_smarty_tpl->getVariable('search')->value['createTime']=='month'){?> selected<?php }?>>本月</option>
				<option value="year"<?php if ($_smarty_tpl->getVariable('search')->value['createTime']=='year'){?> selected<?php }?>>今年</option>
			</select>
			<select onchange="searchSubmit();" name="updateTime">
				<option value=""<?php if ($_smarty_tpl->getVariable('search')->value['updateTime']==''){?> selected<?php }?>>更新时间</option>
				<option value="today"<?php if ($_smarty_tpl->getVariable('search')->value['updateTime']=='today'){?> selected<?php }?>>今天</option>
				<option value="week"<?php if ($_smarty_tpl->getVariable('search')->value['updateTime']=='week'){?> selected<?php }?>>本周</option>
				<option value="month"<?php if ($_smarty_tpl->getVariable('search')->value['updateTime']=='month'){?> selected<?php }?>>本月</option>
				<option value="year"<?php if ($_smarty_tpl->getVariable('search')->value['updateTime']=='year'){?> selected<?php }?>>今年</option>
			</select>
			<select name="type">
				<option value="name"<?php if ($_smarty_tpl->getVariable('search')->value['type']=='name'){?> selected<?php }?>>规则名称</option>
				<option value="createUser"<?php if ($_smarty_tpl->getVariable('search')->value['type']=='createUser'){?> selected<?php }?>>发布用户帐号</option>
			</select>
			<input type="text" style="width:100px;" maxlength="50" name="keyword" value="<?php echo $_smarty_tpl->getVariable('search')->value['keyword'];?>
" />
			<a onclick="searchSubmit();" class="lnkSearch">搜索</a>
		</div>
		<table class="listTable">
			<tr class="listHdTr">
				<td><a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
order=name&ordertype=<?php if ($_smarty_tpl->getVariable('order')->value['order']=='name'){?><?php if ($_smarty_tpl->getVariable('order')->value['ordertype']=='desc'){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?>desc<?php }?>">规则名称</a></td>
				<td width="6%"><a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
order=charset&ordertype=<?php if ($_smarty_tpl->getVariable('order')->value['order']=='charset'){?><?php if ($_smarty_tpl->getVariable('order')->value['ordertype']=='desc'){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?>desc<?php }?>"><em class="tip" tips="采集目标页面的编码方式，如果测试得到的中文内容是乱码，则肯定是编码不正确。">编码</em></a></td>
				<td width="16%"><a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
order=createUserId&ordertype=<?php if ($_smarty_tpl->getVariable('order')->value['order']=='createUserId'){?><?php if ($_smarty_tpl->getVariable('order')->value['ordertype']=='desc'){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?>desc<?php }?>"><em class="tip" tips="规则的创建者">创建者</em></a></td>
				<td width="12%"><a href="<?php echo $_smarty_tpl->getVariable('refreshUrl')->value;?>
order=update_time&ordertype=<?php if ($_smarty_tpl->getVariable('order')->value['order']=='update_time'){?><?php if ($_smarty_tpl->getVariable('order')->value['ordertype']=='desc'){?>asc<?php }else{ ?>desc<?php }?><?php }else{ ?>desc<?php }?>"><em class="tip" tips="规则最后修改时间">更新时间</em></a></td>
				<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_doTest']){?><td width="6%"><em class="tip" tips="测试采集规则，建议在采集之前先进行测试。">测试</em></td><?php }?>
				<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_do']){?><td width="6%"><em class="tip" tips="正式采集，需要注意：是否选择了导出分类。">采集</em></td><?php }?>
				<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_delete']){?><td width="6%">删除</td><?php }?>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr<?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?> class="Alternating"<?php }?>>
					<td><?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_edit']){?><a href="?con=admin&ctl=system/pick&act=edit&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['charset'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['item']->value['userName'];?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value['userDisplayName'];?>
)</td>
					<td><?php echo smarty_function_int2string(array('str'=>'Y-m-d H:i:s','time'=>$_smarty_tpl->tpl_vars['item']->value['update_time']),$_smarty_tpl);?>
</td>
					<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_doTest']){?><td><a href="?con=admin&ctl=system/pick&act=doTest&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">测试</a></td><?php }?>
					<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_do']){?><td><a href="?con=admin&ctl=system/pick&act=do&confirm=1&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">采集</a></td><?php }?>
					<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_delete']){?><td><a href="?con=admin&ctl=system/pick&act=delete&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();"></a></td><?php }?>
				</tr>
			<?php }} ?>
			<tr class="listFtTr">
				<td colspan="9"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>