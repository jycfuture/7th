<?php /* Smarty version Smarty-3.0.6, created on 2018-05-04 01:43:34
         compiled from "D:/www/7th/themes/zh-cn/news.htm" */ ?>
<?php /*%%SmartyHeaderCode:191975aebbac6bdb733-84685457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8649e06c94ef783dccd14f04532780d82ca5c82e' => 
    array (
      0 => 'D:/www/7th/themes/zh-cn/news.htm',
      1 => 1525398201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191975aebbac6bdb733-84685457',
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
<section class="conntainer bg-img pt100 pb145">
	<div class="wrapper">
		<div class="conbox">
			<div class="intitle fs-18 color-white"><b><?php echo $_smarty_tpl->getVariable('classname')->value;?>
</b></div>
			<div class="newslist pt15 pb60 pr70 pl40">
				<nav class="scroll-bd">
					<ul>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
						<li class="clearfix fs-16"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
news/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><time class="fs-14">发布日期：<?php echo $_smarty_tpl->tpl_vars['item']->value['publishedDate'];?>
</time></li>
						<?php }} ?>
					</ul>
				</nav>
					
			</div>
		</div>
	</div>
</section>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
