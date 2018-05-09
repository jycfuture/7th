<?php /* Smarty version Smarty-3.0.6, created on 2018-05-04 01:29:45
         compiled from "D:/www/7th/themes/zh-cn/newsdetail.htm" */ ?>
<?php /*%%SmartyHeaderCode:139285aebb789bafd57-50995325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98c2fd9db8b9ae4fa1e9ddb1de27d606161b6e9f' => 
    array (
      0 => 'D:/www/7th/themes/zh-cn/newsdetail.htm',
      1 => 1525397384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139285aebb789bafd57-50995325',
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
<section class="conntainer bg-img pt40 pb50">
	<div class="wrapper">
		<div class="conbox">
			<div class="intitle fs-18 color-white clearfix"><b><?php echo $_smarty_tpl->getVariable('info')->value['title'];?>
</b><time class="fs-14 fr">发布日期：<?php echo $_smarty_tpl->getVariable('info')->value['publishedDate'];?>
</time></div>
			<div class="newsdetail pt40 pb40 pr60 pl55">
				<article class="scroll-bd article color-white fs-14">
					<?php echo $_smarty_tpl->getVariable('info')->value['content'];?>

				</article>
				<div class="detailbtns ta-c mt50 pt15">
					<a class="btn-style3 mr15 w210" href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
<?php echo $_smarty_tpl->getVariable('class')->value;?>
">返回列表页</a>
					<a class="btn-style4 w210" href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
">返回首页</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
