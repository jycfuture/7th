<?php /* Smarty version Smarty-3.0.6, created on 2013-01-02 19:03:25
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\system/pick/doTest.htm" */ ?>
<?php /*%%SmartyHeaderCode:1425350e413fddbfd76-36892995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ceed3dd344a488cf68ccdc560d1714c7f6ab37' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\system/pick/doTest.htm',
      1 => 1332749046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1425350e413fddbfd76-36892995',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
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
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=system/pick&act=doTest&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" class="lnkRefresh">Refresh the list</a> 
			<a href="?con=admin&ctl=system/pick" class="lnkReturn"></a> 
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_edit']){?><a href="?con=admin&ctl=system/pick&act=edit&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
">编辑规则</a> <?php }?>
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_do']){?><a href="?con=admin&ctl=system/pick&act=do&confirm=1&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
">开始采集</a><?php }?>
		</div>
		<table class="listTable">
			<tr class="listHdTr">
				<td align="left" style="padding-left:20px;"><em class="tip" tips="点击网址可查看该网址的详细采集结果">部分网址</em></td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
				<tr<?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?> class="Alternating"<?php }?>>
					<td align="left"><a href="?con=admin&ctl=system/pick&act=doTest&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
&url=<?php echo $_smarty_tpl->tpl_vars['items']->value[1];?>
#a1" title="点击查看详细采集结果"><?php echo $_smarty_tpl->tpl_vars['items']->value[0];?>
</a></td>
				</tr>
			<?php }} ?>
		</table>
		<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
			<tr class="editHdTr">
				<td>第一条信息采集结果<a name="a1"></a></td>
			</tr>
			<tr class="editTr"><td class="editRtTd">缩略图：[ <a href="<?php echo $_smarty_tpl->getVariable('item')->value['imageUrl'][0];?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('item')->value['imageUrl'][1];?>
</a> ]</td></tr>
			<tr class="editTr"><td class="editRtTd">文章标题：[ <?php echo $_smarty_tpl->getVariable('item')->value['title'];?>
 ]</td></tr>
			<tr class="editTr"><td class="editRtTd">文章作者：[ <?php echo $_smarty_tpl->getVariable('item')->value['author'];?>
 ] &nbsp; 文章来源：[ <?php echo $_smarty_tpl->getVariable('item')->value['source'];?>
 ] &nbsp; 发布时间：[ <?php echo $_smarty_tpl->getVariable('item')->value['publishdate'];?>
 ]</td></tr>
			<tr class="editTr"><td class="editRtTd">文章关键字：[ <?php echo $_smarty_tpl->getVariable('item')->value['keywords'];?>
 ]</td></tr>
			<tr class="editTr"><td class="editRtTd">文章描述：[ <?php echo $_smarty_tpl->getVariable('item')->value['description'];?>
 ]</td></tr>
			<tr class="editTr"><td class="editRtTd">文章正文：[ <?php echo $_smarty_tpl->getVariable('item')->value['content'];?>
 ]</td></tr>
		</table>
		<table class="editTable">
			<tr class="editFtTr">
				<td>
					<a href="?con=admin&ctl=system/pick" class="lnkReturn">返回列表</a> 
					<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_edit']){?><a href="?con=admin&ctl=system/pick&act=edit&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
">编辑规则</a> <?php }?>
					<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_do']){?><a href="?con=admin&ctl=system/pick&act=do&confirm=1&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
">开始采集</a><?php }?>
				</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>