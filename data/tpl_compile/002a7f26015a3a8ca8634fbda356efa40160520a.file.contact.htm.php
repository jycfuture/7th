<?php /* Smarty version Smarty-3.0.6, created on 2018-03-28 00:31:54
         compiled from "D:/www/vstar/themes/en/contact.htm" */ ?>
<?php /*%%SmartyHeaderCode:253665abae27ab7e3d0-58639377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '002a7f26015a3a8ca8634fbda356efa40160520a' => 
    array (
      0 => 'D:/www/vstar/themes/en/contact.htm',
      1 => 1522197096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253665abae27ab7e3d0-58639377',
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
<div class="pageContact" style="background-image: url(<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/bgimg2.jpg);">
    <div class="header fixedHeader contactHead">
        <div class="wrapper clearfix">
            <div class="logobox">
                <a href="index.html">
                    <img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/logo.png" alt="">
                </a>
            </div>
            <div class="headNavbox">
                <ul class="clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="business-segment.html">Business Segment</a></li>
                    <li><a href="innovation.html">Innovation Industry Investment</a></li>
                    <li class="active"><a href="contact.html">Contact Us</a></li>
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
    <div class="footer contactFooter">
        <div class="topbox clearfix">
            <div class="row lrow">
                <div class="cssTable">
                    <div class="cssTd">
                        <div class="fContactbox">
                            <div class="tit">Contact Us</div>
                            <div class="tabMenu uppercase">
                                <ul class="clearfix">
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shops')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
                                    <li><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</li>
                                    <?php }} ?>
                                </ul>
                            </div>
                            <div class="tabMain">
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shops')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
                                <div class="block">
                                    <ul class="clearfix">
                                        <li class="">
                                            <i class="icon-contact icon-1"></i>
                                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['intro'];?>
</p>
                                        </li>
                                        <li>
                                            <i class="icon-contact icon-2"></i>
                                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['keywords'];?>
</p>
                                        </li>
                                    </ul>
                                    <ul class="clearfix">
                                        <li>
                                            <i class="icon-contact icon-3"></i>
                                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['pageTitle'];?>
</p>
                                        </li>
                                    </ul>
                                </div>
                                <?php }} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rrow fContactform">
                <div class="fFormbox">
                    <div class="m-mobShow">
                        <div class="commonTit">
                            <h2>Enquire</h2>
                        </div>
                    </div>
                    <form method="post"  class="clearfix inquire">
                    <div class="mainbox">
                        <div class="m-input-box1">
                            <input type="text" name="firstname" class="m-input-style1" placeholder="First Name">
                        </div>
                        <div class="m-input-box1">
                            <input type="text" name="lastname" class="m-input-style1" placeholder="Last Name">
                        </div>
                        <div class="m-input-box1">
                            <input type="tel" name="phone" class="m-input-style1" placeholder="Phone">
                        </div>
                        <div class="m-input-box1">
                            <input type="email" name="email" class="m-input-style1" placeholder="Email">
                        </div>
                        <div class="m-textarea-box1">
                            <textarea type="text" name="message" class="m-textarea-style1" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="m-btnSubmit m-btnstyle2">submit <i class="m-arrow m-mobShow"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/m-arrow-right.png" alt=""></i></button>
                    </form>
                </div>
                <div class="tabMap">
                    <img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/contact_map.png" alt="">
                    <ul class="clearfix">
                        <li class="li_1"><i class="icon-contact icon-1"></i></li>
                        <li class="li_2"><i class="icon-contact icon-1"></i></li>
                        <li class="li_3"><i class="icon-contact icon-1"></i></li>
                        <!--<li class="li_4"><i class="icon-contact icon-1"></i></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <?php $_template = new Smarty_Internal_Template('part-footer1.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    </div>
</div>
<?php $_template = new Smarty_Internal_Template('part-footer2.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<style>
    .response{display:none;text-align: left;color: red;padding: 5px 0;}
</style>
<script>
    $('.inquire').submit(function(){

        var _form = $(this);
        var _action = '<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
inquire.php';
        _form.find('.response').remove();
        _form.find(':submit').before('<p class="response">sending...</p>');
        _form.find(".response").css('display','block');
        var form = _form.get(0);
        _form.find(':submit').attr('disabled', true);

        $.post(_action, {
            firstname: form.firstname.value,
            lastname: form.lastname.value,
            email: form.email.value,
            phone: form.phone.value,
            message: form.message.value
        }, function(data){
            _form.find('.response').remove();
            if (data=='1') {
                $('.inquire')[0].reset();
                _form.find(':submit').before('<p class="response">The message has been sent. Thank you for your support. We will contact you later</p>');
                _form.find(".response").css('display','block');
                _form.find(':submit').attr('disabled', false);
            }else{
                _form.find(':submit').before('<p class="response">'+data+'</p>');
                _form.find(".response").css('display','block');
                _form.find(':submit').attr('disabled', false);
            }
        });
        return false;
    });
</script>
</body>
</html>
