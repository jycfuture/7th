<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 17:26:38
         compiled from "D:/www/ark/themes/en/news.htm" */ ?>
<?php /*%%SmartyHeaderCode:104365ade174e665129-10172661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccfd883e4ee4c4603ac397c395ddd712fab20580' => 
    array (
      0 => 'D:/www/ark/themes/en/news.htm',
      1 => 1524504397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104365ade174e665129-10172661',
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
		<div class="inTitle color-9 fs-18"><b>公告通知</b></div>
		<nav class="newslist color-11">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
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
				<?php }} ?>
			</ul>
		</nav>
		<section class="page">
			<!--<div class="pageinfo ta-r color-11">共2页，当前为<span class="color-9">第1页</span>，每页10条</div>-->
			<!--<div class="page-pagination ta-c fs-12 ta-c">-->
				<!--<a href="" class="first">首页</a>-->
				<!--<a href="">&lt;</a>-->
				<!--<a href="">1</a>-->
				<!--<a href="">2</a>-->
				<!--<a href="">&gt;</a>-->
				<!--<a href="" class="last">尾页</a>-->
			<!--</div>-->
			<?php echo $_smarty_tpl->getVariable('page')->value['pageStr'];?>

		</section>
	</div>
</section>
<?php $_template = new Smarty_Internal_Template('part-footperson.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
