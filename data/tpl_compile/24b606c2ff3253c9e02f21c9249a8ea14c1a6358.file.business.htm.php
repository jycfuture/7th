<?php /* Smarty version Smarty-3.0.6, created on 2018-03-27 12:11:05
         compiled from "D:/www/vstar/themes/en/business.htm" */ ?>
<?php /*%%SmartyHeaderCode:152945aba34d9071356-88405957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24b606c2ff3253c9e02f21c9249a8ea14c1a6358' => 
    array (
      0 => 'D:/www/vstar/themes/en/business.htm',
      1 => 1522152662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152945aba34d9071356-88405957',
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
dist/images/bgimg3.jpg);">
    <div class="bgmaskimg"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/bgimg4.png" alt=""></div>
    <div class="tit">Business Segment</div>
    <div class="m-arrow-down">
        <a href="#m-inContainer"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-arrow-down.png" alt=""></a>
    </div>
</div>
<div class="m-inContainer" id="m-inContainer">
    <div class="m-tabBox m-tabBox1">
        <div class="m-tabMenu">
            <ul class="clearfix">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('business_brief')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <li>
                    <div class="cssTable">
                        <div class="cssTd">
                            <i class="icon"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-icon<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
.png" alt=""></i>
                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
                        </div>
                    </div>
                </li>
                <?php }} ?>
            </ul>
        </div>
        <div class="m-tabMainbox">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('business_brief')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <div class="m-Block">
                <div class="inbox">
                    <p><?php echo $_smarty_tpl->tpl_vars['item']->value['intro'];?>
</p>
                </div>
            </div>
          <?php }} ?>
        </div>
    </div>
    <div class="m-mobShow">
        <div class="businessBotbox">
            <ul class="clearfix">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('business_brief')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <li class="">
                    <div class="bottxt">
                        <div class="cssTable">
                            <div class="cssTd">
                                <div class="iconbox"><i class="icon" style="background-image: url(<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/sprite<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
.png);"></i></div>
                                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="toptxt">
                        <div class="inbox">
                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['intro'];?>
</p>
                        </div>
                    </div>
                </li>
                <?php }} ?>
            </ul>
        </div>
    </div>
    <div class="projectsListbox">
        <div class="commonTit2 commonTit">
            <div class="line line1"></div>
            <h2>Our Projects</h2>
        </div>
        <div class="m-proListbox">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('business')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <div class="m-proitems clearfix">
                <div class="m-prorow m-imgbox" style="background-image: url(<?php echo $_smarty_tpl->getVariable('UPLOAD_PATH')->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['imageUrl'];?>
);"></div>
                <div class="m-prorow m-txtbox">
                    <div class="cssTable">
                        <div class="cssTd">
                            <div class="innerbox">
                                <h2 class="m-proname"><a href="<?php echo $_smarty_tpl->getVariable('http_www_root')->value;?>
business/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h2>
                                <div class="listbox">
                                    <ul>
                                        <li>
                                            <i class="icon"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-icon7.png" alt=""></i>
                                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['intro'];?>
</p>
                                        </li>
                                        <li>
                                            <i class="icon"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-icon8.png" alt=""></i>
                                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['sourceHtml'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['sourceHtml'];?>
</a></p>
                                        </li>
                                        <li>
                                            <i class="icon"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-icon9.png" alt=""></i>
                                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
</p>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <a href="<?php echo $_smarty_tpl->getVariable('http_www_root')->value;?>
business/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="m-btnstyle1 m-readmore"><span> View Project</span><i class="m-arrow"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-arrow-right.png" alt=""></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
        <?php if ($_smarty_tpl->getVariable('page')->value['pageStr']){?>
        <div class="pageListbox">
            <ul class="clearfix">
                <?php echo $_smarty_tpl->getVariable('page')->value['pageStr'];?>

            </ul>
        </div>
        <?php }?>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</body>
</html>
