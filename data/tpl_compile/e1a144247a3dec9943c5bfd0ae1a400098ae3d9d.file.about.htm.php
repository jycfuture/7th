<?php /* Smarty version Smarty-3.0.6, created on 2018-03-27 11:22:03
         compiled from "D:/www/vstar/themes/en/about.htm" */ ?>
<?php /*%%SmartyHeaderCode:106455aba295b3cc748-76238544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1a144247a3dec9943c5bfd0ae1a400098ae3d9d' => 
    array (
      0 => 'D:/www/vstar/themes/en/about.htm',
      1 => 1522149506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106455aba295b3cc748-76238544',
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
<div class="m-innerBanner" style="background-image: url(<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/bgimg6.jpg);">
    <div class="bgmaskimg"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/bgimg4.png" alt=""></div>
    <div class="tit">About VStar Group</div>
    <div class="m-arrow-down">
        <a href="#m-inContainer"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-arrow-down.png" alt=""></a>
    </div>
</div>
<div class="m-inContainer" id="m-inContainer">
    <div class="aboutUsbox">
        <div class="commonTit">
            <div class="line line1"></div>
            <h2>Who We Are</h2>
        </div>
        <div class="mArticle">
            <div class="wrapper">
                <div class="infobox">
                    <p>VSTAR GROUP AUSTRALIA, formerly known as ASIAN PACIFIC PROPERTY DEVELOPMENT GROUP, was established in 2007; mainly focus on real estate development in Victoria, Australia.  After company’s business gradually diversified, including real estate development, construction project, real estate fund management, real estate constructions and development management, real estate sales and rentals, short-term rental management, personal financial planning and credit services, immigration and consulting services, etc. In 2017, we integrate business sectors and establish Vstar Group Pty Ltd. </p>
                    <p>Vstar Groupheadquarter office is located in Victoria, Melbourne, Australia. Currently, Vstar Group has branched and offices in Beijing, Shanghai and Hongkong.</p>
                </div>
                <div class="m-btnbox">
                    <a href="" class="m-btnstyle1 m-readmore"><span> View Our Services</span><i class="m-arrow"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-arrow-right.png" alt=""></i></a>
                </div>
            </div>
        </div>
        <div class="usAdvantage">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('service')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <div class="advantageItems clearfix">
                <div class="m-adrow m-textbox">
                    <?php if (!$_smarty_tpl->tpl_vars['k']->value){?>
                    <div class="mToptit">
                        <div class="cssTable">
                            <div class="cssTd">
                                Why Vstar Group?
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <div class="mInbox">
                        <div class="cssTable">
                            <div class="cssTd">
                                <a href="javascript:void(0);" class="m-adname"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                <div class="m-info">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-adrow m-adimgbox" style="background-image: url('<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['imageUrl'];?>
');"></div>
            </div>
            <?php }} ?>

        </div>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
