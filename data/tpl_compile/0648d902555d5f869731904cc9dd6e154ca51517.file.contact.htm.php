<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 22:51:55
         compiled from "D:/www/ark/themes/en/contact.htm" */ ?>
<?php /*%%SmartyHeaderCode:98915ade638bdea9e9-49042359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0648d902555d5f869731904cc9dd6e154ca51517' => 
    array (
      0 => 'D:/www/ark/themes/en/contact.htm',
      1 => 1524523912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98915ade638bdea9e9-49042359',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <?php $_template = new Smarty_Internal_Template('part-head.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</head>
<body>
    
    <!-- 头部 -->
    <?php $_template = new Smarty_Internal_Template('part-header.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <!-- 头部 end-->
    <!-- 主内容 -->
    <div id="bd" class="contact">
        <div class="wp clearfix">
			<div class="contact-left">
				<div class="contact-address">
					<div class="hd-01">
						<h2>联系我们</h2>
						<div class="line-01"></div>
						<div class="clear"></div>
					</div>
					<address>
						<p class="clearfix">
							<i><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/icon-3.png" /></i>
							<span>电子邮箱：sales@arkexpress.com.au</span>
						</p>
						<p class="clearfix">
							<i><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/icon-4.png" /></i>
							<span>联系电话：1300 275 999 +61 3 9008 8899</span>
						</p>
					</address>
				</div>
			</div>
			<div class="contact-right">
				<div class="contact-form">
					<div class="hd-01">
						<h2>客户留言</h2>
						<div class="line-01"></div>
						<div class="clear"></div>
					</div>
					<form class="inquire contact-form-form" method="post">
						<div class="row">
							<input type="text" name="name" placeholder="姓名" class="contact-input fs-14" />
						</div>
						<div class="row">
							<input type="tel" name="phone" placeholder="电话" class="contact-input fs-14" />
						</div>
						<div class="row">
							<input type="email" name='email' placeholder="邮件" class="contact-input fs-14" />
						</div>
						<div class="row">
							<textarea placeholder="留言" name="message" class="contact-textarea fs-14"></textarea>
						</div>
						<div class="row">
							<button type="button" class="contact-submit">提交</button>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>
    <!-- 主内容 end-->
    <?php $_template = new Smarty_Internal_Template('part-footperson.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <style>
        .response{display:none;text-align: left;color: red;}
    </style>
    <script>
        $('.inquire').submit(function(){
            var _form = $(this);
            var _action = '<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
inquire.php';
            _form.find('.response').remove();
            _form.find('#submit').before('<p class="response">sending...</p>');
            _form.find(".response").css('display','block');
            var form = _form.get(0);
            _form.find('#submit').attr('disabled', true);

            $.post(_action, {
                name: form.name.value,
                email: form.email.value,
                phone: form.phone.value,
                message: form.message.value
            }, function(data){
                _form.find('.response').remove();
                if (data=='1') {
                    $('.inquire')[0].reset();
                    _form.find('#submit').before('<p class="response">消息已发出，我们会尽快联系您</p>');
                    _form.find(".response").css('display','block');
                    _form.find('#submit').attr('disabled', false);
                }else{
                    _form.find('#submit').before('<p class="response">'+data+'</p>');
                    _form.find(".response").css('display','block');
                    _form.find('#submit').attr('disabled', false);
                }
            });
            return false;
        });
    </script>
</body>
</html>