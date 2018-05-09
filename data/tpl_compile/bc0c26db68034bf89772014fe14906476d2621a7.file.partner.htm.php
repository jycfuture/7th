<?php /* Smarty version Smarty-3.0.6, created on 2018-05-04 03:21:16
         compiled from "D:/www/7th/themes/zh-cn/partner.htm" */ ?>
<?php /*%%SmartyHeaderCode:192135aebd1ac26b071-95518657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc0c26db68034bf89772014fe14906476d2621a7' => 
    array (
      0 => 'D:/www/7th/themes/zh-cn/partner.htm',
      1 => 1525404074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192135aebd1ac26b071-95518657',
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
<section class="conntainer bg-1 bg-img pt30 pb140">
	<div class="wrapper">
		<div class="conbox">
			<div class="intitle fs-24 ls-20 color-white clearfix">合作伙伴</div>
			<div class="partner clearfix pt75 pb55 pr95 pl95">
				<div class="partnerart fs-13 ta-c lh-24em color-white pb50">
				<?php echo $_smarty_tpl->getVariable('infoclass')->value['content'];?>

				</div>
				<div class="partnerlist pl40">
					<nav class="scroll-bd">
						<ul class="clearfix ta-c grow">
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('partner')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
							<li class="col12-md-3"><img src="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['imageUrl'];?>
"></li>
							<?php }} ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
