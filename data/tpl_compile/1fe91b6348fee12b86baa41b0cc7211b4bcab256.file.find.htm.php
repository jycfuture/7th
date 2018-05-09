<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 19:39:09
         compiled from "D:/www/ark/themes/en/find.htm" */ ?>
<?php /*%%SmartyHeaderCode:17105ade365d03b930-17504662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe91b6348fee12b86baa41b0cc7211b4bcab256' => 
    array (
      0 => 'D:/www/ark/themes/en/find.htm',
      1 => 1524512348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17105ade365d03b930-17504662',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_image')) include 'D:\www\ark\core\smarty\plugins\modifier.image.php';
?><!doctype html>
<html>
<head>
	<?php $_template = new Smarty_Internal_Template('part-head.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</head>
<body>
<?php $_template = new Smarty_Internal_Template('part-header.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<section class="inbanner bg-img" style="background-image: url(<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/inbanner1.jpg)">
</section>
<section class="find container">
	<div class="conbg"></div>
	<div class="wrapper">
		<div class="inTitle color-9 fs-18"><b>网点查询</b></div>
		<div class="clearfix findtab">
			<ul class="fl ta-c fs-16 searchcity">
				<li class="fl <?php if (!$_smarty_tpl->getVariable('areaId')->value){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
find" class="btn-style5"><span class="bg-color1-2"></span>全部</a></li>
				<li class="fl <?php if ($_smarty_tpl->getVariable('areaId')->value==1){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
find&areaId=1" class="btn-style5"><span class="bg-color1-2"></span>悉尼</a></li>
				<li class="fl <?php if ($_smarty_tpl->getVariable('areaId')->value==2){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
find&areaId=2" class="btn-style5"><span class="bg-color1-2"></span>墨尔本</a></li>
				<li class="fl <?php if ($_smarty_tpl->getVariable('areaId')->value==3){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
find&areaId=3" class="btn-style5"><span class="bg-color1-2"></span>布里斯班</a></li>
			</ul>
			<div class="searchcon fr">
				<form method="get">
				<button type="submit" class="searchBtn fl"></button>
				<input type="text" class="input-style1 fl" name="keyword" value="<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
">
				</form>
			</div>
		</div>
		<nav class="findlist">
			<ul class="clearfix">
				<?php if (!$_smarty_tpl->getVariable('finds')->value){?>
				<div class="nodata ta-c">
					<i class="icon"></i>
					<p class="color-11">暂时没有您所输入的网点<br>请重新查询，谢谢</p>
				</div>
				<?php }else{ ?>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('finds')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
				<li>
					<div class="img bg-img" style="background-image: url(<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo smarty_modifier_image($_smarty_tpl->tpl_vars['item']->value['imageUrl'],173,144,'cut');?>
);"></div>
					<div class="info">
						<div class="name"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
						<dl class="fs-12">
							<dd>营业时间: <?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
</dd>
							<dd>联系电话: <?php echo $_smarty_tpl->tpl_vars['item']->value['pageTitle'];?>
</dd>
							<dd>地址: <?php echo $_smarty_tpl->tpl_vars['item']->value['author'];?>
</dd>
						</dl>
					</div>
				</li>
				<?php }} ?>
				<?php }?>
			</ul>
		</nav>
	</div>
</section>
<?php $_template = new Smarty_Internal_Template('part-footperson.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
