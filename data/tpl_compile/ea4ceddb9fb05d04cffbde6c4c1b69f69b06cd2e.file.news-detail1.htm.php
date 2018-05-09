<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 23:11:45
         compiled from "D:/www/ark/themes/en/news-detail1.htm" */ ?>
<?php /*%%SmartyHeaderCode:56295ade68317a32e7-39958476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea4ceddb9fb05d04cffbde6c4c1b69f69b06cd2e' => 
    array (
      0 => 'D:/www/ark/themes/en/news-detail1.htm',
      1 => 1524525102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56295ade68317a32e7-39958476',
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
<section class="news container">
	<div class="conbg"></div>
	<div class="wrapper">
		<section class="news-detail">
			<?php if ($_smarty_tpl->getVariable('info')->value['imageUrl']){?><div class="imgbox ta-c"><img src="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->getVariable('info')->value['imageUrl'];?>
" alt=""></div><?php }?>
			<div class="articlebox color-11">
				<div class="clearfix arttitle">
					<div class="title fl color-9 fs-18"><b><?php echo $_smarty_tpl->getVariable('info')->value['title'];?>
</b></div>
					<time class="fr">发布日期：<?php echo $_smarty_tpl->getVariable('info')->value['publishedDate'];?>
</time>
				</div>
				<article class="article">
			     <?php echo $_smarty_tpl->getVariable('info')->value['content'];?>

					<div class="clearfix">
						<div class="artlogo ta-r fr"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/logo.png"><br><b>敬上</b></div>
					</div>
				</article>
			</div>
			<div class="ta-c detailbtn">
				<a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
job" class="fs-16 ta-c btn-style4 mr10 va-t color-6"><span class="bg-color1-1"></span>返回列表页</a>
				<a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
" class="fs-16 ta-c btn-style4 va-t color-6"><span class="bg-color1-1"></span>返回首页</a>
			</div>
		</section>
	</div>
</section>
<?php $_template = new Smarty_Internal_Template('part-footperson.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
