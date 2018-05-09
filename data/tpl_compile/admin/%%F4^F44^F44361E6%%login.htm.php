<?php /* Smarty version 2.6.26, created on 2012-11-22 09:24:01
         compiled from common/login.htm */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->_tpl_vars['lang']->login_management; ?>
 <?php echo $this->_tpl_vars['CMS_VERS']; ?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/login.css" />
<script>
function check (form)
{
	if (form.name.value == '')
	{
		form.name.focus();
		return false;
	}
	if (form.pass.value == '')
	{
		form.pass.focus();
		return false;
	}

	return true;
}

window.onload = function () { document.form_job.name.focus(); }
</script>
</head>
<body>
<div class="middle">
	<div class="login">
		<div class="version"><em><?php echo $this->_tpl_vars['CMS_VERS']; ?>
</em></div>
		<div class="login-panel">
			<form action="?con=admin&ctl=common/login&act=login" name="form_job" method="post" onsubmit="return check(this);">
				<ul>
					<li class="field">
						<div class="input">
							<label><?php echo $this->_tpl_vars['lang']->user_name; ?>
</label>
							<input name="name" type="text" size="20" maxlength="50" class="text" />
						</div>
					</li>
					<li class="field">
						<div class="input">
							<label><?php echo $this->_tpl_vars['lang']->password; ?>
</label>
							<input name="pass" type="password" size="20" maxlength="50" class="text" />
						</div>
					</li>
					<li class="submit-field">
						<div class="input clearfix"><input type="submit" value="" class="btn-submit" /></div>
					</li>
				</ul>
			</form>
		</div>
	</div>
</div>
</body>
</html>