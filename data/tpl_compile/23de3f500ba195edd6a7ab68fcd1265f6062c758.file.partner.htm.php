<?php /* Smarty version Smarty-3.0.6, created on 2018-04-23 19:50:32
         compiled from "D:/www/ark/themes/en/partner.htm" */ ?>
<?php /*%%SmartyHeaderCode:5525ade39085826c8-82568110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23de3f500ba195edd6a7ab68fcd1265f6062c758' => 
    array (
      0 => 'D:/www/ark/themes/en/partner.htm',
      1 => 1524513030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5525ade39085826c8-82568110',
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
<section class="partner container">
	<div class="wrapper">
		<div class="clearfix">
			<div class="wp50 contact-left txtbox">
				<div class="title mb25 fs-24 color-white">
					<h2><b>方舟国际速递诚邀您的加盟</b></h2>
				</div>
				<div class="scroll-bd article color-white fs-13">
					<?php echo $_smarty_tpl->getVariable('content')->value;?>

				</div>
			</div>
			<div class="wp50 formbox contact-right">
				<p class="clearfix contxt color-white">
					<i class="pr10"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/icon-3.png"></i>
					<span>电子邮箱：sales@arkexpress.com.au</span>
				</p>
				<p class="clearfix contxt color-white">
					<i class="pr10"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/icon-4.png"></i>
					<span>联系电话：1300 275 999 +61 3 9008 8899</span>
				</p>
				<form class="inquire contact-form-form color-white fs-14 pt15 " method="post"  >
					<div class="row">
						<div class="name">姓名</div>
						<input type="text" name="name" class="contact-input fs-14" />
					</div>
					<div class="row">
						<div class="name">电话</div>
						<input type="tel" name="phone" class="contact-input fs-14" />
					</div>
					<div class="row">
						<div class="name">邮件</div>
						<input type="email" name='email' class="contact-input fs-14" />
					</div>
					<div class="row">
						<div class="name">留言</div>
						<textarea name="message" class="contact-textarea fs-14"></textarea>
					</div>
					<div class="row">
						<p class="response"></p>
						<button id="submit" class="contact-submit">提交</button>
						<div class="clear"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
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
