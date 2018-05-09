<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 19:00:58
         compiled from "D:/www/ark/themes/en/part-header.htm" */ ?>
<?php /*%%SmartyHeaderCode:326155ade2d6ac0c740-06744129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce5678982717ef625e6f9a07facbcb411327b17' => 
    array (
      0 => 'D:/www/ark/themes/en/part-header.htm',
      1 => 1524510057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326155ade2d6ac0c740-06744129',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<header class="header">
    <div class="topBar bg-color1 clearfix">
        <div class="left fl color-white fs-16">
            <div class="fl email mr60"><i class="icon"></i><span>sales@arkexpress.com.au</span></div>
            <div class="fl phone"><i class="icon"></i><span>全澳统一客服热线: 1300 275 (ARK) 999</span></div>
        </div>
        <div class="right fr color-white fs-20">
            <div class="time fl color-white fs-16 mr60">
                <span class="time1 fl pl35 mr25">THU 05:05</span>
                <span class="time2 fl pl35">THU 02:05 </span>
            </div>
            <div class="btns fl mr30 pt15">
                <a href="login.html" class="btn w100 color-white fl fs-12 ta-c btn-style1 mr20">登录 </a>
                <a href="regist.html" class="btn w100 color-white fl fs-12 ta-c btn-style2">注册</a>

            </div>
            <div class="price mt15 fl ta-c w195 color-white fs-12">1 AUD = 5.2 CNY</div>
        </div>
    </div>
    <div class="topcon">
        <div class="wrapper clearfix">
            <a class="logo fl" href="index.html"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/logo.png"></a>
            <ul class="fr ta-c fs-16 nav">
                <li class="fl <?php if ($_smarty_tpl->getVariable('menu')->value=='default'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
">首页</a></li>
                <li class="fl <?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='service'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
service">服务指南</a></li>
                <li class="fl <?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='news'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
news">公告通知</a></li>
                <li class="fl <?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='help'){?> active<?php }?>"><a href="http://www.arkexpress.com.au/cgi-bin/GInfo.dll?Login" target="_blank">自助平台</a></li>
                <li class="fl <?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='find'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
find">网点查询</a></li>
                <li class="fl <?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='partner'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
partner">加盟投资</a></li>
                <li class="fl <?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='city'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
city">城市分站</a></li>
                <li class="fl <?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='about'){?> active<?php }?>"><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
about">关于我们</a></li>
            </ul>
            <a href="javascript:;" class="btn-style3 w220 ta-c color-white fs-20 fl"><span>在线下单</span></a>
        </div>
    </div>
</header>