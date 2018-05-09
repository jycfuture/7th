<?php /* Smarty version Smarty-3.0.6, created on 2018-03-27 12:24:10
         compiled from "D:/www/vstar/themes/en/innovation-details.htm" */ ?>
<?php /*%%SmartyHeaderCode:98435aba37ea4c9382-42935369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7cbca3535b47694523dd38d2869ffd9d2f457ed' => 
    array (
      0 => 'D:/www/vstar/themes/en/innovation-details.htm',
      1 => 1522153449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98435aba37ea4c9382-42935369',
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
<div class="m-inContainer" id="m-inContainer">
    <div class="m-page-innovdetails m-page-proDetails">
        <div class="commonTit">
            <div class="m-btnBack">
                <a href="innovation.html"><i class="icon"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-arrow-left.png" alt=""></i>Back
                </a>
            </div>
            <h2>Project Name</h2>
            <h3><a href="">www.projectaddress.com.au</a></h3>
        </div>
        <div class="m-proContent">
            <div class="wrapper">
                <div class="m-proDetails">
                    <div class="m-proimg">
                        <?php if ($_smarty_tpl->getVariable('pics')->value){?>
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pics')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
                                <li class="swiper-slide">
                                    <img src="<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['pic'];?>
" alt="">
                                </li>
                             <?php }} ?>
                            </ul>
                        </div>
                        <?php }?>
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                    </div>
                    <div class="m-proTxt">
                        <ul class="clearfix">
                            <li>
                                <div class="inbox">
                                    <small class="mt-txt">Return</small>
                                    <div class="mb-txt">
                                        <i class="icon"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-icon10.png" alt=""></i>
                                        <p><?php echo $_smarty_tpl->getVariable('info')->value['intro'];?>
</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inbox">
                                    <small class="mt-txt">Website</small>
                                    <div class="mb-txt">
                                        <i class="icon"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-icon8.png" alt=""></i>
                                        <a href="<?php echo $_smarty_tpl->getVariable('info')->value['sourceHtml'];?>
"><?php echo $_smarty_tpl->getVariable('info')->value['sourceHtml'];?>
</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inbox">
                                    <small class="mt-txt">Total Investment</small>
                                    <div class="mb-txt">
                                        <i class="icon"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-icon9.png" alt=""></i>
                                        <p>$ <?php echo $_smarty_tpl->getVariable('info')->value['alias'];?>
</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="m-proArticle">
                    <div class="tit">Overview</div>
                    <div class="article">
                        <?php echo $_smarty_tpl->getVariable('info')->value['content'];?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
