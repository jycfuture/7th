<?php /* Smarty version Smarty-3.0.6, created on 2018-05-04 02:31:20
         compiled from "D:/www/7th/themes/zh-cn/part-header.htm" */ ?>
<?php /*%%SmartyHeaderCode:326155aebc5f885f1e8-21511736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e233e5bda51dba7da85fb8f8b73220e7675de4f' => 
    array (
      0 => 'D:/www/7th/themes/zh-cn/part-header.htm',
      1 => 1525401063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326155aebc5f885f1e8-21511736',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<header class="header <?php if ($_smarty_tpl->getVariable('menu')->value=='default'){?>indheader<?php }?>">
    <div class="wrapper clearfix">
        <div class="topbar pt25 color-white clearfix">
            <div class="fr">
                <div class="country fl mr25 fs-17">
                    <div class="icon fl mr25"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/topico1.png" class="mr5"><?php echo $_smarty_tpl->getVariable('time1')->value;?>
 </div>
                    <div class="icon fl mr25"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/topico2.png" class="mr5"><?php echo $_smarty_tpl->getVariable('time')->value;?>
 </div>
                </div>
                <div class="price fs-16 fl shandow-style1"><span>1 EUR = <?php echo $_smarty_tpl->getVariable('configs')->value['rate'];?>
 CNY</span></div>
            </div>
        </div>
        <div class="clearfix">
            <a class="logo fl" href="index.html"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/logo.png"></a>
            <nav class="fr topnav">
                <ul class="fl color-white pr40 fs-14">
                    <li class="fl <?php if ($_smarty_tpl->getVariable('menu')->value=='default'){?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
" class="navA">首页</a>
                    </li>
                    <li class="fl">
                        <a href="" class="navA">在线下单</a>
                    </li>
                    <li class="fl">
                        <a href="" class="navA">包裹追踪</a>
                    </li>
                    <li class="fl">
                        <a href="" class="navA">上传证件</a>
                    </li>
                    <li class="fl">
                        <a href="" class="navA">APP下载</a>
                    </li>
                    <li class="fl <?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='news'){?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
news1" class="navA ">公告通知</a>
                        <dl class="fs-12 ta-c">
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
news1">新闻公告</a></dd>
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
news2">保险理赔</a></dd>
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
news3">免责申明</a></dd>
                        </dl>
                    </li>
                    <li class="fl <?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='service'){?>active<?php }?>" >
                        <a href="" class="navA">服务指南</a>
                        <dl class="fs-12 ta-c">
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
faqs">FAQ</a></dd>
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
price">线路价格</a></dd>
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
guide">下单指南</a></dd>
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
service">服务网点</a></dd>
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
domicile">上门取货</a></dd>
                        </dl>
                    </li>
                    <li class="fl <?php if ($_smarty_tpl->getVariable('baseCategory')->value['alias']=='about'){?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
about" class="navA">关于我们</a>
                        <dl class="fs-12 ta-c">
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
contact">联系我们</a></dd>
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
about">公司介绍</a></dd>
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
partner">合作伙伴</a></dd>
                            <dd><a href="<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
join">加盟合作</a></dd>
                        </dl>
                    </li>
                </ul>
                <div class="log-rgt fl">
                    <a href="" class="loginbtn btn-style1 mr15">登录</a>
                    <a href="" class="rgeistbtn btn-style2"><span>注册</span></a>
                </div>
            </nav>
        </div>

    </div>
</header>