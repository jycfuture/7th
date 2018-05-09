<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 17:05:34
         compiled from "D:/www/ark/themes/en/service-4.htm" */ ?>
<?php /*%%SmartyHeaderCode:245865ade125ee746d2-37349338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32df205a78045da55cfc9e5abfd92b9538f3426b' => 
    array (
      0 => 'D:/www/ark/themes/en/service-4.htm',
      1 => 1524503134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245865ade125ee746d2-37349338',
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
		<div class="inTitle color-9 fs-18"><b>运单背书说明(承运条款)</b></div>
		<div class="clearfix service-4">
			<aside class="Leftnav">
				<ul class="ta-c color-11">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('terms')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<li class="<?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>active<?php }?>" data="<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
"><a href="javascript:;"><i class="icon"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
					<?php }} ?>
				</ul>
			</aside>
			<nav class="bd-box">
				<dl>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('terms')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<dd>
						<a href="" name="<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
"></a>
						<div class="title fs-20 color-12"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</b></div>
						<article class="info fs-14 color-11">
							<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

						</article>
					</dd>
					<?php }} ?>
				</dl>
			</nav>
		</div>
		<div class="servicetip fs-16 color-10 ta-c"><b>如有任何疑问，请致电我们1300 （ARK）275 999、发邮件至 info@arkexpress.com.au</b></div>
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
<script type="text/javascript">
//左侧滚动
var _wintop = $(window).scrollTop();
var _scrollbox = $(".service-4").offset().top;
var _box1 = $(".bd-box a[name=1]").offset().top-20;
var _box2 = $(".bd-box a[name=2]").offset().top-20;
var _box3 = $(".bd-box a[name=3]").offset().top-20;
var _box4 = $(".bd-box a[name=4]").offset().top-20;
var _box5 = $(".bd-box a[name=5]").offset().top-20;

if(_wintop>_scrollbox){
	$(".service-4 .Leftnav").addClass("active");
}
else{
	$(".service-4 .Leftnav").removeClass("active");
}
//滚动监测位置
$(window).scroll(function() {
	_wintop = $(window).scrollTop();
	if(_wintop>_scrollbox){
		$(".service-4 .Leftnav").addClass("active");
	}
	else{
		$(".service-4 .Leftnav").removeClass("active");
	}
	if(_wintop >= _box1 && _wintop < _box2){
		$(".Leftnav li[data=1]").addClass("active").siblings().removeClass("active");
	}
	else if(_wintop >= _box2 && _wintop < _box3){
		$(".Leftnav li[data=2]").addClass("active").siblings().removeClass("active");
	}
	else if(_wintop >= _box3 && _wintop < _box4){
		$(".Leftnav li[data=3]").addClass("active").siblings().removeClass("active");
	}
	else if(_wintop >= _box4 && _wintop < _box5){
		$(".Leftnav li[data=4]").addClass("active").siblings().removeClass("active");
	}
	else if(_wintop >= _box5){
		$(".Leftnav li[data=5]").addClass("active").siblings().removeClass("active");
	}
});
//点击滚动相应位置
$(".Leftnav li").each(function(i) {
	$(this).click(function() {
		$(this).addClass("active").siblings().removeClass("active");
		var itop = $(".bd-box dd").eq(i).find("a").offset().top-10;
		$("html,body").stop().animate({"scrollTop":itop}, 500);
	})
})
</script>
</body>
</html>
