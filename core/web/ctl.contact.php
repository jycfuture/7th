<?php

class ctl_contact extends cmsPage
{

    function index_action() {
        if ( is_post() ) {
            $name = trim( post( 'name' ) );
            $email = trim( post( 'email' ) );
            $telephone = trim( post( 'telephone' ) );
            $message = trim( post( 'message' ) );

            if ( empty( $name )   ) {
                echo '姓名不能为空'; exit;
            }
            if ( empty( $email )   ) {
                echo '邮箱不能为空'; exit;
            }
            if (  empty( $telephone )  ) {
                echo '电话不能为空'; exit;
            }

            if ( ! preg_match( "/^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}$/i", $email ) ) {
                echo "邮箱格式错误"; exit;
            }
            if ( ! preg_match( "/^\d{8,11}$/", $telephone ) ) {
                echo "电话格式错误"; exit;
            }

            $mdl_adminemail = $this->loadModel( 'adminemail' );
            $admin_email = $mdl_adminemail->get();
            //发送邮件
            $email_content = "new message:\n";
            $email_content .= "Name: {$name}\n";
            $email_content .= "Telephone: {$telephone}\n";
            $email_content .= "Email Address: {$email}\n";
            $email_content .= "Message: ".$message."\n";

            $headers = "Content-Type: text/html; charset=UTF-8;\nFrom:$email\nReply-To:$email\nX-Mailer:PHP/5.2.13";

            //@mail( "".$admin_email['email']."", "New Message From ".$this->site['name'], nl2br( $email_content ), null );
            send_mail( $admin_email['email'], "New Message From ".$this->site['name'], nl2br($email_content), $headers );

            $mdl_contact = $this->loadModel( 'contact' );
            if ( $mdl_contact->insert( array( 'name' => $name, 'email' => $email, 'telephone' => $telephone, 'message' => $message,  'createtime' => time() ) ) ) {
                echo "1"; exit;
            }
            else {
                echo 'ERROR!'; exit;
            }
        }
	}

}