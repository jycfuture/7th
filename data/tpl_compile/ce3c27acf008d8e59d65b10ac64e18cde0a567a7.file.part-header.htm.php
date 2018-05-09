<?php /* Smarty version Smarty-3.0.6, created on 2018-03-27 11:48:08
         compiled from "D:/www/vstar/themes/en/part-header.htm" */ ?>
<?php /*%%SmartyHeaderCode:191145aba2f785f6329-13137352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce3c27acf008d8e59d65b10ac64e18cde0a567a7' => 
    array (
      0 => 'D:/www/vstar/themes/en/part-header.htm',
      1 => 1522151271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191145aba2f785f6329-13137352',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="header fixedHeader">
    <div class="wrapper clearfix">
        <div class="logobox">
            <a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
">
                <img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/logo.png" alt="">
            </a>
        </div>
        <div class="headNavbox">
            <ul class="clearfix">
                <li class="<?php if ($_smarty_tpl->getVariable('menu')->value=='default'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
">Home</a></li>
                <li class="<?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='about'){?>active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
about">About Us</a></li>
                <li class="<?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='business'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
business">Business Segment</a></li>
                <li class="<?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='innovation'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
innovation">Innovation Industry Investment</a></li>
                <li class="<?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='contact'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="m-btnOpen">
            <i></i>
            <i></i>
            <i></i>
        </div>
        <div class="changeLan">
            <div class="ptxt">EN</div>
            <div class="ctxt">
                <a href="">中</a>
            </div>
        </div>
    </div>
</div>