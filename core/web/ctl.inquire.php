<?php

class ctl_inquire extends cmsPage
{

	function index_action() {
		if ( is_post() ) {
			$name = trim( post( 'name' ) );
            $phone = trim( post( 'phone' ) );
            $email = trim( post( 'email' ) );
            $message = trim( post( 'message' ) );
            if ( empty($name)||empty($phone)||empty($email)) {
                echo '姓名、电话、邮箱都不能为空'; exit;
            }
            if ( ! preg_match( "/^\d{8,11}$/", $phone ) ) {
                echo "电话号码格式错误"; exit;
            }
            if ( ! preg_match( "/^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}$/i", $email ) ) {
                echo "邮箱格式错误"; exit;
            }

			$mdl_adminemail = $this->loadModel( 'adminemail' );
			$admin_email = $mdl_adminemail->get();
            if(get2('type')==1){
                $title='联系我们';
            }else{
                $title='加盟合作';
            }
			//发送邮件
			$email_content = "{$title}:\n";
            $email_content .= "姓名:{$name}\n";
			$email_content .= "电话:{$phone}\n";
			$email_content .= "邮箱:{$email}\n";
            $email_content .= "留言:{$message}\n";
            //$headers = "Content-Type: text/html;charset=UTF-8;\nX-Mailer:PHP/5.2.13";
			$headers = "Content-Type: text/html; charset=UTF-8;\nFrom:$email\nReply-To:$email\nX-Mailer:PHP/5.2.13";

			send_mail( $admin_email['email'], "来自".$this->site['name'].'的新邮件', nl2br($email_content), $headers );
			$mdl_inquire = $this->loadModel( 'inquire' );
			if ( $mdl_inquire->insert( array( 'name' => $name,   'phone' => $phone,'email' => $email, 'message' => $message,'createTime' => time() ) ) ) {
				echo 1; exit;
			}
			else {
				echo '错误'; exit;
			}
		}
	}

}