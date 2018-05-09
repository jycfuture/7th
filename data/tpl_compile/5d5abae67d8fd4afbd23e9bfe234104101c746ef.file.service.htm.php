<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 03:55:10
         compiled from "D:/www/ark/themes/en/service.htm" */ ?>
<?php /*%%SmartyHeaderCode:288955add591ee31691-99058214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d5abae67d8fd4afbd23e9bfe234104101c746ef' => 
    array (
      0 => 'D:/www/ark/themes/en/service.htm',
      1 => 1524455710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288955add591ee31691-99058214',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
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
<section class="service container">
	<div class="conbg"></div>
	<div class="wrapper">
		<div class="inTitle color-9 fs-18"><b>服务指南</b></div>
		<nav class="serviceList">
			<ul class="clearfix ta-c fs-24">
				<li class="fl no-touch">
					<div class="bg"></div>
					<a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
service1" class="icon-hover">
						<i class="icon-list4 icon-1 icon-notices"></i>
						<span>资料下载中心</span>
					</a>
				</li>
				<li class="fl no-touch">
					<div class="bg"></div>
					<a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
service2" class="icon-hover">
						<i class="icon-list4 icon-2 icon-notices"></i>
						<span>快递发货流程</span>
					</a>
				</li>
				<li class="fl no-touch">
					<div class="bg"></div>
					<a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
service3" class="icon-hover">
						<i class="icon-list4 icon-notices icon-3"></i>
						<span>扣件原因分析</span>
					</a>
				</li>
				<li class="fl no-touch">
					<div class="bg"></div>
					<a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
service4" class="icon-hover">
						<i class="icon-list4 icon-notices icon-4"></i>
						<span>运单背书说明<br>(承运条款)</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</section>
<div class="footperson">
    <div class="Htip">
        <div class="wrapper">
            <div class="clearfix">
                <div class="person"></div>
                <dl class="fl color-white fs-15">
                    <dd class="fl"><b>快速运输<br>高效清关</b></dd>
                    <dd class="fl"><b>状态更新<br>精准追踪</b></dd>
                    <dd class="fl"><b>安全妥投<br>力保不失</b></dd>
                </dl>
                <div class="fr">
                    <p class="color-white fs-27 title"><b>国际物流APP在手</b></p>
                    <p class="color-white fs-15">随时随地，轻松查单、下单、上传证件</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
