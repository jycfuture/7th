<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 20:19:27
         compiled from "D:/www/ark/themes/en/city.htm" */ ?>
<?php /*%%SmartyHeaderCode:305815ade3fcf5785a6-81100957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a8670e9c0b5a01bf7b4b08b8766583614004fea' => 
    array (
      0 => 'D:/www/ark/themes/en/city.htm',
      1 => 1524514766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305815ade3fcf5785a6-81100957',
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
<section class="city container">
	<div class="conbg"></div>
	<div class="wrapper">
		<div class="city-hd">
			<ul class="clearfix ta-c fs-16">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('citys')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<li class="fl <?php if (!$_smarty_tpl->tpl_vars['k']->value){?>active<?php }?>"><a href="javascript:;" class="btn-style5"><span class="bg-color1-2"></span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
				<?php }} ?>
			</ul>
		</div>
		<div class="city-bd">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('citys')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<div class="bd-box clearfix" <?php if (!$_smarty_tpl->tpl_vars['k']->value){?>style="display: block;"<?php }?>>
				<div class="infobox">
					<div class="inTitle color-9 fs-18"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</b></div>
					<article class="info color-6">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

					</article>
				</div>
				<div class="imgbox">
					<img src="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo smarty_modifier_image($_smarty_tpl->tpl_vars['item']->value['imageUrl'],319,245,'cut');?>
" alt="">
				</div>
			</div>
			<?php }} ?>
			<div class="bd-box clearfix">
				<div class="infobox">
					<div class="inTitle color-9 fs-18"><b>墨尔本站</b></div>
					<article class="info color-6">
						<p>自方舟国际速递成立以来，本着诚实、守信的原则，对外充分发挥积累多年的人脉优势，充分利用多年从事物流行业而发展起来的国际网络，对内积极完善各项管理， 诚恳的学习先进的物流管理模式。同时和业内巨头Australia Post，TNT，DHL的合作也使得公司的业务足迹遍布全球。公司创建的理念是以实现地球村模式为目标，地球是人类在茫茫宇宙中的那一叶方舟，我们同舟共进。</p>
						<p>在公司的支持和员工的共同努力下，我们以成为澳纽本地最好的速递公司为目标，以做好物流业伙伴关系的心态，狠抓快递时效，强化服务意识，不仅仅得到了海内外进出口商家的一致好评，还被淘宝，天猫，苏宁易购等电商巨头推荐为一级海外直邮快递。</p>
					</article>
				</div>
				<div class="imgbox">
					<img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/cityimg.jpg" alt="">
				</div>
			</div>
			<div class="bd-box clearfix">
				<div class="infobox">
					<div class="inTitle color-9 fs-18"><b>布里斯班站</b></div>
					<article class="info color-6">
						<p>自方舟国际速递成立以来，本着诚实、守信的原则，对外充分发挥积累多年的人脉优势，充分利用多年从事物流行业而发展起来的国际网络，对内积极完善各项管理， 诚恳的学习先进的物流管理模式。同时和业内巨头Australia Post，TNT，DHL的合作也使得公司的业务足迹遍布全球。公司创建的理念是以实现地球村模式为目标，地球是人类在茫茫宇宙中的那一叶方舟，我们同舟共进。</p>
						<p>在公司的支持和员工的共同努力下，我们以成为澳纽本地最好的速递公司为目标，以做好物流业伙伴关系的心态，狠抓快递时效，强化服务意识，不仅仅得到了海内外进出口商家的一致好评，还被淘宝，天猫，苏宁易购等电商巨头推荐为一级海外直邮快递。</p>
					</article>
				</div>
				<div class="imgbox">
					<img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/cityimg.jpg" alt="">
				</div>
			</div>
		</div>
		<nav class="newslist color-11">
			<div class="inTitle color-9 fs-18"><b>最新公告</b></div>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gg')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['k']->value<10){?>
				<li>
					<i class="icon"></i>
					<a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
news/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="clearfix">
						<span class="fl"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span>
						<time class="fr"><?php echo $_smarty_tpl->tpl_vars['item']->value['publishedDate'];?>
</time>
					</a>
				</li>
				<?php }?>
				<?php }} ?>
			</ul>
		</nav>
	</div>
</section>
<?php $_template = new Smarty_Internal_Template('part-footperson.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<script type="text/javascript">
    $(".city-hd li").each(function(i) {
        $(this).click(function() {
            $(this).addClass("active").siblings().removeClass('active');
            $(".city-bd .bd-box").eq(i).show().siblings().hide();
        })
    })
</script>
</body>
</html>
