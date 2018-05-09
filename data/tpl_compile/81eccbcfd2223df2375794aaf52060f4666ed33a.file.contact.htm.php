<?php /* Smarty version Smarty-3.0.6, created on 2018-05-04 02:35:34
         compiled from "D:/www/7th/themes/zh-cn/contact.htm" */ ?>
<?php /*%%SmartyHeaderCode:197405aebc6f681b1d2-82515086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81eccbcfd2223df2375794aaf52060f4666ed33a' => 
    array (
      0 => 'D:/www/7th/themes/zh-cn/contact.htm',
      1 => 1525401333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197405aebc6f681b1d2-82515086',
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
<section class="conntainer bg-img pt35 pb230">
	<div class="wrapper">
		<div class="conbox">
			<div class="intitle fs-24 ls-20 color-white clearfix">联系我们</div>
			<div class="contact clearfix pt70 pb40 pr40 pl90">
				<div class="contactinfo wp50 fl color-white">
					<div class="formtop color-white pb35 fs-20">
						<p class="mb20"><i class="icon pr25"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/emailico.png"></i>电子邮箱：info@express7th.com.au</p>
						<p><i class="icon pr25"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/phoneico.png"></i>联系电话：03 9543 7756</p>
					</div>
					<div class="pic"><img src="<?php echo $_smarty_tpl->getVariable('SKIN_PATH')->value;?>
dist/images/contact.png"></div>
				</div>
				<div class="wp50 contactform fr">
					<div class="fr formbox pl15 pr15">
						<form class="inquire contact-form-form" method="post">
						<div class="formcon">
							<div class="list">
								<div class="name">姓名</div>
								<input type="text"  name="name" class="input-style1 fs-16 pl95 pr15" name="">
							</div>
							<div class="list">
								<div class="name">电话</div>
								<input type="text" name="phone" class="input-style1 fs-16 pl95 pr15" name="">
							</div>
							<div class="list">
								<div class="name">邮件</div>
								<input type="email" name='email' class="input-style1 fs-16 pl95 pr15" name="">
							</div>
							<div class="list txt">
								<div class="name">留言</div>
								<textarea class="textarea2" name="message" ></textarea>
							</div>
							<div class="formbtn ta-c pt30"><button id="submit" class="btn-style1 fs-16 color-white"><b>提交</b></button></div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $_template = new Smarty_Internal_Template('part-footer.htm', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<style>
	.response{display:none;text-align: left;color: red;}
</style>
<script>
    $('.inquire').submit(function(){
        console.log(12);
        var _form = $(this);
        var _action = '<?php echo $_smarty_tpl->getVariable('http_root_www')->value;?>
inquire.php';
        _form.find('.response').remove();
        _form.find('#submit').before('<p class="response">发送中...</p>');
        _form.find(".response").css('display','block');
        var form = _form.get(0);
        _form.find('#submit').attr('disabled', true);

        $.post(_action, {
            name: form.name.value,
            email: form.email.value,
            phone: form.phone.value,
            message: form.message.value,
            type:1
        }, function(data){
            _form.find('.response').remove();
            if (data=='1') {
                $('.inquire')[0].reset();
                _form.find('#submit').before('<p class="response">消息已发出，我们会尽快联系您</p>');
                _form.find(".response").css('display','block');
                _form.find('#submit').attr('disabled', false);
            }else{
                console.log(312);
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
