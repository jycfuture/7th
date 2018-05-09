<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 23:26:49
         compiled from "D:/www/ark/themes/en/index.htm" */ ?>
<?php /*%%SmartyHeaderCode:313915ade6bb959b7c7-16543546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85575b71a48c1d8193f99905de79454ed829384' => 
    array (
      0 => 'D:/www/ark/themes/en/index.htm',
      1 => 1524524723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313915ade6bb959b7c7-16543546',
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
<section class="HomeBan bg-img">
	<div class="conbox">
		<div class="bannews mb55">
			<div class="title color-white fs-16">最新公告</div>
			<nav>
				<ul class="clearfix fs-12 color-white">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gg')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['k']->value<10){?>
					<li><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
news/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="link-1"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
					<?php }?>
					<?php }} ?>
				</ul>
			</nav>
		</div>
		<div class="clearfix mb25 banapp">
			<div class="fl ewmbox mr30">
				<div class="title fs-18 color-1 pb50 ls-20">手机扫一扫 优惠带着跑</div>
				<div class="wechat">
					<div class="top pl15"><i class="icon"></i><span class="tit color-2 fs-10">微信服务号:arkexp</span></div>
					<div class="img pt5 ta-l"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/ewm1.jpg"></div>
				</div>
				<div class="weibo">
					<div class="top pl15"><i class="icon"></i><span class="tit color-3 fs-10">官方微博: <br>澳大利亚方舟国际速递</span></div>
					<div class="img ta-r"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/ewm2.jpg"></div>
				</div>
				<div class="bg"></div>
			</div>
			<div class="fl appbox">
				<div class="title mb15 fs-18 color-1 ls-20">下载App <br>最新资讯 一手掌握</div>
				<div class="clearfix appstore">
					<div class="left fl">
						<img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/ewm3.jpg">
					</div>
					<div class="app1"><a href=""><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/appstore1.png"></a></div>
					<div class="app2"><a href=""><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/appstore2.png"></a></div>
				</div>
			</div>
		</div>
		<div class="banform clearfix">
			<nav class="color-white fl">
				<ul class="clearfix">
					<li class="fl list1">
						<div class="top mb25"><a href="http://www.arkexpress.com.au/cgi-bin/GInfo.dll?Login"><span class="fs-14"><b class="fs-20">在线下单</b><br>告别手写，就是这么简单</span></a></div>
						<div class="bottom ta-c"><a href="find.html"><span class="fs-17">网点查询</span></a></div>
					</li>
					<li class="fl list2 ml15 mr15">
						<div class="top ta-c mb25"><a href="http://express.arkexpress.com.au/upload-id.php"><span><b class="fs-20">上传证件</b></span></a></div>
						<div class="bottom ta-c"><a href=""><span class="fs-17">上门取件</span></a></div>
					</li>
					<li class="fl list3">
						<div class="top mb25 ta-c"><a href="http://express.arkexpress.com.au/idcheck"><span><b class="fs-20">上传证件核查</b></span></a></div>
						<div class="bottom ta-c"><a href=""><span class="fs-17">包裹线路</span></a></div>
					</li>
				</ul>
			</nav>
			<div class="fr formbox">
				<textarea class="textarea1 fs-14 fl" placeholder="请输入您要查询的单号"></textarea>
				<div class="btns fl">
					<a href="" class="btn btn1-1 ta-c color-white"><i class="fa fa-search color-4 m-auto fs-12"></i><b>立即查询</b></a>
					<a href="" class="btn btn1-2 ta-c color-5"><i class="fa fa-trash-o color-white m-auto fs-12"></i><b>清空</b></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="conntainer">
	<div class="Hpart1">
		<div class="wrapper">
			<div class="HTitle color-1 Htitle1 m-auto">
				<p class="fs-24">在线下单流程</p>
				<p>告别手写,就是那么简单</p>
			</div>
			<nav class="list-style1">
				<ul class="clearfix">
					<li class="fl ta-c">
						<div class="icon-list1 icon-1"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-6 mb10"><b><span class="fs-18">①</span>选择路线</b></div>
							<div class="info fs-12 color-7">不同的物品会有<br>专门的清关路线</div>
						</div>
					</li>
					<li class="fl ta-c">
						<div class="icon-list1 icon-2"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-6 mb10"><b><span class="fs-18">②</span>输入收寄件人信息</b></div>
							<div class="info fs-12 color-7">请根据要求正确<br>填写相关信息</div>
						</div>
					</li>
					<li class="fl ta-c">
						<div class="icon-list1 icon-3"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-6 mb10"><b><span class="fs-18">③</span>输入物品和数量</b></div>
							<div class="info fs-12 color-7">为了保证通关顺利请如实<br>填写物品的种类和数量</div>
						</div>
					</li>
					<li class="fl ta-c">
						<div class="icon-list1 icon-4"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-6 mb10"><b><span class="fs-18">④</span>检查订单</b></div>
							<div class="info fs-12 color-7">检查订单，有时能够及时<br>发现误填的信息</div>
						</div>
					</li>
					<li class="fl ta-c">
						<div class="icon-list1 icon-5"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-6 mb10"><b><span class="fs-18">⑤</span>支付订单</b></div>
							<div class="info fs-12 color-7">转账，余额，微信，支<br>付宝多种方式供您选择</div>
						</div>
					</li>
					<li class="fl ta-c">
						<div class="icon-list1 icon-6"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-6 mb10"><b>下单完成</b></div>
							<div class="info fs-12 color-7">恭喜，您的订单<br>已经提交</div>
						</div>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="Hpart2 bg-img">
		<div class="wrapper">
			<div class="HTitle color-white Htitle2 m-auto">
				<p class="fs-24">配送流程</p>
				<div class="fs-10 en">Logistics distribution</div>
			</div>
			<nav class="list-style2">
				<ul class="clearfix">
					<li class="fl ta-c">
						<div class="icon-list2 icon-1"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-white mb10"><span class="fs-18">①</span>在线下单</div>
						</div>
					</li>
					<li class="fl ta-c">
						<div class="icon-list2 icon-2"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-white mb10"><span class="fs-18">②</span>打印贴单</div>
						</div>
					</li>
					<li class="fl ta-c">
						<div class="icon-list2 icon-3"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-white mb10"><span class="fs-18">③</span>物流配送</div>
						</div>
					</li>
					<li class="fl ta-c">
						<div class="icon-list2 icon-4"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-white mb10"><span class="fs-18">④</span>海关清关</div>
						</div>
					</li>
					<li class="fl ta-c">
						<div class="icon-list2 icon-5"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-white mb10"><span class="fs-18">⑤</span>国内转运</div>
						</div>
					</li>
					<li class="fl ta-c">
						<div class="icon-list2 icon-6"></div>
						<div class="txt ta-c">
							<div class="title fs-16 color-white mb10"><span class="fs-18">⑥</span>签收包裹</div>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		
	</div>
	<div class="Hpart3 bg-img">
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
</section>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
