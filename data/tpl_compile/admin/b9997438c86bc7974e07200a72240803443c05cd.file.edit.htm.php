<?php /* Smarty version Smarty-3.0.6, created on 2013-01-02 19:03:14
         compiled from "D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\system/pick/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:2314450e413f2ef8dc0-78530825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9997438c86bc7974e07200a72240803443c05cd' => 
    array (
      0 => 'D:/project/php//CoreCMSV1.0_en/core/common/skin/admin\\system/pick/edit.htm',
      1 => 1314055380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2314450e413f2ef8dc0-78530825',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_strpad')) include 'D:\project\php\CoreCMSV1.0_en\core\smarty\plugins\function.strpad.php';
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
oWindow/oWindow.js"></script>
<script type="text/javascript">
function check (form)
{
	var name = document.getElementsByName('data[name]')[0];
	if (name.value == '')
	{
		alert('请填写规则名称！');
		name.focus();
		return false;
	}

	return true;
}

function addLine ()
{
	$('#lineArray').append('<tr>' + $('#lineArray tr:first').html() + '</tr>');
}

function removeLine (obj)
{
	if ($('#lineArray tr').length < 2)
		alert('最后一个无法删除！');
	else
		$(obj).parent().parent().parent().remove();
}
</script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="?con=admin&ctl=system/pick" class="lnkReturn">返回列表</a> 
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_delete']){?><a href="?con=admin&ctl=system/pick&act=delete&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" class="lnkDelete" onclick="return chkDelete();">删除</a> <?php }?>
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_doTest']){?><a href="?con=admin&ctl=system/pick&act=doTest&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
">测试</a> <?php }?>
			<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_do']){?><a href="?con=admin&ctl=system/pick&act=do&confirm=1&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
">开始采集</a><?php }?>
		</div>
		<table class="tabTable" id="tableTab">
			<tr>
				<td><a class="current" href="#"><em class="tip" tips="针对目标列表页面">目标网址设置</em></a></td>
				<td id="tdInfoClass"><a href="#"><em class="tip" tips="针对点击进入详细信息页">详细信息页设置</em></a></td>
			</tr>
		</table>
		<form action="?con=admin&ctl=system/pick&act=edit&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
" method="post" onsubmit="return check(this);">
			<div id="panes">
				<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable">
					<tr class="editHdTr">
						<td colspan="2">目标网址设置</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="如果选择了复制源，那么当前的规则将会被源规则覆盖！">复制源</em></td>
						<td class="editRtTd">从 <select name="copyfrom">
							<option value="">--请选择需要复制的采集规则--</option>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('picks')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['id']==$_smarty_tpl->getVariable('data')->value['copyfrom']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
							<?php }} ?>
						</select> 复制规则</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd">规则名称</td>
						<td class="editRtTd"><input name="data[name]" value="<?php echo $_smarty_tpl->getVariable('data')->value['name'];?>
" type="text" size="30" class="text" /></td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="采集目标页面的编码方式，如果测试得到的中文内容是乱码，则肯定是编码不正确。">目标页面编码</em></td>
						<td class="editRtTd">
							<input id="gb2312" name="data[charset]" value="GB2312" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['charset']=='GB2312'){?> checked<?php }?> /><label for="gb2312">GB2312</label>
							<input id="utf-8" name="data[charset]" value="UTF8" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['charset']=='UTF8'){?> checked<?php }?> /><label for="utf-8">UTF-8</label>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd">目标页面设置</td>
						<td class="editRtTd">
							<input id="list[itemtype]1" name="list[itemtype]" value="1" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['list']['itemtype']=='1'){?> checked<?php }?> /><label for="list[itemtype]1">批量自动生成</label>
							<input id="list[itemtype]2" name="list[itemtype]" value="2" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['list']['itemtype']=='2'){?> checked<?php }?> /><label for="list[itemtype]2">手工指定</label>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="支持批量采集设置，即相同规则的多个分类，可以通过批量设置进行采集">采集与导出</em></td>
						<td class="editRtTd editor">
							<table width="100%" id="lineArray">
								<?php  $_smarty_tpl->tpl_vars['ss'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value['list']['start']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['ss']->key => $_smarty_tpl->tpl_vars['ss']->value){
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['ss']->key;
?>
									<tr>
										<td class="editor">
											自动生成网址：<em class="tip" tips="在匹配网址中使用(*)"></em>
											<p>匹配网址：<input type="text" name="list[url][]" value="<?php echo $_smarty_tpl->getVariable('data')->value['list']['url'][$_smarty_tpl->tpl_vars['kk']->value];?>
" size="80" class="text" /></p>
											<p style="padding-top:5px;">(*)从<input name="list[start][]" value="<?php echo $_smarty_tpl->getVariable('data')->value['list']['start'][$_smarty_tpl->tpl_vars['kk']->value];?>
" type="text" size="6" class="text" />到<input name="list[end][]" value="<?php echo $_smarty_tpl->getVariable('data')->value['list']['end'][$_smarty_tpl->tpl_vars['kk']->value];?>
" type="text" size="6" class="text" /> &nbsp; 递增：<input name="list[step][]" value="<?php echo $_smarty_tpl->getVariable('data')->value['list']['step'][$_smarty_tpl->tpl_vars['kk']->value];?>
" type="text" size="6" class="text" /></p>
											手动指定和添加网址，一行一个网址：<em class="tip" tips="手工指定的网址会与批量自动生成的网址合并"></em>
											<textarea name="list[extend][]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['list']['extend'][$_smarty_tpl->tpl_vars['kk']->value];?>
</textarea>
										</td>
										<td>
											<span class="removeLine"><a href="javascript:void(0);" onclick="removeLine(this);">删除</a></span>
											<select name="data[outClassId][]">
												<option value="">--采集数据之后导出的分类--</option>
												<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('class')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php if (md5($_smarty_tpl->getVariable('data')->value['outClassId'][$_smarty_tpl->tpl_vars['kk']->value])==md5($_smarty_tpl->tpl_vars['item']->value['id'])){?> selected<?php }?>><?php echo smarty_function_strpad(array('str'=>'','len'=>$_smarty_tpl->tpl_vars['item']->value['level'],'pad'=>'-'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
												<?php }} ?>
											</select> <em class="tip" tips="点击采集后，会将采集到的信息存入该信息分类下，默认为未审核，但可以通过勾选采集前确认页面的“是否审核”复选框来自动审核"></em>
										</td>
									</tr>
								<?php }} ?>
							</table>
							<p><a href="javascript:addLine();">添加</a></p>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd">列表区域开始HTML</td>
						<td class="editor">
							<textarea name="list[htmlstart]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['list']['htmlstart'];?>
</textarea>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd">列表区域结束HTML</td>
						<td class="editor">
							<textarea name="list[htmlend]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['list']['htmlend'];?>
</textarea>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd">网址过滤</td>
						<td class="editor">
							<textarea name="list[urlfilter]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['list']['urlfilter'];?>
</textarea>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="类似图片列表形式">如果链接中存在图片</em></td>
						<td class="editRtTd">
							<input id="list[img]" name="list[img]" value="" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['list']['img']!='1'){?> checked<?php }?> /><label for="list[img]">不处理</label>
							<input id="list[img]1" name="list[img]" value="1" type="radio"<?php if ($_smarty_tpl->getVariable('data')->value['list']['img']=='1'){?> checked<?php }?> /><label for="list[img]1">采集为缩略图</label>
						</td>
					</tr>
				</table>
				<table width="98%" align="center" height="100%" border="0" cellspacing="0" cellpadding="0" class="editTable" style="display:none;">
					<tr class="editHdTr">
						<td colspan="2">详细信息页设置</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="如果目标页面使用JS来处理链接地址，可以在这里填上真实的网址前辍，另外，当系统获取的详细信息页网址不正确时，也可以在此填写。">JS父级网址</em></td>
						<td class="editor">
							<input type="text" name="item[parentUrl]" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['item']['parentUrl'];?>
" size="50" />
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="进行测试的时候，详细信息的采集是用此页面进行测试的">详细信息页测试网址</em></td>
						<td class="editor">
							<input type="text" name="item[url]" class="text" value="<?php echo $_smarty_tpl->getVariable('data')->value['item']['url'];?>
" size="50" /> 如果为空，默认为获取到的第一个详细信息页
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="提供内容区域的开始HTML，可以提高采集的效率">详细信息页内容区域开始HTML</em></td>
						<td class="editor">
							<textarea name="item[htmlstart]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['htmlstart'];?>
</textarea>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="关键字的规则是系统内置的，这里可以填写针对关键字进行过滤的规则">关键字过滤</em></td>
						<td class="editor">
							<textarea name="item[keywords_replace]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['keywords_replace'];?>
</textarea>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="文章描述的规则是系统内置的，这里可以填写针对文章描述进行过滤的规则">文章描述过滤</em></td>
						<td class="editor">
							<textarea name="item[description_replace]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['description_replace'];?>
</textarea>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="第一个框输入文章规则，第二个框输入文章过滤规则">文章标题规则</em></td>
						<td class="editor">
							<textarea name="item[title]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['title'];?>
</textarea>
							<textarea name="item[title_replace]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['title_replace'];?>
</textarea>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="第一个框输入文章规则，第二个框输入文章过滤规则">作者规则</em></td>
						<td class="editor">
							<textarea name="item[author]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['author'];?>
</textarea>
							<textarea name="item[author_replace]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['author_replace'];?>
</textarea>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="第一个框输入文章规则，第二个框输入文章过滤规则">文章来源规则</em></td>
						<td class="editor">
							<textarea name="item[source]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['source'];?>
</textarea>
							<textarea name="item[source_replace]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['source_replace'];?>
</textarea>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="第一个框输入文章规则，第二个框输入文章过滤规则">发布时间规则</em></td>
						<td class="editor">
							<textarea name="item[publishdate]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['publishdate'];?>
</textarea>
							<textarea name="item[publishdate_replace]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['publishdate_replace'];?>
</textarea>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="第一个框输入文章规则，第二个框输入文章过滤规则">文章内容规则</em></td>
						<td class="editor">
							<textarea name="item[content]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['content'];?>
</textarea>
							<textarea name="item[content_replace]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['content_replace'];?>
</textarea>
							<input id="item[downimg]" name="item[downimg]" type="checkbox" value="1"<?php if ($_smarty_tpl->getVariable('data')->value['item']['downimg']){?> checked<?php }?> /><label for="item[downimg]"><em class="tip" tips="如果没有勾选，那么内容中出现的图片则会保持引用状态。">下载内容中的图片</em></label>
							<a href="javascript:void(0);" onclick="oWindowShow('<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
oWindow/common_reg');">常用规则</a>
						</td>
					</tr>
					<tr class="editTr">
						<td class="editLtTd"><em class="tip" tips="第一个框输入分页规则，第二个框输入分页过滤规则">文章分页规则</em></td>
						<td class="editor">
							<textarea name="item[page]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['page'];?>
</textarea>
							<textarea name="item[page_replace]" class="text" style="width:98%; height:100px;"><?php echo $_smarty_tpl->getVariable('data')->value['item']['page_replace'];?>
</textarea>
						</td>
					</tr>
				</table>
			</div>
			<table class="editTable">
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="?con=admin&ctl=system/pick" class="lnkReturn">返回列表</a> 
						<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_doTest']){?><a href="?con=admin&ctl=system/pick&act=doTest&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
">测试</a> <?php }?>
						<?php if ($_smarty_tpl->getVariable('hideColumn')->value['pick_do']){?><a href="?con=admin&ctl=system/pick&act=do&confirm=1&id=<?php echo $_smarty_tpl->getVariable('data')->value['id'];?>
">开始采集</a><?php }?>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>