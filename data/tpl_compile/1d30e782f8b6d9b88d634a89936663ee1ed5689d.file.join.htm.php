<?php /* Smarty version Smarty-3.0.6, created on 2018-05-04 03:30:49
         compiled from "D:/www/7th/themes/zh-cn/join.htm" */ ?>
<?php /*%%SmartyHeaderCode:19515aebd3e919d3e9-88901894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d30e782f8b6d9b88d634a89936663ee1ed5689d' => 
    array (
      0 => 'D:/www/7th/themes/zh-cn/join.htm',
      1 => 1525404648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19515aebd3e919d3e9-88901894',
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
<section class="conntainer bg-1 bg-img pt35 pb175">
	<div class="wrapper">
		<div class="conbox">
			<div class="intitle fs-24 ls-20 color-white clearfix">加盟合作</div>
			<div class="join clearfix pt60 pb90 pr55 pl65">
				<div class="joinart wp50 fl color-white">
					<div class="Title mb35 color-white ls-20 fs-30"><b>7号速递诚邀你的加盟</b></div>
					<article class="scroll-bd fs-13 lh-22em">
					<?php echo $_smarty_tpl->getVariable('infoclass')->value['content'];?>

					</article>	
				</div>
				<div class="wp50 fr">
					<div class="m-auto formbox pl15 pr15">
						<div class="formtop color-white pb40 fs-16">
							<p class="mb10"><i class="icon pr25"><img src="dist/images/emailico.png"></i>电子邮箱：info@express7th.com.au</p>
							<p><i class="icon pr25"><img src="dist/images/phoneico.png"></i>联系电话：03 9543 7756</p>
						</div>
						<form class="inquire " method="post"  >
						<div class="formcon">
							<div class="list">
								<div class="name">姓名</div>
								<input type="text"  name="name" class="input-style1 fs-16 pl95 pr15" name="">
							</div>
							<div class="list">
								<div class="name">电话</div>
								<input type="text" name="phone"  class="input-style1 fs-16 pl95 pr15" name="">
							</div>
							<div class="list">
								<div class="name">邮件</div>
								<input type="text" name='email' class="input-style1 fs-16 pl95 pr15" name="">
							</div>
							<div class="list txt">
								<div class="name">留言</div>
								<textarea name="message"  class="textarea2"></textarea>
							</div>
							<div class="formbtn ta-c pt15"><button id="submit" class="btn-style1 fs-16 color-white">提交</button></div>
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
            type:2
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
