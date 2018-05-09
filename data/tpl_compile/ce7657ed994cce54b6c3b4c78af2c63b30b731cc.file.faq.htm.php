<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 22:43:36
         compiled from "D:/www/ark/themes/en/faq.htm" */ ?>
<?php /*%%SmartyHeaderCode:29385ade6198192c42-30919996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce7657ed994cce54b6c3b4c78af2c63b30b731cc' => 
    array (
      0 => 'D:/www/ark/themes/en/faq.htm',
      1 => 1524523350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29385ade6198192c42-30919996',
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
<section class="inbanner bg-img" style="background-image: url(dist/images/faq.jpg)">
</section>
<section class="faq container">
	<div class="wrapper">
		<div class="inTitle color-9 fs-18"><b>常见问题</b></div>
		<nav class="faqlist color-11">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('faqs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<li>
					<a href="javascript:;" class="fs-16"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
					<div class="info">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

					</div>
				</li>
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
	$(".faqlist li").each(function() {
		$(this).find('a').click(function() {
			$(this).parent().toggleClass("active").siblings().removeClass('active');
		})
	});
</script>
</body>
</html>
