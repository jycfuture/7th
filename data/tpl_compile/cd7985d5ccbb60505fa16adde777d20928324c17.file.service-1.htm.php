<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 16:44:01
         compiled from "D:/www/ark/themes/en/service-1.htm" */ ?>
<?php /*%%SmartyHeaderCode:286105ade0d5106e053-70857235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd7985d5ccbb60505fa16adde777d20928324c17' => 
    array (
      0 => 'D:/www/ark/themes/en/service-1.htm',
      1 => 1524501840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286105ade0d5106e053-70857235',
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
		<div class="inTitle color-9 fs-18"><b>资料下载中心</b></div>
		<nav class="downlist">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('download')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
				<li>
					<a href="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['files'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

					</a>
				</li>
				<?php }} ?>
			</ul>
		</nav>
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
</body>
</html>
