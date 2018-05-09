<?php /* Smarty version Smarty-3.0.6, created on 2013-01-02 19:07:40
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\system/pick/confirm.htm" */ ?>
<?php /*%%SmartyHeaderCode:2639650e414fc68d4d3-42259896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7f3f4021b443614f6abb40ae2a9d12dc20cf69' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\system/pick/confirm.htm',
      1 => 1357124736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2639650e414fc68d4d3-42259896',
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
<script type="text/javascript">
function check (form)
{
	

	return true;
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=system/pick" class="lnkReturn">返回列表</a> 
			<a href="?con=admin&ctl=system/pick&act=delete&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();">删除</a> 
		</div>
		<table class="listTable">
			<tr class="listHdTr">
				<td align="left" style="padding-left:20px;">采集记录</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<tr<?php if ($_smarty_tpl->tpl_vars['key']->value%2==0){?> class="Alternating"<?php }?>>
					<td align="left">管理员 [ <?php if ($_smarty_tpl->tpl_vars['item']->value['userName']==''&&$_smarty_tpl->tpl_vars['item']->value['admin_id']==-1){?>隐藏<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['userName'];?>
<?php }?> ] 于 <?php echo smarty_function_int2string(array('str'=>'Y-m-d H:i:s','time'=>$_smarty_tpl->tpl_vars['item']->value['pick_time']),$_smarty_tpl);?>
 使用此规则进行了数据采集，获得：<?php echo $_smarty_tpl->tpl_vars['item']->value['intro'];?>
，导出的分类ID为：<?php  $_smarty_tpl->tpl_vars['ss'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['outClassId']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['classlist']['iteration']=0;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ss']->key => $_smarty_tpl->tpl_vars['ss']->value){
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['ss']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['classlist']['iteration']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['classlist']['iteration']>1){?>, <?php }?><?php echo $_smarty_tpl->tpl_vars['ss']->value;?>
<?php }} ?></td>
				</tr>
			<?php }} ?>
		</table>
		<form action="?con=admin&ctl=system/pick&act=do&id=<?php echo $_smarty_tpl->getVariable('pick_id')->value;?>
" method="post" target="pick_frame" onsubmit="return check(this);">
			<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
				<tr class="editHdTr">
					<td colspan="2">采集设置</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="采集后是否自动审核？">采集后自动审核</em></td>
					<td class="editRtTd"><input type="checkbox" id="autoCheck" name="autoCheck" value="1" /><label for="autoCheck">自动审核</label></td>
				</tr>
				<!--tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="每采集到指定的信息后就写入数据库并清除内存占用，可提高采集效率，0或空不限制">每批采集数量</em></td>
					<td class="editRtTd"><input type="text" name="perCount" value="5" size="5" /></td>
				</tr-->
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="当成功采集指定条数后，将停止采集，0或空不限制">采集最大数量</em></td>
					<td class="editRtTd"><input type="text" name="maxCount" value="0" size="5" /></td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="指定待采集网址列表，注意只会从指定的列表中采集">网址列表</em></td>
					<td class="editor">
						<textarea name="htmlList" class="text" style="width:98%; height:100px;"></textarea>
					</td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkDoPick" /> 
						<a href="?con=admin&ctl=system/pick" class="lnkReturn">返回列表</a> 
					</td>
				</tr>
			</table>
		</form>
		<iframe name="pick_frame" width="100%" frameborder="0" scrolling="no"></iframe>
	</div>
</div>
</body>
</html>