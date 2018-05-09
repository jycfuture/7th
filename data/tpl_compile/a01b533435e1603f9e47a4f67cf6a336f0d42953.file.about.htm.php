<?php /* Smarty version Smarty-3.0.6, created on 2018-05-04 02:44:00
         compiled from "D:/www/7th/themes/zh-cn/about.htm" */ ?>
<?php /*%%SmartyHeaderCode:38345aebc8f0028630-20350177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01b533435e1603f9e47a4f67cf6a336f0d42953' => 
    array (
      0 => 'D:/www/7th/themes/zh-cn/about.htm',
      1 => 1525401838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38345aebc8f0028630-20350177',
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
<section class="conntainer bg-1 bg-img pt40 pb250">
	<div class="wrapper">
		<div class="conbox">
			<div class="intitle fs-24 ls-20 color-white clearfix">公司介绍</div>
			<div class="about clearfix pt65 pb65 pr55 pl65">
				<div class="aboutart fl fs-13 lh-22em color-white wp50">
					<article class="scroll-bd">
					<?php echo $_smarty_tpl->getVariable('infoclass')->value['content'];?>

					</article>
				</div>
				<div class="imgbox wp50 fr pl40">
					<img src="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->getVariable('infoclass')->value['imageUrl'];?>
">
				</div>
			</div>
		</div>
	</div>
</section>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
