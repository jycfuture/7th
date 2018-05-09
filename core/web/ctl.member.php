<?php

//会员

class ctl_member extends cmsPage
{

	public $isInvite = 0;
	public $discount = 0;
	
	public $allVip=false;
	public $oneVip=false;
	public $hasVip=false;
	
	function ctl_member() {
		parent::cmsPage();

		$act = $GLOBALS['gbl_act'];
		if ( $act == 'register' || $act == 'login' || $act == 'logout' || $act == 'forgot_password' || $act == 'activation'|| $act == 'checkemail' ) {}
		else {
			if ( !$this->loginUser  ) {
				//print_r($this->loginUser);exit;

				echo "<script>alert('"._('请先登录')."');window.location.href='".HTTP_ROOT_WWW."?tc=login';</script>";exit;
				$this->sheader( HTTP_ROOT_WWW.'?returnUrl='.urlencode( $this->parseUrl()->toString() ) );
			}
		}
		
		$this->setData( 'member', 'wapmenu' );
		
		$uid = $this->loginUser['id'];
		
		
//		//是否是被邀请用户，被邀请用户消费有折扣
//		if ($this->loginUser['inviteUserId'] )
//		{
//			$this->isInvite = 1;
//			$this->discount = $this->site['discount']?$this->site['discount']:0.95;
//		}
//		else
//		{
//			$this->isInvite = 0;
//			$this->discount = 1;
//		}
//
//		$this->setData( $this->isInvite, 'isInvite' );
//		$this->setData( $this->discount, 'discount' );
//
//		//是否预定过服务
//		$mdl_order_driver = $this->loadModel('order_driver');
//		$mdl_order_landlord = $this->loadModel('order_landlord');
//		$mdl_order_teacher = $this->loadModel('order_teacher');
//
//		$order_teacher = $mdl_order_teacher->getByWhere(array('userId'=>$this->loginUser['id'], 'isPay'=>1));
//		if($order_teacher)
//			$this->allVip = true;
//		else
//		{
//			$order_landlord = $mdl_order_landlord->getByWhere(array('userId'=>$this->loginUser['id'], 'isPay'=>1));
//			$order_driver = $mdl_order_driver->getByWhere(array('userId'=>$this->loginUser['id'], 'isPay'=>1));
//
//			if($order_landlord || $order_driver)
//			{
//				$this->oneVip = true;
//			}
//		}
//		$this->setData( $this->allVip, 'allVip' );
//		$this->setData( $this->oneVip, 'oneVip' );
//
//		//是否预定过vip服务
//		$mdl_orders_vip_entertainment = $this->loadModel( 'order_vip_entertainment' );
//		$mdl_orders_vip_hotel = $this->loadModel( 'order_vip_hotel' );
//		$mdl_orders_vip_restaurant = $this->loadModel( 'order_vip_restaurant' );
//		$mdl_orders_vip_ticket = $this->loadModel( 'order_vip_ticket' );
//		$mdl_orders_vip_tourism = $this->loadModel( 'order_vip_tourism' );
//		$mdl_orders_vip_other = $this->loadModel( 'order_vip_other' );
//
//		$vipOrder = $mdl_orders_vip_entertainment->getByWhere(array('userId'=>$this->loginUser['id'], 'status<>5'));
//		$vipOrder2 = $mdl_orders_vip_hotel->getByWhere(array('userId'=>$this->loginUser['id'], 'status<>5'));
//		$vipOrder3 = $mdl_orders_vip_restaurant->getByWhere(array('userId'=>$this->loginUser['id'], 'status<>5'));
//		$vipOrder4 = $mdl_orders_vip_ticket->getByWhere(array('userId'=>$this->loginUser['id'], 'status<>5'));
//		$vipOrder5 = $mdl_orders_vip_tourism->getByWhere(array('userId'=>$this->loginUser['id'], 'status<>5'));
//		$vipOrder6 = $mdl_orders_vip_other->getByWhere(array('userId'=>$this->loginUser['id'], 'status<>5'));
//		if($vipOrder || $vipOrder2 || $vipOrder3 || $vipOrder4 || $vipOrder5 || $vipOrder6)
//			$this->hasVip = true;
//
//		$this->setData( $this->hasVip, 'hasVip' );
		
		//站内信个数
		$mdl_user_msg = $this->loadModel('user_msg');
		$msg_count = $mdl_user_msg->getCount(array('receiveId'=>$this->loginUser['id'], 'status'=>0));
		$this->setData( $msg_count, 'msg_count' );
		
	}

	/**
	 * 会员首页
	 */
	function index_action() {
		if (!$this->wap )
			$this->sheader( HTTP_ROOT_WWW.'member/profile' );

		$this->setData( '会员首页', 'pagename' );
		$this->setData( 'index', 'menu' );
		$this->setData( '个人中心 - '.$this->site['pageTitle'], 'pageTitle' );
		$this->display( 'member/index' );
	}

	/**
	 * 会员登录
	 */
	function login_action() {
		if ( is_post() ) {
			$this->formData = $_POST;
			unset( $this->formData['password'] );
			$name = post( 'name' );
			$pass = post( 'password' );

			$remember = (int)post( 'remember' );

			if ( empty( $name ) || empty( $pass ) ) {
				echo 'Please enter your name or email address and password';
				exit;
			}

				$passwordByCustomMd5 = $this->md5( $pass );
				$mdl_user = $this->loadModel( 'user' );
				$user = $mdl_user->getUserByName($name)?$mdl_user->getUserByName($name):$mdl_user->getUserByEmail($name);
				if ( $user ) {
					if ( $passwordByCustomMd5 == $user['password'] ) {
						if ( ! $user['isApproved'] ) {
							echo 'The account is disabled by the administrator';
							exit;
						}
//						else if ( $user['isApproved'] == 1 ) {
//							$this->formError[] = '帐号未激活';
//							$isApproved = 1;
//							$link = HTTP_ROOT_WWW.'member/activation?userId='.$user['id'];
//						}

							$data = array(
								'lastLoginIP'	=> ip(),
								'lastLoginDate'	=> time(),
								'loginCount'	=> $user['loginCount'] + 1
							);
							$mdl_user->updateUserById( $data, $user['id'] );
							$this->session( 'member_user_id', $user['id'] );
							$this->session( 'member_user_shell', $this->md5( $user['id'].$user['name'].$user['password'] ) );
							$this->cookie->setCookie( 'remember', $remember, 60 * 60 * 24 * 7 );
							if ( $remember ) {
								$this->cookie->setCookie( 'member_user_id', $user['id'], 60 * 60 * 24 * 7 );
								$this->cookie->setCookie( 'member_user_shell', $this->md5( $user['id'].$user['name'].$user['password'] ), 60 * 60 * 24 * 7 );
							}
							echo 1;
							exit;
					}
					else {
						echo 'Email or password is wrong';
						exit;
					}
				}
				else {
					echo  'Email or password is wrong';
                    exit;
				}

		}

		
		
		
		if ( is_ajax() ) {
			$result = $this->getAjaxReturn();
			echo json_encode( $result ); exit;
		}
		else {
			$this->setData( $this->formError, 'formError' );
			$this->setData( $this->formReturn, 'formReturn' );
			$this->setData( $this->formData, 'formData' );
//			$this->setData( $isApproved, 'isApproved' );
//			$this->setData( $link, 'link' );

			if ( $this->loginUser['id'] > 0 ) $this->sheader( HTTP_ROOT.( $this->wap ? 'wap/' : '' ).'member/index' );

			$this->setData( '会员登录 - '.$this->site['pageTitle'], 'pageTitle' );
			$this->display( 'member/login' );
		}
	}
	

	
	/**
	 * 微信首次登录后的邮箱验证, 用邮箱自动创建一个帐号
	 */
	function checkemail_action() {
		if(!$_SESSION['ocUser'])
			$this->sheader('微信登录失败');
		
		if ( is_post() ) {
			$this->formData = $_POST;
			$mdl_user = $this->loadModel( 'user' );
			$email = post( 'email' );
			$name = $email;
			$ocUser = $_SESSION['ocUser'];
			
			$ocUid = $ocUser['OpenID'];
			$weixinAccount = $ocUser[ 'nickname' ];
			//$sex = $ocUser[ 'sex' ];
			$city = $ocUser[ 'city' ];
			$phone = $ocUser[ 'phone' ];
			$displayName = $ocUser[ 'nickname' ];
			//print_r($ocUser['headimgurl']);
			$avatar = $this->saveAvatar( $ocUser['headimgurl'] );
			//print_r($avatar);exit;
			$inviteCode = post( 'inviteCode' );
			
			$pass = $weixinAccount.$email;
			
			if ( empty( $email )  ) {
				$this->formError[] = '请输入您的邮箱';
			}
			
			$wechatcount = $mdl_user->getCount( array('wechat_connect_id' => $ocUid) );
			//账户已经创建，有邮箱
			if ( $wechatcount > 0)  {
				$wechatUser = $mdl_user->getByWhere( array('wechat_connect_id' => $ocUid) );
				//如果再次输入的邮箱和之前创建的相同
				if($email == $wechatUser['name'])
				{
					
				}
				else//如果再次输入的邮箱是新的邮箱
				{
					if ( $mdl_user->getCount( "(email='$email' or name='$email')" ) > 0 ) {
						if ( !$this->formError ) $this->formError[] = '您输入的邮箱已经存在，请更换';
						unset( $this->formData['email'] );
					}
					$newemail = $email;
				}
				
				/* if ( !$this->formError ) $this->formError[] = '您已经提交过邮箱，请进入邮箱激活您的帐号';
				unset( $this->formData['email'] ); */
			}
			
			
			if ( !$this->formError ) {
				//如果帐号已经创建
				/*
				if($wechatUser)
				{
					//如果提交了新的邮箱，那么更新原帐号
					if($newemail)
					{
						$passwordByCustomMd5 = $this->md5( $pass );
						$data = array(
						'name' => $newemail,
						'password' => $passwordByCustomMd5,
						'email' => $newemail
						);
						if ( $mdl_user->updateUserById( $data, $wechatUser['id'] ) ) {
							
							$link = HTTP_ROOT.'member/activation?step=2&userId='.$wechatUser['id'].'&checkcode='.$this->md5( $wechatUser['id'].$newemail.$passwordByCustomMd5 ).'&tmp='.time();
							//echo $link;exit;
							$subject = "[".$this->site['name']."]帐号激活";
							
							$content = "<p>亲爱的用户，欢迎加入FLYBEE优居优行!</p>
							<p>请在7天内点击点击下面的链接完成邮件验证：</p>
							<p><a href='$link'>$link</a></p>
							<p>如果以上链接无法点击，请将上面的地址复制到你的浏览器的地址栏进入。</p>
							<p>你也可以通过关注flybee优居优行微信服务号，同样加入我们，具体方法如下：</p>
							<p>使用微信的添加订阅号，搜索“flybee优居优行”或者“flybeeau”进行关注即可。</p>
							<p>你还可以添加FLYBEE微信个人客服：FLYBEEGLB，更多留学咨询、活动信息，会给你带来意想不到的收获。</p>
							<p>（本邮件由程序自动发送，请不要回复，谢谢）";

							//$content = "<p>亲爱的用户：</p><p>这是您在[".$this->site['name']."]的帐户激活邮件，（如果这不是您的操作，请忽略此邮件）</p><p>请在24小时内点击下面的链接激活您的帐号: </p><p>$link</p><p>&nbsp;</p><p>(如果链接无法点击，那么可以将以上链接完整复制到浏览器中访问)</p><p>============================</p>".HTTP_ROOT;
							$headers = "Content-Type: text/html; charset=UTF-8;\nFrom:$email\nReply-To:$email";
							if ( send_mail( $email, $subject, $content, $headers ) ) {
								$this->formReturn['success'] = true;
								$this->formReturn['msg'] = '发送邮件成功，请您注意查收邮件1';
								$this->session( 'form-success-msg', '发送邮件成功，请您注意查收邮件' );
								$this->sheader( $this->parseUrl()->toString() );
							}
							else {
								$this->formReturn['success'] = false;
								$this->formReturn['msg'] = '邮件发送失败';
							}
						}
					}else
					{
						$link = HTTP_ROOT.'member/activation?step=2&userId='.$wechatUser['id'].'&checkcode='.$this->md5( $wechatUser['id'].$wechatUser['name'].$wechatUser['password'] ).'&tmp='.time();
						//echo $link;exit;
						$subject = "[".$this->site['name']."]帐号激活";
						
						$content = "<p>亲爱的用户，欢迎加入FLYBEE优居优行!</p>
						<p>请在7天内点击点击下面的链接完成邮件验证：</p>
						<p><a href='$link'>$link</a></p>
						<p>如果以上链接无法点击，请将上面的地址复制到你的浏览器的地址栏进入。</p>
						<p>你也可以通过关注flybee优居优行微信服务号，同样加入我们，具体方法如下：</p>
						<p>使用微信的添加订阅号，搜索“flybee优居优行”或者“flybeeau”进行关注即可。</p>
						<p>你还可以添加FLYBEE微信个人客服：FLYBEEGLB，更多留学咨询、活动信息，会给你带来意想不到的收获。</p>
						<p>（本邮件由程序自动发送，请不要回复，谢谢）";

						//$content = "<p>亲爱的用户：</p><p>这是您在[".$this->site['name']."]的帐户激活邮件，（如果这不是您的操作，请忽略此邮件）</p><p>请在24小时内点击下面的链接激活您的帐号: </p><p>$link</p><p>&nbsp;</p><p>(如果链接无法点击，那么可以将以上链接完整复制到浏览器中访问)</p><p>============================</p>".HTTP_ROOT;
						$headers = "Content-Type: text/html; charset=UTF-8;\nFrom:$email\nReply-To:$email";
						if ( send_mail( $email, $subject, $content, $headers ) ) {
							$this->formReturn['success'] = true;
							$this->formReturn['msg'] = '发送邮件成功，请您注意查收邮件2';
							$this->session( 'form-success-msg', '发送邮件成功，请您注意查收邮件' );
							$this->sheader( $this->parseUrl()->toString() );
						}
						else {
							$this->formReturn['success'] = false;
							$this->formReturn['msg'] = '邮件发送失败';
						}
					}
					
				}else
				*/
				{
				
					//生成自己的邀请码
					$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";  //要随机产生的字符
					$s = str_split( $string );
					$num = 10;  //字符数
					$str = "";
					for ( $i = 0; $i < $num; $i++ ) {
						$str .= $s[rand( 0, strlen( $string ) - 1 )];
					}
					
					
					$passwordByCustomMd5 = $this->md5( $pass );
					$data = array(
						'isApproved' => 1,
						'isAdmin' => 0,
						'name' => $email,
						'displayName' => $displayName,
						'wechat_connect_id' => $ocUid, 
						'weixinAccount' => $weixinAccount,
						'email' => $email,
						'avatar' => $avatar,
						'phone' => $phone,
//						'sex' => $sex,
						'city' => $city,
						'password' => $passwordByCustomMd5,
						'inviteCode' => $str,
						'role' => 3,
						'groupid' => 1,
						'createdDate' => time(),
						'lastLoginIp' => ip(),
						'lastLoginDate' => time(),
						'loginCount' => 1
					);
					
					if($inviteCode)
					{
						$invite = $mdl_user->getByWhere(array('inviteCode' => $inviteCode));
						if($invite)
						{
							$data['inviteUserId'] = $invite['id'];
						}
					}
					
					if ( $mdl_user->addUser( $data ) ) {
						$user = $mdl_user->getUserByName( $name );
						
//						if($invite)
//						{
//							//$id = $mdl_user_commission->insert( array( 'type' => 1, 'commission' => 10, 'userId' => $invite['id'], 'createTime' => time(), 'content' => '邀请注册用户,id:'.$user['id'] ) );
//						}
						
						$link = HTTP_ROOT.'member/activation?step=2&userId='.$user['id'].'&checkcode='.$this->md5( $user['id'].$user['name'].$user['password'] ).'&tmp='.time();
						//echo $link;exit;
						$subject = "[".$this->site['name']."]帐号激活";
						
						$content = "<p>亲爱的用户，欢迎加入FLYBEE优居优行!</p>
						<p>请在7天内点击点击下面的链接完成邮件验证：</p>
						<p><a href='$link'>$link</a></p>
						<p>如果以上链接无法点击，请将上面的地址复制到你的浏览器的地址栏进入。</p>
						<p>你也可以通过关注flybee优居优行微信服务号，同样加入我们，具体方法如下：</p>
						<p>使用微信的添加订阅号，搜索“flybee优居优行”或者“flybeeau”进行关注即可。</p>
						<p>你还可以添加FLYBEE微信个人客服：FLYBEEGLB，更多留学咨询、活动信息，会给你带来意想不到的收获。</p>
						<p>（本邮件由程序自动发送，请不要回复，谢谢）";

						//$content = "<p>亲爱的用户：</p><p>这是您在[".$this->site['name']."]的帐户激活邮件，（如果这不是您的操作，请忽略此邮件）</p><p>请在24小时内点击下面的链接激活您的帐号: </p><p>$link</p><p>&nbsp;</p><p>(如果链接无法点击，那么可以将以上链接完整复制到浏览器中访问)</p><p>============================</p>".HTTP_ROOT;
						$headers = "Content-Type: text/html; charset=UTF-8;\nFrom:$email\nReply-To:$email";
						if ( send_mail( $email, $subject, $content, $headers ) ) {
							$this->formReturn['success'] = true;
							$this->formReturn['msg'] = '发送邮件成功，请您注意查收邮件';
							$this->session( 'form-success-msg', '发送邮件成功，请您注意查收邮件' );
							$this->sheader( $this->parseUrl()->toString() );
						}
						else {
							$this->formReturn['success'] = false;
							$this->formReturn['msg'] = '邮件发送失败';
						}
					
						//$this->session( 'member_user_id', $user['id'] );
						//$this->session( 'member_user_shell', $this->md5( $user['id'].$user['name'].$user['password'] ) );
						//$this->formReturn['success'] = true;
						//$this->formReturn['msg'] = '注册成功';

						/* if ( !is_ajax() ) {
							if ( $this->returnUrl ) $this->sheader( $this->returnUrl );
							else $this->sheader( HTTP_ROOT_WWW.'member/profile' );
						} */
						
						$this->setData( $this->returnUrl?$this->returnUrl:HTTP_ROOT_WWW, 'returnUrl' );
					}
					else {
						$this->formReturn['success'] = false;
						$this->formReturn['msg'] = '注册失败';
					}
				}
			}
		}else{
			$mdl_user = $this->loadModel( 'user' );
			$ocUser = $_SESSION['ocUser'];
			if($ocUser)
			{
				$user = $mdl_user->getByWhere( array( 'wechat_connect_id' => $ocUser['OpenID'] ) );
				if ( ! $user ) {
					//跳到邮箱验证的页面
					//$this->session( 'ocUser', $ocUser);
					//$this->sheader( HTTP_ROOT.'member/checkemail' );
				}else{
					if($user['isApproved'] == 2)
					{
						$data = array(
							'lastLoginIP'	=> ip(),
							'lastLoginDate'	=> time(),
							'loginCount'	=> $user['loginCount'] + 1
						);
						$mdl_user->updateUserById( $data, $user['id'] );

						$this->session( 'member_user_id', $user['id'] );
						//$this->session( 'member_user_shell', $this->md5( $user['id'].$user['name'].$user['password'] ) );
						$this->session( 'member_user_shell_wechat', $this->md5( $user['id'].$user['wechat_connect_id'] ) );

						$this->formReturn['success'] = true;
						$this->formReturn['msg'] = '登录成功';

						if ( !is_ajax() ) {
							if ( $this->returnUrl ) $this->sheader( $this->returnUrl );
							else $this->sheader( HTTP_ROOT_WWW.'member/user_profile' );
						}
					}
				}
			
			}
		}

		if ( is_ajax() ) {
			$result = $this->getAjaxReturn();
			echo json_encode( $result ); exit;
		}
		else {
			$this->setData( $this->formError, 'formError' );
			$this->setData( $this->formReturn, 'formReturn' );
			$this->setData( $this->formData, 'formData' );
			$this->setData( $isApproved, 'isApproved' );
			$this->setData( $link, 'link' );

			$this->setData( '邮箱验证 - '.$this->site['pageTitle'], 'pageTitle' );
			$this->display( 'member/checkemail' );
		}
	}

	/**
	 * 退出
	 */
	function logout_action() {
		$this->session( 'member_user_id', '' );
		$this->session( 'member_user_shell', '' );
		$this->session( 'member_user_shell_wechat', '' );
		$this->cookie->clearCookie( 'remember' );
		$this->cookie->clearCookie( 'remember_user_id' );
		$this->cookie->clearCookie( 'remember_user_shell' );
		
		$this->cookie->clearCookie( 'member_user_id' );
		$this->cookie->clearCookie( 'member_user_shell' );
		$this->cookie->clearCookie( 'member_user_shell_wechat' );
	
		if ( $this->returnUrl ) $this->sheader( $this->returnUrl );
		else $this->sheader( HTTP_ROOT_WWW );
	}

	/**
	 * 会员注册
	 */
	function register_action() {

        if ( is_post() ) {
            $this->formData = $_POST;
            $name = trim(post('name'));
            $email = trim(post('email'));
//			$phone = trim( post('phone') );
            $displayName = trim(post('name'));
            $pass = trim(post('password'));
            $pass2 = trim(post('password2'));
            //$inviteCode = trim( post('inviteCode') );
            $agree = (int)post('agree');

            if (empty($email) || empty($pass) || empty($pass2) || empty($name)) {
                echo 'Please fill in the form and submit it';
                exit;
            }

            if (!$agree) {
                echo 'Please agree to the registration clause';
                exit;
            }
            if (!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*" . "@" . "([a-z0-9]+([\.-][a-z0-9]+)*)+" . "\\.[a-z]{2,}$/i", $email)) {
                echo "Please enter a valid E_mail！";
                exit;
            }
            /*
            $yzm = post( 'yzm' );
            $yzmIndex = (int)post( 'yzm_index' );
            if ( empty( $yzm ) ) {
                $this->formError[] = '请输入验证码';
            }
            else {
                if ( strtolower( $yzm ) != strtolower( $_SESSION['yzm'.( $yzmIndex > 0 ? $yzmIndex : '' )] ) ) {
                    $this->formError[] = '输入的验证码不正确';
                }
            }
            */

//           if (!$this->formError) {

                $mdl_reg = $this->loadModel('reg');
                $mdl_user = $this->loadModel('user');
                //$mdl_user_commission = $this->loadModel('user_commission');

                if (!$mdl_reg->chkMail($email)) {
                    echo 'Please enter a valid E_mail！';
                    exit;
                }
                if (!$mdl_reg->chkPassword($pass)) {
                    echo 'The password requires 6-16 strings consisting of A-Z, A-Z, 0-9, and underscore';
                    unset($this->formData['pass']);
                }
                if ($pass != $pass2) {
                    echo  'Confirm password inconsistency';
                   exit;
                }

                if ($mdl_user->getCount("(email='$email')") > 0) {
                   echo 'The mailbox you entered already exists. Please replace it';
                    exit;
                }
            if ($mdl_user->getCount("(name='$name')") > 0) {
                echo 'The name you entered already exists. Please replace it';
                exit;
            }
                    //*如何验证是否重复？*//

                    $passwordByCustomMd5 = $this->md5($pass);
                    $data = array(
                        'isApproved' => 1,
                        'isAdmin' => 0,
                        'email' => $email,
                        'name' => $name,
                        'displayName' => $name,
                        'email' => $email,
                        'password' => $passwordByCustomMd5,
                        'role' => 0,
                        'groupid' => 1,
                        'createdDate' => time(),
                        'lastLoginIp' => ip(),
                        'lastLoginDate' => time(),
                        'loginCount' => 1
                    );
                    if ($mdl_user->addUser($data)) {
                        $user = $mdl_user->getUserByName($name);
//                        $link = HTTP_ROOT . 'member/activation?step=2&userId=' . $user['id'] . '&checkcode=' . $this->md5($user['id'] . $user['name'] . $user['password']) . '&tmp=' . time();
////                        //echo $link;exit;
//                        $subject = "[" . $this->site['name'] . "] account activation";
//                        $content = "<p>Dear users, welcome to join ALLCARBOOKING!</p>
//						<p>Please click on the link below to complete the mail verification within 7 days:</p>
//						<p><a href='$link'>$link</a></p>
//						<p>If you can not click the link above, copy the above address to the browser's address bar</p>
//						<p>(This message automatically sent by the program, please do not reply, thank you)";
//                        $headers = "Content-Type: text/html; charset=UTF-8;\nFrom:$email\nReply-To:$email";
//                        if (send_mail($email, $subject, $content, $headers)) {
//                            $this->formReturn['success'] = true;
//                            $this->formReturn['msg'] = '发送邮件成功，请您注意查收邮件';
//                            $this->session('form-success-msg', '发送邮件成功，请您注意查收邮件');
//                            $this->sheader($this->parseUrl()->toString());
//                        } else {
//                            $this->formReturn['success'] = false;
//                            $this->formReturn['msg'] = '邮件发送失败';
//                        }

                        $this->session( 'member_user_id', $user['id'] );
                        $this->session( 'member_user_shell', $this->md5( $user['id'].$user['name'].$user['password'] ) );
                        //$this->formReturn['success'] = true;
                        //$this->formReturn['msg'] = '注册成功';

                        /* if ( !is_ajax() ) {
                            if ( $this->returnUrl ) $this->sheader( $this->returnUrl );
                            else $this->sheader( HTTP_ROOT_WWW.'member/profile' );
                        } */

//                        $this->setData($this->returnUrl ? $this->returnUrl : HTTP_ROOT_WWW, 'returnUrl');
                        echo "1";
                    } else {
                       echo 'registered failed';
                       exit;
                    }
                }



//		if ( is_ajax() ) {
//			$result = $this->getAjaxReturn();
//			echo json_encode( $result ); exit;
//		}
//		else {
//			$this->setData( $this->formError, 'formError' );
//			$this->setData( $this->formReturn, 'formReturn' );
//			$this->setData( $this->formData, 'formData' );
//
//			$this->setData( '会员注册 - '.$this->site['pageTitle'], 'pageTitle' );
//			$this->display( 'member/register' );
//		}
	}
	
	function test_action(){
		
		$email = 'gavin@legenddigital.com.au';
		$headers = "Content-Type: text/html; charset=UTF-8;\nFrom:$email\nReply-To:$email";
		echo '测试发送邮件2';
		if ( send_mail( $email, '[flybee]找回密码', '找回您的密码', $headers ) ) {
			
			echo '发送邮件成功，请您注意查收邮件';
		}
		else {
			echo '邮件发送失败';
		}
		
	}
	
	/**
	 * 帐户激活
	 */
	function activation_action() {
		$step = (int)get2( 'step' );
		$mdl_user = $this->loadModel( 'user' );
		
		if ( $step == 2 ) {
			$userId = (int)get2( 'userId' );
			$checkCode = get2( 'checkcode' );
			$tmp = (int)get2( 'tmp' );

			//验证
			if ( mktime( date( 'h', $tmp ), date( 'i', $tmp ), date( 's', $tmp ), date( 'm', $tmp ), date( 'd', $tmp ) + 1, date( 'Y', $tmp ) ) < time() ) {
				$this->formError[] = '链接已过期，<a href="'.HTTP_ROOT_WWW.'member/activation?userId='.$user['id'].'" class="link-blue">点击这里重新发送</a>';
			}
			else {
				$user = $mdl_user->getUserById( $userId );
				if ( ! $user || ( $user && $this->md5( $user['id'].$user['name'].$user['password'] ) != $checkCode ) ) {
					$this->formError[] = '链接已过期或无效，<a href="'.HTTP_ROOT_WWW.'member/activation?userId='.$user['id'].'" class="link-blue">点击这里重新发送</a>';
				}
			}
			if ($user && ! $this->formError ) {
				
				if($user['isApproved'] == 2)
				{
					$this->formReturn['success'] = true;
					$this->formReturn['msg'] = '帐户已经激活';
					
					$this->session( 'member_user_id', $user['id'] );
					$this->session( 'member_user_shell', $this->md5( $user['id'].$user['name'].$user['password'] ) );
				}
				else
				{
					$data = array(
						'isApproved' => 2
					);
					if ( $mdl_user->updateUserById( $data, $user['id'] ) ) {
						
						//如果是微信登录帐号，激活该帐号后，删除该微信号提交的其他邮箱帐号
						if($user['wechat_connect_id'] )
							$mdl_user->deleteByWhere(array('wechat_connect_id' => $user['wechat_connect_id'], 'isApproved' => 1, 'id<>'.$user['id'] ));
						
						$this->formReturn['success'] = true;
						$this->formReturn['msg'] = '帐户激活成功';
						
						$this->session( 'member_user_id', $user['id'] );
						$this->session( 'member_user_shell', $this->md5( $user['id'].$user['name'].$user['password'] ) );
					}
					else {
						$this->formReturn['success'] = false;
						$this->formReturn['msg'] = '帐户激活失败，请重新提交';
					}
				}
			}
			
			$this->setData( $this->formError, 'formError' );
			$this->setData( $this->formReturn, 'formReturn' );
			$this->setData( $this->formData, 'formData' );
			$this->setData( $this->returnUrl?$this->returnUrl:HTTP_ROOT_WWW, 'returnUrl' );

			$this->setData( $this->parseUrl(), 'submitUrl' );
			$this->setData( '激活您的帐号 - '.$this->site['pageTitle'], 'pageTitle' );
			$this->display( 'member/activation' );
			
		}
		//重新发送邮件
		else
		{
			$userId = (int)get2( 'userId' );
			$user = $mdl_user->getUserById( $userId );
			if($user)
			{
				$email = $user['name'];
				$link = HTTP_ROOT.'member/activation?step=2&userId='.$user['id'].'&checkcode='.$this->md5( $user['id'].$user['name'].$user['password'] ).'&tmp='.time();
				//echo $link;
				$subject = "[".$this->site['name']."]帐号激活";
				//$content = "<p>亲爱的用户：</p><p>这是您在[".$this->site['name']."]的帐户激活邮件，（如果这不是您的操作，请忽略此邮件）</p><p>请在24小时内点击下面的链接激活您的帐号: </p><p>$link</p><p>&nbsp;</p><p>(如果链接无法点击，那么可以将以上链接完整复制到浏览器中访问)</p><p>============================</p>".HTTP_ROOT;
				$content = "<p>亲爱的用户，欢迎加入FLYBEE优居优行!</p>
						<p>请在7天内点击点击下面的链接完成邮件验证：</p>
						<p><a href='$link'>$link</a></p>
						<p>如果以上链接无法点击，请将上面的地址复制到你的浏览器的地址栏进入。</p>
						<p>你也可以通过关注flybee优居优行微信服务号，同样加入我们，具体方法如下：</p>
						<p>使用微信的添加订阅号，搜索“flybee优居优行”或者“flybeeau”进行关注即可。</p>
						<p>你还可以添加FLYBEE微信个人客服：FLYBEEGLB，更多留学咨询、活动信息，会给你带来意想不到的收获。</p>
						<p>（本邮件由程序自动发送，请不要回复，谢谢）";
				$headers = "Content-Type: text/html; charset=UTF-8;\nFrom:$email\nReply-To:$email";
				if ( send_mail( $email, $subject, $content, $headers ) ) {
					$this->formReturn['success'] = true;
					$this->formReturn['msg'] = '发送邮件成功，请您注意查收邮件';
					$this->session( 'form-success-msg', '发送邮件成功，请您注意查收邮件' );
					$this->sheader( $this->parseUrl()->toString() );
				}
				else {
					$this->formReturn['success'] = false;
					$this->formReturn['msg'] = '邮件发送失败';
				}
				$this->setData( HTTP_ROOT_WWW.'member/activation?userId='.$user['id'], 'link' );
				$this->setData( $this->formError, 'formError' );
				$this->setData( $this->formReturn, 'formReturn' );
				$this->setData( $this->formData, 'formData' );
				$this->setData( $this->returnUrl?$this->returnUrl:HTTP_ROOT_WWW, 'returnUrl' );
				$this->setData( '发送邮件 - '.$this->site['pageTitle'], 'pageTitle' );
				$this->display( 'member/sendmail' );
			}
		}
	}

	/**
	 * 忘记密码
	 */
	function forgot_password_action() {
		$step = (int)get2( 'step' );
		$mdl_user = $this->loadModel( 'user' );

		if ( $step == 2 ) {
			$userId = (int)get2( 'userid' );
			$checkCode = get2( 'checkcode' );
			$tmp = (int)get2( 'tmp' );

			//验证
			if ( mktime( date( 'h', $tmp ), date( 'i', $tmp ), date( 's', $tmp ), date( 'm', $tmp ), date( 'd', $tmp ) + 1, date( 'Y', $tmp ) ) < time() ) {
				$this->formError[] = '找回密码链接已过期，<a href="'.HTTP_ROOT_WWW.'member/forgot_password" class="link-blue">点击这里重新发送</a>';
			}
			else {
				$user = $mdl_user->getUserById( $userId );
				if ( ! $user || ( $user && $this->md5( $user['id'].$user['name'].$user['password'] ) != $checkCode ) ) {
					$this->formError[] = '找回密码链接已过期或无效，<a href="'.HTTP_ROOT_WWW.'member/forgot_password" class="link-blue">点击这里重新发送</a>';
				}
			}

			if ( is_post() && $user && ! $this->formError ) {
				$password	= post('password');
				$password2	= post('password2');

				$mdl_reg = $this->loadModel( 'reg' );
				if ( ! $mdl_reg->chkPassword( $password ) ) {
					$this->formError[] = '密码需要6-16个由a-z，A-Z，0-9以及下划线组成的字符串';
				}
				if ( $password != $password2 ) {
					$this->formError[] = '确认密码不一致';
				}

				if ( ! $this->formError ) {
					$passwordByCustomMd5 = $this->md5( $password );
					$data = array(
						'password' => $passwordByCustomMd5
					);
					if ( $mdl_user->updateUserById( $data, $user['id'] ) ) {
						/* $this->session( 'member_user_id', $user['id'] );
						$this->session( 'member_user_shell', $this->md5( $user['id'].$user['name'].$passwordByCustomMd5 ) );
						$this->sheader( HTTP_ROOT_WWW.'member/index' ); */
						$this->formReturn['success'] = true;
						$this->formReturn['msg'] = '修改密码成功，请用新密码登录';
					}
					else {
						$this->formReturn['success'] = false;
						$this->formReturn['msg'] = '修改密码失败，请重新提交';
					}
				}
			}

			$this->setData( $this->formError, 'formError' );
			$this->setData( $this->formReturn, 'formReturn' );
			$this->setData( $this->formData, 'formData' );
			$this->setData( $this->returnUrl?$this->returnUrl:HTTP_ROOT_WWW, 'returnUrl' );

			$this->setData( $this->parseUrl(), 'submitUrl' );
			$this->setData( '修改您的密码 - '.$this->site['pageTitle'], 'pageTitle' );
			$this->display( 'member/forgot_password_edit' );
		}
		else {
			if ( is_post() ) {
				$email = post( 'email' );
				
				/* 
				$yzm = trim( post( 'yzm' ) );
				if ( strtolower( $yzm ) != strtolower( $_SESSION['yzm'] ) ) {
					$this->formError[] = '验证码错误';
				} */

				$mdl_reg = $this->loadModel( 'reg' );
				if ( ! $mdl_reg->chkMail( $email ) ) {
					$this->formError[] = '请输入正确的邮箱';
				}
				if ( ! $this->formError ) {
					$user = $mdl_user->getByWhere( array( 'email' => $email ) );
					if ( ! $user ) {
						$this->formError[] = '系统中没有这个邮箱，请检查是否输入错误';
					}
				}

				if ( ! $this->formError ) {
					$link = HTTP_ROOT.'member/forgot_password?step=2&userid='.$user['id'].'&checkcode='.$this->md5( $user['id'].$user['name'].$user['password'] ).'&tmp='.time();
					//echo $link;exit;
					$subject = "[".$this->site['name']."]重置密码";
					$content = "<p>亲爱的用户：</p><p>这是您申请的找回密码邮件，（如果您没有申请找回密码，请忽略此邮件）</p><p>请在24小时内点击下面的链接修改您的密码: </p><p><a href='$link'>$link</a></p><p>&nbsp;</p><p>============================</p>".HTTP_ROOT;
					$headers = "Content-Type: text/html; charset=UTF-8;\nFrom:$email\nReply-To:$email";
					if ( send_mail( $email, $subject, $content, $headers ) ) {
						$this->formReturn['success'] = true;
						$this->formReturn['msg'] = '发送找回密码邮件成功，请您注意查收邮件';
						$this->session( 'form-success-msg', '发送找回密码邮件成功，请您注意查收邮件' );
						$this->sheader( $this->parseUrl()->toString() );
					}
					else {
						$this->formReturn['success'] = false;
						$this->formReturn['msg'] = '找回密码邮件发送失败';
					}
				}
			}

			$this->setData( $this->formError, 'formError' );
			$this->setData( $this->formReturn, 'formReturn' );
			$this->setData( $this->formData, 'formData' );
			$this->setData( $this->returnUrl?$this->returnUrl:HTTP_ROOT_WWW, 'returnUrl' );

			$this->setData( '找回密码 - '.$this->site['pageTitle'], 'pageTitle' );
			$this->display( 'member/forgot_password' );
		}
	}




	/**
	 * 基本设置
	 */
	function profile_action() {
		if ( is_post() ) {
			$data = post('data');
			$this->formData = $data;
            $mdl_reg = $this->loadModel( 'reg' );
            $mdl_user = $this->loadModel( 'user' );
			if($this->loginUser['role']!=4){
			if ( empty( $data['displayName'] ) || empty( $data['sex'] ) || empty( $data['year'] )|| empty( $data['email'] )|| empty( $data['city'] ) ) {
				$this->formError[] = 'Please fill in the form and submit it';
			}
			$email = $data['email'];
			if ( ! $mdl_reg->chkMail( $data['email'] ) ) {
				$this->formError[] = 'The mailbox format is incorrect';
			}
			if ( !$this->formError && $mdl_user->getCount( array( "(email='$email')", 'id<>'.$this->loginUser['id'] ) ) > 0 ) {
				$this->formError[] = 'The mailbox already exists. Please change other mailbox';
			}}

			if ( !$this->formError ) {
				
				$photoObj = $_FILES['avatar'];
				
				if ( $photoObj['size'] > 0 ) {
					$bounds = post( 'bounds' );
					$allow_exts = array( 'jpg', 'jpeg', 'gif', 'png' );
					$filepath = date( 'Y-m' );
					$this->file->createdir( 'data/upload/'.$filepath );
					
					$photo = $this->file->upfile( $allow_exts, $photoObj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
					if ( $photo ) {
						$bs = explode(',', $bounds[0]);
								
						$this->file->cutByPosBoundPost( UPDATE_DIR.$photo, $bs, 200, 200, false );
						
						//如果大于1M，则处理
						if($_FILES['avatar']['size'] > 1024*1024)
						{
						//	$this->image( UPDATE_DIR.$photo ,UPDATE_DIR.$photo, 400, 400);
						}
						$data['avatar'] = $photo;
					}

				}
				if ( $mdl_user->updateUserById( $data, $this->loginUser['id'] ) ) {
					$this->formReturn['success'] = true;
					$this->formReturn['msg'] = 'success';
					$this->setData( array_merge( $this->loginUser, $data ), 'loginUser' );
				}
				else {
					$this->formReturn['success'] = false;
					$this->formReturn['msg'] = 'Save failed';
				}
			}
		}

		$this->formData = array_merge( $this->loginUser, $this->formData );

		$this->setData( $this->formError, 'formError' );
		$this->setData( $this->formReturn, 'formReturn' );
		$this->setData( $this->formData, 'formData' );

		$this->setData( 'profile', 'member_menu' );
		$this->setData( 'Essential Information - '.$this->site['pageTitle'], 'pageTitle' );
		$user=$this->loginUser;
      if($user['role']!=4){
          $this->display( 'member/user_profile' );
      }else{
          $this->display( 'member/supplier_profile_edit' );
      }

	}
    /**
     * 基本设置修改
     */
    function profile_edit_action() {
        if ( is_post() ) {
            $data = post('data');
            $this->formData = $data;
            if ( empty( $data['displayName']) || empty( $data['phone'] ) || empty( $data['email'] ) ) {
                $this->formError[] = 'Please fill in the form then submit it';
            }
            $email = $data['email'];
            $mdl_reg = $this->loadModel( 'reg' );
            $mdl_user = $this->loadModel( 'user' );
            if ( ! $mdl_reg->chkMail( $data['email'] ) ) {
                $this->formError[] = 'The mailbox format is incorrect';
            }
            if ( !$this->formError && $mdl_user->getCount( array( "(email='$email')", 'id<>'.$this->loginUser['id'] ) ) > 0 ) {
                $this->formError[] = 'The mailbox already exists. Please change another mailbox';
            }
            if ( ! preg_match( "/^\d{8,11}$/", $data['phone'] ) ) {
                $this->formError[] = 'The phone format is incorrect';
            }
            if ( !$this->formError ) {

                $photoObj = $_FILES['avatar'];

                if ( $photoObj['size'] > 0 ) {
                    $bounds = post( 'bounds' );
                    $allow_exts = array( 'jpg', 'jpeg', 'gif', 'png' );
                    $filepath = date( 'Y-m' );
                    $this->file->createdir( 'data/upload/'.$filepath );

                    $photo = $this->file->upfile( $allow_exts, $photoObj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
                    if ( $photo ) {
                        $bs = explode(',', $bounds[0]);

                        $this->file->cutByPosBoundPost( UPDATE_DIR.$photo, $bs, 200, 200, false );

                        //如果大于1M，则处理
                        if($_FILES['avatar']['size'] > 1024*1024)
                        {
                            //$this->image( UPDATE_DIR.$photo ,UPDATE_DIR.$photo, 400, 400);
                        }
                        $data['avatar'] = $photo;
                    }

                }
                if ( $mdl_user->updateUserById( $data, $this->loginUser['id'] ) ) {
                    $this->formReturn['success'] = true;
                    $this->formReturn['msg'] = 'Save Success';

                    $this->setData( array_merge( $this->loginUser, $data ), 'loginUser' );
                }
                else {
                    $this->formReturn['success'] = false;
                    $this->formReturn['msg'] = 'Save False';
                }
            }
        }

        $this->formData = array_merge( $this->loginUser, $this->formData );

        $this->setData( $this->formError, 'formError' );
        $this->setData( $this->formReturn, 'formReturn' );
        $this->setData( $this->formData, 'formData' );

        $this->setData( 'profile', 'member_menu' );
        $this->setData( 'Essential Information - '.$this->site['pageTitle'], 'pageTitle' );

        $this->display( 'member/profile_edit' );
    }
	
	/**
	 * 上传头像
	 */
//	function upload_avatar_action() {
//		if ( is_post() ) {
//			$mdl_user = $this->loadModel( 'user' );
//			$data = post('data');
//			$this->formData = $data;
//			//print_r($_FILES);exit;
//			$photoObj = $_FILES['avatar'];
//			$bounds = post( 'bounds' );
//			if ( $photoObj['size'] > 0 ) {
//				$photoObj = $_FILES['avatar'];
//
//				if ( $photoObj['size'] > 0 ) {
//					$allow_exts = array( 'jpg', 'jpeg', 'gif', 'png' );
//					$filepath = date( 'Y-m' );
//					$this->file->createdir( 'data/upload/'.$filepath );
//
//					$photo = $this->file->upfile( $allow_exts, $photoObj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
//					if ( $photo ) {
//						$bs = explode(',', $bounds[0]);
//
//						$this->file->cutByPosBoundPost( UPDATE_DIR.$photo, $bs, 200, 200, false );
//
//						//如果大于1M，则处理
//						if($_FILES['avatar']['size'] > 1024*1024)
//						{
//							//$this->image( UPDATE_DIR.$photo ,UPDATE_DIR.$photo, 400, 400);
//						}
//						$data['avatar'] = $photo;
//					}
//
//				}
//			}
//			if ( $mdl_user->updateUserById( $data, $this->loginUser['id'] ) ) {
//				if ( is_ajax() )
//				{
//					echo 'ok';
//					exit;
//				}
//				else
//				{
//				$this->formReturn['success'] = true;
//				$this->formReturn['msg'] = '上传成功';
//				$this->sheader(HTTP_ROOT_WWW . 'member/user_profile');
//				}
//			}
//			else {
//				$this->formReturn['success'] = false;
//				$this->formReturn['msg'] = '上传失败';
//			}
//
//		}
//	}

    /**
     * 上传头像
     */
    function upload_avatar_action() {
        if ( is_post() ) {
            $mdl_user = $this->loadModel( 'user' );
            $data = post('data');
            $this->formData = $data;
            //print_r($_FILES);exit;
            $photoObj = $_FILES['avatar'];
            $bounds = post( 'bounds' );
            if ( $photoObj['size'] > 0 ) {
                $photoObj = $_FILES['avatar'];

                if ( $photoObj['size'] > 0 ) {
                    $allow_exts = array( 'jpg', 'jpeg', 'gif', 'png' );
                    $filepath = date( 'Y-m' );
                    $this->file->createdir( 'data/upload/'.$filepath );

                    $photo = $this->file->upfile( $allow_exts, $photoObj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
                    if ( $photo ) {
                        $bs = explode(',', $bounds[0]);

                        $this->file->cutByPosBoundPost( UPDATE_DIR.$photo, $bs, 200, 200, false );

                        //如果大于1M，则处理
                        if($_FILES['avatar']['size'] > 1024*1024)
                        {
                            //$this->image( UPDATE_DIR.$photo ,UPDATE_DIR.$photo, 400, 400);
                        }
                        $data['avatar'] = $photo;
                    }

                }
            }
            require_once 'core/smarty/plugins/modifier.image.php';
            if ( $mdl_user->updateUserById( $data, $this->loginUser['id'] ) ) {
                if ( is_ajax() )
                {
                    smarty_modifier_image( UPDATE_DIR.$photo ,108, 108);
                    $result = array('data' => $photo, 'msg' => '1', 'status' => 1);
                    echo json_encode($result);
                    exit;
                } else
                {
                    $this->formReturn['success'] = true;
                    $this->formReturn['msg'] = '上传成功';
                    $this->sheader(HTTP_ROOT_WWW . 'member/profile_edit');
                }
            }
            else {
                $this->formReturn['success'] = false;
                $this->formReturn['msg'] = '上传失败';
            }

        }
    }


    /**
     * 车辆管理
     */
    function cars_action() {
        $mdl_cars = $this->loadModel( 'cars' );
        $mdl_car_pics = $this->loadModel( 'car_pics' );
        $cars=$mdl_cars->getList(null,array('uid'=>$this->loginUser['id']));
        $this->setData($cars,'cars');
        $this->setData( 'cars', 'member_menu' );
        $this->display( 'member/cars' );
    }
    /**
     * 车辆编辑
     */
    function car_edit_action() {
        $id= (int)get2( 'id' );
        $mdl_cars = $this->loadModel( 'cars' );
        $mdl_car_pics = $this->loadModel( 'car_pics' );
        $car=$mdl_cars->get($id);
        if(is_post()){
            $data = $_POST;
            $this->formData = $data;
            $data['brandSimilar']=$data['brandSimilar']?$data['brandSimilar']:0;
            $data['babySeat']=$data['babySeat']?$data['babySeat']:0;
            $data['extraWeight']=$data['extraWeight']?$data['extraWeight']:0;
            if($data['type']){
                if(empty($data['carType'])||empty($data['price'])){
                    $this->formError[] = 'Please fill in the form then submit it';
                }
            }
            if(empty($data['seatCapacity'])||empty($data['luggage'])){
                $this->formError[] = 'Please fill in the form then submit it';
            }
            if($data['carType']=='Sedan'&&empty($data['carType2'])){
                $this->formError[] = 'Please select the car type completely';
            }
            if ( !$this->formError ) {
                if($car){
                    if($car['uid']!=$this->loginUser['id']){
                        $this->formError[] = 'Car information does not match with user';
                        exit;
                    }
                    $data['updateTime'] = time();
                    $mdl_cars->begin();
                    if($data['price']!=$car['price']||$data['basePrice']!=$car['basePrice']||$data['baseDistance']!=$car['baseDistance']) {
                        $data['status'] = 0;
                    }
                    $mdl_cars->update( $data, $car['id'] );
                    if ( !$mdl_cars->isError() ) {
                        $mdl_cars->commit();
                        $this->formReturn['success'] = true;
                        $this->formReturn['msg'] = 'success';
                        $this->sheader('cars');
                    } else {
                        $mdl_cars->rollback();
                        $this->formReturn['success'] = false;
                        $this->formReturn['msg'] = 'Save failed';
                        print_r($mdl_cars->getErrors());exit;
                    }
                }else{
                    $data['uid']=$this->loginUser['id'];
                    $data['createTime'] = time();
                    $data['updateTime'] = $data['createTime'];
                    $mdl_cars->begin();
                    $carId = $mdl_cars->insert( $data );
                    if ( !$mdl_cars->isError() ) {
                        $mdl_cars->commit();
                        $this->formReturn['success'] = true;
                        $this->formReturn['msg'] = 'success';
                        $this->sheader('cars');
                    } else {
                        $mdl_cars->rollback();
                        $this->formReturn['success'] = false;
                        $this->formReturn['msg'] = 'Save failed';
                        print_r($mdl_cars->getErrors());exit;
                    }
                }
            }
        }
        if($car){
            $pics = $mdl_car_pics->getList( null, array( 'cid' => $car['id']), 'sortnum asc ' );
            $this->setData( $pics, 'pics' );
        }
        $this->formData = array_merge( $car, $this->formData );
        $this->setData( $this->formError, 'formError' );
        $this->setData( $this->formReturn, 'formReturn' );
        $this->setData( $this->formData, 'formData' );
        $data['uid']=$this->loginUser['id'];
        $this->setData( 'cars', 'member_menu' );
        $this->display( 'member/car_edit' );
    }

    public function post_photo_add_action () //act_name = 上传图片
    {
        if ( is_post() ) {
            $cid = (int)get2( 'cid' );
            $mdl_cars = $this->loadModel( 'cars' );
            $car = $mdl_cars->get( $cid );
            if ( $car ) {
                $photoObj = $_FILES['photo'];
                $allow_exts = array( 'jpg', 'jpeg', 'gif', 'png' );
                $filepath = date( 'Y-m' );
                $this->file->createdir( 'data/upload/'.$filepath );
                $objs = array();
                if ( is_array( $photoObj['name'] ) ) {
                    foreach ( $photoObj['name'] as $k => $name ) {
                        $objs[] = array(
                            'name' => $name,
                            'type' => $photoObj['type'][$k],
                            'tmp_name' => $photoObj['tmp_name'][$k],
                            'error' => $photoObj['error'][$k],
                            'size' => $photoObj['size'][$k]
                        );
                    }
                }
                else $objs = $photoObj;

                $uploadedFiles = array();
                $mdl_car_pics = $this->loadModel( 'car_pics' );
                foreach ( $objs as $obj ) {
                    $photo = $this->file->upfile( $allow_exts, $obj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
                    if ( $photo ) {
                        $sortnum = $mdl_car_pics->getMax( 'sortnum', array( 'cid' => $cid) ) + 10;
                        if ( $id = $mdl_car_pics->insert( array( 'sortnum' => $sortnum, 'cid' => $cid, 'pic' => $photo ) ) ) {
                            $uploadedFiles[] = array( 'img' => $photo, 'id' => $id );
                        }
                        else {
                            $this->file->deletefile( UPDATE_DIR.$photo );
                        }
                    }
                }
                if ( $uploadedFiles ) {
                        $pics = $mdl_car_pics->getList( null, array( 'cid' => $car['cid']), 'sortnum asc' );
                        $mdl_cars->update( array( 'pic' => $pics[0]['pic'] ? $pics[0]['pic'] : '' ), $car['id'] );
                        $result = array( 'status' => 200, 'pics' => $uploadedFiles );
                        echo json_encode( $result );exit;
                } else {
                    $result = array( 'status' => 500, 'msg' => '上传图片失败2' );
                    echo json_encode( $result );exit;
                }
                $data1['status']=0;
                $mdl_cars->update( $data1, $car['id'] );
            }
            $result = array( 'status' => 500, 'msg' => '上传图片失败1' );
            echo json_encode( $result );exit;
        }
    }

    public function post_photo_del_action () //act_name = 删除图片
    {
        $id = (int)get2( 'id' );
        $mdl_cars = $this->loadModel( 'cars' );
        $mdl_car_pics = $this->loadModel( 'car_pics' );
        $pic = $mdl_car_pics->get( $id );
        $car = $mdl_cars->get( $pic['cid'] );
        if ( $pic && $car ) {
            if ( $mdl_car_pics->delete( $pic['id'] ) ) {
                $this->file->deletefile( UPDATE_DIR.$pic['pic'] );
                    $pics = $mdl_car_pics->getList( null, array( 'cid' => $car['id']), 'sortnum asc' );
                    $mdl_cars->update( array( 'pic' => $pics[0]['pic'] ? $pics[0]['pic'] : '' ), $car['id'] );
                $result = array( 'status' => 200 );
                echo json_encode( $result );exit;
            }else {
                $result = array( 'status' => 500, 'msg' => '删除失败' );
                echo json_encode( $result );exit;
            }
            $data1['status']=0;
            $mdl_cars->update( $data1, $car['id'] );
        }
        $result = array( 'status' => 500, 'msg' => '错误的参数' );
        echo json_encode( $result );exit;
    }

    public function post_photo_sort_action () //车辆图片排序
    {
        $ids = explode( ',', get2( 'ids' ) );
        $sortnums = explode( ',', get2( 'sortnums' ) );
        $mdl_cars = $this->loadModel( 'cars' );
        $mdl_car_pics = $this->loadModel( 'car_pics' );

        foreach ( $ids as $k => $id ) {
            $id = (int)$id;
            $sortnum = (int)$sortnums[$k];
            if ( $id > 0 && $sortnum > 0 ) {
                $mdl_car_pics->update( array( 'sortnum' => $sortnum * 10 ), $id );
            }
        }

            $car = $mdl_cars->get( (int)get2( 'id' ) );
            if ( $car) {
                $pics = $mdl_car_pics->getList( null, array( 'cid' => $car['id']), 'sortnum asc' );
                $mdl_cars->update( array( 'pic' => $pics[0]['pic'] ? $pics[0]['pic'] : '' ), $car['id'] );
                $data1['status']=0;
                $mdl_cars->update( $data1, $car['id'] );
            }

        $result = array( 'status' => 200, 'msg' => '保存排序成功' );
        echo json_encode( $result );exit;
    }
    //车辆删除
    public function car_delete_action ()
    {
        if ( is_post() ) {
            $ids = post( 'ids' );
            if ( is_array( $ids ) ) {
                foreach ( $ids as $k => $v ) {
                    self::car_delete( (int)$v );
                }
            }
        }
        else {
            self::car_delete( (int)get2( 'id' ) );
        }
        $this->sheader( 'cars' );
    }
    function car_delete ( $id ) {
        $id = (int)$id;
        $mdl_cars = $this->loadModel( 'cars' );
        $mdl_car_pics = $this->loadModel( 'car_pics' );
        $car = $mdl_cars->get( $id );
        if ( !$car ) {
            $this->sheader( null, $this->lang->current_record_not_exists."<br />id:$id" );
        }
        if ( $mdl_cars->delete( $id ) ) {
            $pics = $mdl_car_pics->getList( null, array( 'cid' => $car['id'] ) );
            foreach ( $pics as $pic ) {
                $this->file->deletefile( UPDATE_DIR.$pic['pic'] );
            }
        }
        else {
            $this->sheader( null, $this->lang->delete_failed."<br />id:$id" );
        }
    }
	//发短信
	function sms_action() {
		
		//global $SMS_ENABLE, $TIME_LIMIT;
		$TIME_LIMIT = 30;
		$SMS_ENABLE = true;
		if ( $_SESSION['user_reg_code_time'] + $TIME_LIMIT > time() ) {
			echo json_encode( array( 'status' => 500, 'msg' => '请等待'.$TIME_LIMIT.'秒后再重新发送' ) ); exit;
		}

		$phone = trim( $_GET['phone'] );
		/* if ( !preg_match( '/^1[0-9]{10}$/', $phone ) ) {
			echo json_encode( array( 'status' => 500, 'msg' => '手机号码格式不正确，请输入11位手机号码' ) ); exit;
		} */

		//生成验证码
		$string = "1234567890";  //要随机产生的字符
		$s = str_split( $string );
		$num = 6;  //字符数
		$str = "";
		for ( $i = 0; $i < $num; $i++ ) {
			$str .= $s[rand( 0, strlen( $string ) - 1 )];
		}
		$code = $str;
		
		$content = '#code#='.urlencode( $code ).'&#company#='.urlencode( $this->company );
		
		if ( $SMS_ENABLE )
			//$sendResult = sendMSM($phone, $code);
			$sendResult = sendMSM( $phone, $content, 2);
		
		else
			$sendResult = array( 'status' => 200, 'msg' => $code );

		if ( $sendResult['status'] == 200 ) {
			$_SESSION['user_reg_code'] = $code;
			$_SESSION['user_reg_code_time'] = time();
			echo json_encode( array( 'status' => 200, 'msg' => $sendResult['msg'] ) ); exit;
		}
		else {
			//echo json_encode( array( 'status' => 500, 'msg' => serialize( $sendResult) ) ); exit;
			echo json_encode( array( 'status' => 500, 'msg' => $sendResult['msg'] ) ); exit;
		}
	}
		
	/**
	 * 司机申请
	 */
	function register_driver_action() {
		
		
		if($this->loginUser['isDriver'] == 2)
			$this->sheader(HTTP_ROOT_WWW . 'member/order_driver2');
		
		if ( is_post() ) {
			$data = post('data');
			$this->formData = $data;
			$code = post( 'code' );
			
			$proofObj = $_FILES['proof'];
			$driverLicenseObj = $_FILES['driverLicense'];
			$driverCarPhotoObj = $_FILES['driverCarPhoto'];
			$driverCarInsuranceObj = $_FILES['driverCarInsurance'];
			
			//print_r($driverCarPhotoObj);exit;
			
			if ( empty( $data['accountNumber'] ) ||empty( $data['accountName'] ) ||empty( $data['bsb'] ) ||empty( $data['displayName'] ) || empty( $data['sex'] ) || empty( $data['year'] ) || empty( $data['phone'] )|| empty( $data['driverType'] )|| empty( $code ) ||(!$this->loginUser['proof'] &&empty( $proofObj['name'] )) ||(!$this->loginUser['driverLicense'] &&empty( $driverLicenseObj['name'] )) || (!$this->loginUser['driverCarPhoto'] &&empty( $driverCarPhotoObj['name'] )) ||   (!$this->loginUser['driverCarInsurance'] && empty( $driverCarInsuranceObj['name'] ) )   ) {
				$this->formError[] = '请将表单填写好再提交';
			}
			
			//手机验证码验证//
			if($_SESSION['user_reg_code'] != $code)
			{
				$this->formError[] = '验证码错误';
			}
				
			if ( !$this->formError ) {
				
				$mdl_reg = $this->loadModel( 'reg' );
				$mdl_user = $this->loadModel( 'user' );
				$data['isDriver'] = 1; //待审核
				
				//proofObj
				if ( $proofObj['size'] > 0 ) {
					$allow_exts = array( 'jpg', 'jpeg', 'gif', 'png', 'pdf' );
					$filepath = date( 'Y-m' );
					$this->file->createdir( 'data/upload/'.$filepath );
					
					$proof = $this->file->upfile( $allow_exts, $proofObj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
					if ( $proof ) {
						$data['proof'] = $proof;
					}
				}
				
				//driverLicenseObj
				if ( $driverLicenseObj['size'] > 0 ) {
					$allow_exts = array( 'jpg', 'jpeg', 'gif', 'png', 'pdf' );
					$filepath = date( 'Y-m' );
					$this->file->createdir( 'data/upload/'.$filepath );
					
					$driverLicense = $this->file->upfile( $allow_exts, $driverLicenseObj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
					if ( $driverLicense ) {
						$data['driverLicense'] = $driverLicense;
					}
				}
				
				//driverCarPhotoObj
				if ( $driverCarPhotoObj['size'] > 0 ) {
					$allow_exts = array( 'jpg', 'jpeg', 'gif', 'png', 'pdf' );
					$filepath = date( 'Y-m' );
					$this->file->createdir( 'data/upload/'.$filepath );
					
					$driverCarPhoto = $this->file->upfile( $allow_exts, $driverCarPhotoObj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
					if ( $driverCarPhoto ) {
						$data['driverCarPhoto'] = $driverCarPhoto;
					}
				}
				
				//driverCarInsuranceObj
				if ( $driverCarInsuranceObj['size'] > 0 ) {
					$allow_exts = array( 'jpg', 'jpeg', 'gif', 'png', 'pdf' );
					$filepath = date( 'Y-m' );
					$this->file->createdir( 'data/upload/'.$filepath );
					
					$driverCarInsurance = $this->file->upfile( $allow_exts, $driverCarInsuranceObj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
					if ( $driverCarInsurance ) {
						$data['driverCarInsurance'] = $driverCarInsurance;
					}
				}

				if ( $mdl_user->updateUserById( $data, $this->loginUser['id'] ) ) {
					$this->formReturn['success'] = true;
					$this->formReturn['msg'] = '保存成功';
					
					$this->setData( array_merge( $this->loginUser, $data ), 'loginUser' );
				}
				else {
					$this->formReturn['success'] = false;
					$this->formReturn['msg'] = '保存失败';
				}
			}
		}

		$this->formData = array_merge( $this->loginUser, $this->formData );

		$this->setData( $this->formError, 'formError' );
		$this->setData( $this->formReturn, 'formReturn' );
		$this->setData( $this->formData, 'formData' );

		$this->setData( 'register_driver', 'member_menu' );
		$this->setData( '注册司机 - '.$this->site['pageTitle'], 'pageTitle' );

		
		
		
		if(get2('gavin') == 1)
			$this->display( 'driver/register-driver2' );
		else
			$this->display( 'driver/register-driver' );
		
	}
	
	/**
	 * 订房顾问申请
	 */
	function register_landlord_action() {
		if ( is_post() ) {
			$data = post('data');
			$this->formData = $data;
			$code = post( 'code' );
			
			$proofObj = $_FILES['proof'];
			$resumeObj = $_FILES['resume'];
			
			//print_r($proofObj);exit;
			
			if ( empty( $data['displayName'] ) || empty( $data['sex'] ) || empty( $data['year'] ) || empty( $code ) ||(!$this->loginUser['proof'] &&empty( $proofObj['name'] )) ||(empty( $resumeObj['name'] )) || empty( $data['country'] ) || empty( $data['region'] ) || empty( $data['city'] ) || empty( $data['job'] ) || empty( $data['landlordWhy'] ) || empty( $data['landlordDifficulty'] ) || empty( $data['landlordExperience'] )   ) {
				$this->formError[] = '请将表单填写好再提交';
			}
			
	
			$mdl_reg = $this->loadModel( 'reg' );
			$mdl_user = $this->loadModel( 'user' );
			
			//手机验证码验证//
			if($_SESSION['user_reg_code'] != $code)
			{
				$this->formError[] = '验证码错误';
			}
			if ( !$this->formError ) {
				
				$data['isLandlord'] = 1; //待审核
				
				//proofObj
				if ( $proofObj['size'] > 0 ) {
					$allow_exts = array( 'jpg', 'jpeg', 'gif', 'png', 'pdf' );
					$filepath = date( 'Y-m' );
					$this->file->createdir( 'data/upload/'.$filepath );
					
					$proof = $this->file->upfile( $allow_exts, $proofObj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
					if ( $proof ) {
						$data['proof'] = $proof;
					}
				}
				
				//resumeObj
				if ( $resumeObj['size'] > 0 ) {
					$allow_exts = array( 'jpg', 'jpeg', 'gif', 'png', 'pdf', 'doc', 'docx' );
					$filepath = date( 'Y-m' );
					$this->file->createdir( 'data/upload/'.$filepath );
					
					$resume = $this->file->upfile( $allow_exts, $resumeObj, UPDATE_DIR, $filepath.'/'.date( 'YmdHis' ).$this->createRnd() );
					if ( $resume ) {
						$data['landlordResume'] = $resume;
					}
				}
				
				if ( $mdl_user->updateUserById( $data, $this->loginUser['id'] ) ) {
					$this->formReturn['success'] = true;
					$this->formReturn['msg'] = '保存成功';
					
					$this->setData( array_merge( $this->loginUser, $data ), 'loginUser' );
				}
				else {
					$this->formReturn['success'] = false;
					$this->formReturn['msg'] = '保存失败';
				}
			}
		}
		
		

		$this->formData = array_merge( $this->loginUser, $this->formData );

		$this->setData( $this->formError, 'formError' );
		$this->setData( $this->formReturn, 'formReturn' );
		$this->setData( $this->formData, 'formData' );

		$this->setData( 'register_landlord', 'member_menu' );
		$this->setData( '注册订房顾问 - '.$this->site['pageTitle'], 'pageTitle' );

		if(get2('gavin') == 1)
			$this->display( 'landlord/register-landlord2' );
		else
			$this->display( 'landlord/register-landlord' );
		
	}

    /**
     * 我的接送机订单列表
     */
    function order_action() {
        $mdl_orders = $this->loadModel( 'order' );
        if($this->loginUser['role'] != 4){//用户和中介
            $orders_complete = $mdl_orders->getList(null, array('userId' => $this->loginUser['id'],'pflag' => 1,'ispay'=>'1'),'createTime desc');
            $orders_upcoming = $mdl_orders->getList(null, array('userId' => $this->loginUser['id'],'pflag' => 0,'ispay'=>'1'),'createTime desc');
            $orders_cancel = $mdl_orders->getList(null, array('userId' => $this->loginUser['id'],'pflag' => 2,'ispay'=>'1'),'createTime desc');
        }else{//接送机服务提供者
            $orders_upcoming = $mdl_orders->getList(null, array('providerId' => $this->loginUser['id'],'pflag' => 0,'ispay'=>'1'),'createTime desc');
            $orders_complete = $mdl_orders->getList(null, array('providerId' => $this->loginUser['id'],'pflag' => 1,'ispay'=>'1'),'createTime desc');
            $orders_cancel = $mdl_orders->getList(null, array('providerId' => $this->loginUser['id'],'pflag' => 2,'ispay'=>'1'),'createTime desc');
        }
        $this->setData( $orders_upcoming, 'orders_upcoming' );
        $this->setData( $orders_complete, 'orders_complete' );
        $this->setData( $orders_cancel, 'orders_cancel' );

        $this->setData( 'order - '.$this->site['pageTitle'], 'pageTitle' );
        $this->setData( 'order', 'member_menu' );
        $this->display( 'member/orders' );
    }
    /**
     * 接送机订单取消列表
     */
    function order_cancel_action(){
        $id=get2('orderId');
        $mdl_order=$this->loadModel( 'order' );
        $order=$mdl_order->get($id);
        if($order['userId']==$this->loginUser['id']&&$order['pflag']!=2){
            if($mdl_order->update( array('pflag'=>2),$id )){
                echo 'ok';
            }
        }else{
            echo "error";
        }
    }
    /**
     * 我的接送机订单详情-用户和中介
     */
    function order_detail_action() {
        $mdl_orders = $this->loadModel( 'order' );
        $id = get2('id');
        if($id)
        {
            $order = $mdl_orders->get($id);
        }
        $this->setData($order,'order');
        $this->setData( 'order - '.$this->site['pageTitle'], 'pageTitle' );
        $this->setData( 'order', 'member_menu' );
        $this->display( 'member/order_detail' );
    }


    /**
     * 我的接送机订单佣金-中介
     */
    function commission_action() {
        $mdl_orders = $this->loadModel( 'order' );
        $commission = $mdl_orders->getList(null, array('userId' => $this->loginUser['id'],'type' => 1,'pflag'=>1),'refundTime desc');
        $totalfee=0;
        foreach ($commission as $k=>$v){
            $totalfee+=$v['fee'];
        }
        $totalcommissionfee=$totalfee*$this->configs['commission']/100;
        $this->setData($commission,'commission');
        $this->setData($totalcommissionfee,'totalcommissionfee');
        $this->setData( 'commission - '.$this->site['pageTitle'], 'pageTitle' );
        $this->setData( 'commission', 'member_menu' );
        $this->display( 'member/commission' );
    }
    /**
     * 我的退款-用户和中介
     */
    function refund_action() {
        $mdl_orders = $this->loadModel( 'order' );
        $refunds_carbooking = $mdl_orders->getList(null, array('userId' => $this->loginUser['id'],'type' => 1,'pflag'=>2),'refundTime desc');
        //$spot = $mdl_orders->getList(null, array('userId' => $this->loginUser['id'],'type'=> 2,'pflag'=>2),'refundTime desc');

        $this->setData( $refunds_carbooking, 'refunds_carbooking' );
//        $this->setData( $spot, 'spot' );

        $this->setData( 'refund - '.$this->site['pageTitle'], 'pageTitle' );
        $this->setData( 'refund', 'member_menu' );
        $this->display( 'member/refund' );
    }
    /**
     * 我的日程-接送机服务提供者
     */
    function calendar_action(){
        $this->setData( 'calendar - '.$this->site['pageTitle'], 'pageTitle' );
        $this->setData( 'calendar', 'member_menu' );
        $this->display( 'member/calendar' );
    }

    /**
     * 我的评论-接送机服务提供者
     */
    function comment_action(){
        $mdl_comment = $this->loadModel( 'order_comment' );
        $comments=$mdl_comment->getList(null,array('providerId'=>$this->loginUser['id']),'createTime desc');
        $this->setData( $comments, 'comments' );
        $this->setData( 'comment - '.$this->site['pageTitle'], 'pageTitle' );
        $this->setData( 'comment', 'member_menu' );
        $this->display( 'member/comments' );
    }
    /**
     * 添加评论-用户和中介
     */
    function add_comment_action(){
        $mdl_comment = $this->loadModel( 'order_comment' );
        $mdl_orders = $this->loadModel( 'order' );
        $orderid = post('orderid');
        if($orderid)
        {
            $where['orderId']=$orderid;
            $order=$mdl_orders->getByWhere($where);
            $data['orderId']=$orderid;
            $data['comment']=trim(post('comment'));
            $data['score']=trim(post('score'));
            $data['createTime']=time();
            $data['status']=0;
            $data['userId']=$order['userId'];
            $data['providerId']=$order['providerId'];
            if($data['score']==""||$data['comment']==""){
                echo "Please mark and fill in the comments";
                exit;
            }else{
                if($mdl_comment->insert($data)) {
                    echo 'ok';
                    exit;
                }else{
                    echo 'error';
                    exit;
                }
            }
        }else{
            echo 'error';
            exit;
        }
    }

    /**
     * 我的认证资料-接送机服务提供者
     */
    function certification_action(){

        $this->setData( 'certification - '.$this->site['pageTitle'], 'pageTitle' );
        $this->setData( 'certification', 'member_menu' );
        $this->display( 'member/certification' );
    }
    /**
     * 我的认证资料修改-接送机服务提供者
     */
    function certification_edit_action(){

        $this->setData( 'certification - '.$this->site['pageTitle'], 'pageTitle' );
        $this->setData( 'certification', 'member_menu' );
        $this->display( 'member/certification_edit' );
    }
	
	/**
	 * 修改密码
	 */
	function change_password_action() {
		if ( is_post() ) {
			$oldpwd = trim( post( 'oldpwd' ) );
			$pwd = trim( post( 'pwd' ) );
			$pwd2 = trim( post( 'pwd2' ) );

			if ( empty( $oldpwd ) || empty( $pwd ) || empty( $pwd2 ) ) {
				$this->formError[] = 'Please fill in the form and submit it';
			}
			if ( !$this->formError && $this->md5( $oldpwd ) != $this->loginUser['password'] ) {
				$this->formError[] = 'The old password is incorrect';
			}
			$mdl_reg = $this->loadModel( 'reg' );
			if ( ! $mdl_reg->chkPassword( $pwd ) ) {
				$this->formError[] = 'The password requires 6-16 strings consisting of A-Z, A-Z, 0-9, and underscore';
			}
			if ( !$this->formError && $pwd != $pwd2 ) {
				$this->formError[] = 'Confirm password inconsistency';
			}

			if ( !$this->formError ) {
				$passwordByCustomMd5 = $this->md5( $pwd );
				$data = array();

				$data['password'] = $passwordByCustomMd5;

				$mdl_user = $this->loadModel('user');
				if ( $mdl_user->updateUserById( $data, $this->loginUser['id'] ) ) {
					$this->session( 'member_user_id', $this->loginUser['id'] );
					$this->session( 'member_user_shell', $this->md5( $this->loginUser['id'].$this->loginUser['name'].$passwordByCustomMd5 ) );
					$this->formReturn['success'] = true;
					$this->formReturn['msg'] = 'Modify success';
				}
				else {
					$this->formReturn['success'] = false;
					$this->formReturn['msg'] = 'Modify failed';
				}
			}
		}

		$this->setData( $this->formError, 'formError' );
		$this->setData( $this->formReturn, 'formReturn' );

		$this->setData( 'change_password', 'member_menu' );
		$this->setData( 'Change Password - '.$this->site['pageTitle'], 'pageTitle' );
		$this->display( 'member/resetpassword' );
	}
	//验证订单是否已支付
	function order_ispay_action(){
		
			$result = array();
			$orderId = trim( get2( 'orderId' ) );
			//$payType = trim( post( 'payType' ) );
			$type = trim( get2( 'type' ) );
			
			if($type=='driver') 
				$mdl_order = $this->loadModel('order_driver');
			else if($type=='landlord') 
				$mdl_order = $this->loadModel('order_landlord');
			else if($type=='teacher') 
				$mdl_order = $this->loadModel('order_teacher');
			else
			{
				$result['msg'] = '订单错误';
				$result['status'] = 0;
				//echo json_encode( $result ); exit;
			}
			
			//判断订单是否存在
			$order = $mdl_order->getByWhere(array('orderNo' => $orderId));

			if (!$orderId || !$order || $order['userId'] != $this->loginUser['id']) {
				$result['msg'] = '订单不存在或有错误';
				$result['status'] = 0;
				//echo json_encode( $result ); exit;
				
			}
			if ($order['isPay']) {
				$result['msg'] = '订单已付款';
				$result['status'] = 1;
				//echo json_encode( $result ); exit;
			}else{
				$result['msg'] = '订单未付款';
				$result['status'] = 0;
				
				
			}
		
		if(get2('ajax'))
		{
			echo json_encode( $result ); exit;
		}
		
		$this->setData( $type, 'type' );
		$this->setData( $order, 'order' );
		$this->display( 'payment/paypal/return' );
	}
	
	
	//订单支付
	function order_pay_action() {
	  
    if ( is_post() ) {

		//提交支付
		$result = array();

		$orderId = trim( post( 'orderId' ) );
		$payType = trim( post( 'payType' ) );
		$type = trim( post( 'type' ) );
		if($type=='driver') 
			$mdl_order = $this->loadModel('order_driver');
		else if($type=='landlord') 
			$mdl_order = $this->loadModel('order_landlord');
		else if($type=='teacher') 
			$mdl_order = $this->loadModel('order_teacher');
		else
			{
				$result['msg'] = '订单错误';
				$result['status'] = 0;
				echo json_encode( $result ); exit;
			}
		//判断订单是否存在
		$orders = $mdl_order->getByWhere(array('orderNo' => $orderId));

		if (!$orderId || !$orders || $orders['userId'] != $this->loginUser['id']) {
			$result['msg'] = '订单不存在或有错误';
			$result['status'] = 0;
			echo json_encode( $result ); exit;
			//$this->formError[] = '订单不存在或有错误';
		}
		if ($orders['isPay']) {
			$result['msg'] = '订单已付款';
			$result['status'] = 0;
			echo json_encode( $result ); exit;
			//$this->formError[] = '订单已付款';
		}
		if ( !$payType ) {
			$result['msg'] = '未选择支付类型';
			$result['status'] = 0;
			echo json_encode( $result ); exit;
			//$this->formError[] = '未选择支付类型';
		}

		$result['msg'] = "正在跳转到支付页";
		$result['status'] = 1;
		$result['orderId'] = (string)$orderId;
		$result['payType'] = $payType;
		$result['type'] = $type;
		echo json_encode( $result ); exit;
		
		
		if ( !$this->formError ) {
			
			
			
			$data = array();
			$data['isPay'] = 1;
			$data['payType'] = $payType;
			$data['payTime'] = time();
			if ( $mdl_order->update( $data, $orders['id']) ) {
				$this->formReturn['success'] = true;
				$this->formReturn['msg'] = '支付成功';
				
				//支付成功后，给管理员发送通知
				$mdl_adminemail = $this->loadModel( 'adminemail' );
				$admin_email = $mdl_adminemail->get();
				$email = $this->loginUser["email"];
				
				if($type=='driver') 
				{
					$subject = "[".$this->site['name']."]有新的专车订单,请及时处理";
					$content = "<p>订单号：".$orders['orderNo']."</p><p>请及时进后台处理</p><p>============================</p>".HTTP_ROOT;
					$receiver = $admin_email['email'];
					$this->sendMail( $receiver, $subject, $content, '', '');
					//$headers = "Content-Type: text/html; charset=UTF-8;\nFrom:$email\nReply-To:$email";
					//send_mail( $admin_email['email'], $subject, $content, $headers );
					//smtp_mail( $receiver, $subject, $content, '', '');
				}
				else if($type=='teacher') 
				{
					$subject = "[".$this->site['name']."]有新的导师订单,请及时处理";
					$content = "<p>订单号：".$orders['orderNo']."</p><p>请及时进后台处理</p><p>============================</p>".HTTP_ROOT;
					$receiver = $admin_email['email'];
					$this->sendMail( $receiver, $subject, $content, '', '');
					
				}
				else if($type=='landlord') 
				{
					$subject = "[".$this->site['name']."]有新的订房订单,请及时处理";
					$content = "<p>订单号：".$orders['orderNo']."</p><p>请及时进后台处理</p><p>============================</p>".HTTP_ROOT;
					$receiver = $admin_email['email'];
					$this->sendMail( $receiver, $subject, $content, '', '');
					
				}
				
			}
			else {
				$this->formReturn['success'] = false;
				$this->formReturn['msg'] = '支付失败';
			}
		}
		
		$this->setData( $this->formError, 'formError' );
		$this->setData( $this->formReturn, 'formReturn' );
		$this->setData( $this->formData, 'formData' );
			
    } else {
     
			$orderId = trim(get2('orderId'));
			$type = trim(get2('type'));
			
			if($type == 'driver')
				$mdl_order = $this->loadModel('order_driver');
			else if($type == 'landlord') 
				$mdl_order = $this->loadModel('order_landlord');
			else if($type == 'teacher') 
				$mdl_order = $this->loadModel('order_teacher');
			else
			{
				echo '订单错误'; exit;
			}
			
			//判断订单是否存在
			$orders = $mdl_order->getByWhere(array('orderNo' => $orderId));
			if (!$orderId || !$orders || $orders['userId'] != $this->loginUser['id']) {
				echo '订单不存在'; exit;
				//$this->sheader(HTTP_ROOT_WWW . 'member/orders', (string)$this->lang->review_not_exist);
			}
			if ($orders['isPay']) {
				echo '订单已支付'; exit;
				//$this->sheader(HTTP_ROOT_WWW . 'member/orders', (string)$this->lang->order_paid);  //是否已经支付过
			}

		
		}
		$this->setData((string)$this->lang->online_payment, 'pagename');
		$this->setData($orders, 'orders');
		$this->setData($type, 'type');
		$this->setData('orders', 'menu');
		$this->setData('在线支付 - ' . $this->site['pageTitle'], 'pageTitle');
		$this->display('member/orders_pay');
	}
  
  
	//订单在线支付
	function pay_action() {
		
			
		$orderId = trim( get2( 'orderId' ) );
		$payType = trim( get2( 'payType' ) );
		$type = trim( get2( 'type' ) );
		
		if($type=='driver') 
		{
			$mdl_order = $this->loadModel('order_driver');
			$ordername = '专车订单';
		}
		else if($type=='landlord') {
			$mdl_order = $this->loadModel('order_landlord');
			$ordername = '订房订单';
		}
		else if($type=='teacher') {
			$mdl_order = $this->loadModel('order_teacher');
			$ordername = '导师订单';
		}
		else
		{
			$this->sheader( null, '订单错误,请重试。' );
			
		}
		
		
		if ( !$payType ) {
			$this->sheader( null, '支付方式错误' );
		}

	
		$order = $mdl_order->getByWhere(array('orderNo'=>$orderId));

		if($order)
		{
			$ordername = $order['orderNo'];
			$totalPrice = $order['price'];
		}
		else
		{
			$this->sheader( null, '在线支付失败,请重试。' );
			//echo '在线支付失败,请重试。';
			//exit;
		}
		
		
		switch ( $payType ) {
			case 'paypal':
				//$action = $this->payments['paypal']['config']['sandmode'] ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';
				$action = 'https://www.paypal.com/cgi-bin/webscr';
				$business = 'admin@flybee.com.au';
				//$exchangerate = 0.1947; //人民币转外币转换费率
				//$totalPrice = number_format( (float)$totalPrice * $exchangerate, 2);
				$form = array();
				$form['cmd'] = '_xclick';
				if ( $isUserMoney ){
				$form['notify_url'] = HTTP_ROOT.'payment/paypal/notify?orderId='.$order['orderNo'].'&type='.$type.'&isUserMoney=true';
				} else {
				$form['notify_url'] = HTTP_ROOT.'payment/paypal/notify?orderId='.$order['orderNo'].'&type='.$type;
				}
				
				//echo $form['notify_url'];exit;
				
				//中转notify_url
				//$form['notify_url'] = 'http://demo.legendwebdesign.com.au/she?url='.urlencode(HTTP_ROOT.'payment/paypal2/notify?orderId='.$user_temp['id']);
				
				$form['return'] = HTTP_ROOT.'payment/paypal/return?orderId='.$order['orderNo'].'&type='.$type;
				$form['business'] = $business;
				$form['item_name'] = $ordername;
				$form['currency_code'] = 'AUD'; //CNY  AUD
				$form['amount'] = $totalPrice;
				$form['orderId'] = $order['orderNo'];
				$this->setData( $action, 'action' );
				$this->setData( $form, 'form' );
				//print_r($form);exit;
				$this->display( 'payment/paypal/form' );
				break;
			/* case 'wechat':  //royalpay
				require_once 'core/include/class.royalpay.php';
				$Royalpay = new Royalpay();
				$description = $order['orderNo'];
				$totalPrice = $order['price'];
				//$totalPrice = 0.06; //测试用
				$price = $totalPrice;
				$currency = 'AUD'; //CNY  AUD
				$operator = '';
				$partner_code = 'FLYB';
				$credential_code = 'QsllUzRm9vobD8sFbRlYtpOQte22511F';
				
				$url = 'https://mpay.royalpay.com.au/api/v1.0/gateway/partners/'.$partner_code.'/orders/'.$order['orderNo'];
				$notify_url = HTTP_ROOT.'payment/wechat/notify?orderId='.$order['orderNo'].'&type='.$type;
				//$notify_url = HTTP_ROOT.'payment/wechat/notify';
				
				//$time = (string)getMillisecond();
				//print_r($time);exit;
				$Royalpay->setUrl( $url, $notify_url );
				
				$result = $Royalpay->pay( $description, $price, $currency, $notify_url, $operator, $partner_code, $credential_code );
				//print_r($result);exit;
				$result = json_decode($result, true);

				if($result && $result['return_code'] == 'SUCCESS')
				{
					$this->setData( $result, 'result' );
					$this->setData( $type, 'type' );
					$this->setData( $orderId, 'orderId' );
					
					$this->display( 'payment/wechat/qrcode' );
					//$this->display( 'payment/wechat/qrcode' );
				}
				else
				{
					$this->sheader( null, '在线支付失败,请重试。' );
				}
				break; */
				
			case 'wechat':  //paylinx
				require_once 'core/include/class.paylinx.php';
				$PayLinx = new PayLinx();
				$description = $order['orderNo'];
				$totalPrice = $order['price'];
				$totalPrice = 0.01; //测试用
				$price = $totalPrice;
				$currency = 'AUD'; //CNY  AUD
				//$operator = '';
				//$partner_code = 'FLYB';
				//$credential_code = 'QsllUzRm9vobD8sFbRlYtpOQte22511F';
				
				//$url = 'https://mpay.royalpay.com.au/api/v1.0/gateway/partners/'.$partner_code.'/orders/'.$order['orderNo'];
				$return_url ='';
				$notify_url = HTTP_ROOT.'payment/paylinx/notify?orderId='.$order['orderNo'].'&type='.$type;
				//$notify_url = HTTP_ROOT.'payment/wechat/notify';
				
				//$time = (string)getMillisecond();
				//print_r($notify_url);exit;
				
				$PayLinx->setUrl( $return_url, $notify_url );
				$result = $PayLinx->pay( $description, $order['orderNo'], $price);
				//print_r($result);exit;
				//$result = json_decode($result, true);
				//print_r($result);exit;
				if($result && $result['status'] == 200)
				{
					//$result['code_url'] 生成二维码
					
					$this->setData( $result, 'result' );
					$this->setData( $type, 'type' );
					$this->setData( $orderId, 'orderId' );
					
					$this->display( 'payment/wechat/qrcode' );
					//$this->display( 'payment/wechat/qrcode' );
				}
				else
				{
					$this->sheader( null, '在线支付失败,请重试。' );
				}
				break;
			
			case 'alipay':
				//echo (float)$user_temp['qq'];
				//echo $user_temp['id'];
				//echo $this->site['name'].' - Pay for '.$post['room'].' in '.$post['city'];
				//exit;
				
				/* require_once 'core/Alipay/create_direct_pay_by_user/classs.alipay.direct_pay_by_user.php';
				
				$Alipay_DirectPayByUser = new Alipay_DirectPayByUser();
				//产品订单支付走alipay，非订单走alipay2
				$Alipay_DirectPayByUser->setUrl( HTTP_ROOT.'payment/alipay2/return', HTTP_ROOT.'payment/alipay2/notify' );
				//$Alipay_DirectPayByUser->pay( $ordername, $ordername, $user_temp['id'], (float)$user_temp['qq'] );
				
				$receive = array(
					'receive_name' => $user_temp['displayName'],
					'receive_address' => $user_temp['address'],
					'receive_zip' => '',
					'receive_phone' => $user_temp['phone'],
					'receive_mobile' => $user_temp['phone']
				);
				
				$Alipay_DirectPayByUser->pay2( $ordername, $ordername, $user_temp['id'], (float)$user_temp['qq'] , $receive); */
				$this->sheader( null, '该支付方式暂时不能使用。' );
				break;
			case 'card':
				$this->sheader( null, '该支付方式暂时不能使用。' );
				break;
			default:
				$this->sheader( null, '支付方式错误,请重试。' );
				//echo '支付方式错误'; exit;
				break;
		}
		
	}

	//订单在线支付成功
	function pay_success_action() {
		$orderId = trim( get2( 'orderId' ) );
		$mdl_orders = $this->loadModel( 'orders' );
		$order = $mdl_orders->getByWhere( array( 'orderId' => $orderId ) );
		if ( ! $order || $order['createUserId'] != $this->loginUser['id'] ) {
			$this->sheader( null, (string)$this->lang->review_not_exist );
		}

		$this->setData( (string)$this->lang->order_payment, 'pagename' );
		$this->setData( 'orders', 'menu' );
		$this->setData( (string)$this->lang->order_payment.' - '.$this->lang->member_center.' - '.$this->site['pageTitle'], 'pageTitle' );

		switch ( $order['payType'] ) {  //因为paypal是在外部支付的,支付完会返回到网站,不会走这一步,只有eway需要
			case 'paypal':
				break;
			case 'mastercard':
				$this->display( 'payment/mastercard/return' );
				break;
			case 'eway':
				$this->display( 'payment/eway/return' );
				break;
			case 'userMoney':
				break;
			default:
				echo (string)$this->lang->error_payment; exit;
				break;
		}
	}
	
	/**
	 * 我的收款明细 -服务提供者
	 */
	function service_income_action() {

		if( $this->loginUser['isDriver'] != 2 && $this->loginUser['isLandlord'] != 2 && $this->loginUser['isTeacher'] != 2 )
		{
			echo '没有权限';
			exit;
		}

		$mdl_user_commission = $this->loadModel( 'user_commission' );
		$mdl_user = $this->loadModel( 'user' );
		$where = array();
		$where[] = ' ( category=20 or category=21 ) ';
		//$where[] = ' ( type=1 or (type=2 and status=1) ) ';
		$where['userId'] = $this->loginUser['id'];
		
		$user_commission = $mdl_user_commission->getList( null, $where, 'createTime desc' );
		
		$pageSql = $mdl_user_commission->getListSql( null, $where, 'createTime desc' );
		$pageSize = 20;
		$pageUrl = $this->parseUrl()->set( 'page' );
		$page = $this->page( $pageSql, $pageUrl, $pageSize, 10 );
		$list = $mdl_user_commission->getListBySql( $page['outSql'] );
		foreach ( $user_commission as $key => $val ) {

			if($val['type'] == 2)
			{
				$total-= $val['commission'];
			}
			else
			{
				$total+= $val['commission'];
				$totalAll+= $val['commission'];
			}
			
			
        }
		
		if ( is_post() ) {
			
			$price = post('price');
			if($price > $total)
			{
				echo '金额错误';
				exit;
			}
			
			if ( $id = $this->getservicecommission( $this->loginUser['id'], $price ) ) {
				if ( is_ajax() ) 
				{
					echo 'ok';
					exit;
				}
				else
				{
					$this->formReturn['success'] = true;
					$this->formReturn['msg'] = '申请成功';
					$this->sheader(HTTP_ROOT_WWW . 'member/service_income');
				}
			}
			else {
				$this->formReturn['success'] = false;
				$this->formReturn['msg'] = '申请失败';
			}
		}
		
		
		
		$this->setData( $totalAll, 'totalAll' );
		$this->setData( $total, 'total' );
		$this->setData( $list, 'list' );
		$this->setData( $page['pageStr'], 'pager' );
		$this->setData( 'service_income', 'member_menu' );
		$this->setData( '我的收款明细 - '.$this->site['pageTitle'], 'pageTitle' );

		$this->display( 'member/service_income' );
	}
	
	/**
	 * 我的收款明细 -邀请收入
	 */
	function user_income_action() {

		
		$mdl_user_commission = $this->loadModel( 'user_commission' );
		$mdl_user = $this->loadModel( 'user' );
		$where = array();
		$where[] = ' ( category=10 or category=11 ) ';
		//$where[] = ' ( type=1 or (type=2 and status=1) ) ';
		$where['userId'] = $this->loginUser['id'];
		
		$user_commission = $mdl_user_commission->getList( null, $where, 'createTime desc' );
		
		$pageSql = $mdl_user_commission->getListSql( null, $where, 'createTime desc' );
		$pageSize = 20;
		$pageUrl = $this->parseUrl()->set( 'page' );
		$page = $this->page( $pageSql, $pageUrl, $pageSize, 10 );
		$list = $mdl_user_commission->getListBySql( $page['outSql'] );
		foreach ( $user_commission as $key => $val ) {

			if($val['type'] == 2)
			{
				$total-= $val['commission'];
			}
			else
			{
				$total+= $val['commission'];
				$totalAll+= $val['commission'];
			}
			
			
        }
		
		foreach ( $list as $key => $val ) {

			//消费用户信息
			 if ( $val['inviteId'] ){
				$invite = $mdl_user->get($val['inviteId']);
				if ( $invite ) {
					$list[$key]['invite'] = $invite;
				}
			} 
			
        }
		
		if ( is_post() ) {
			
			$price = post('price');
			if($price > $total)
			{
				echo '金额错误';
				exit;
			}
			
			if ( $id = $this->getusercommission( $this->loginUser['id'], $price ) ) {
				if ( is_ajax() )
				{
					echo 'ok';
					exit;
				}
				else
				{
					$this->formReturn['success'] = true;
					$this->formReturn['msg'] = '申请成功';
					$this->sheader(HTTP_ROOT_WWW . 'member/user_income');
				}
			}
			else {
				$this->formReturn['success'] = false;
				$this->formReturn['msg'] = '申请失败';
			}
		}
		
		
		
		$this->setData( $totalAll, 'totalAll' );
		$this->setData( $total, 'total' );
		$this->setData( $list, 'list' );
		$this->setData( $page['pageStr'], 'pager' );
		$this->setData( 'user_income', 'member_menu' );
		$this->setData( '我的收款明细 - '.$this->site['pageTitle'], 'pageTitle' );

		$this->display( 'member/user_income' );
	}
	
	/**
	 * 我的站内信
	 */
	function user_msg_action() {

		$mdl_user_msg = $this->loadModel( 'user_msg' );
		$mdl_user = $this->loadModel( 'user' );
		$where = array();
		//$where[] = ' ( category=10 or category=11 ) ';
		//$where[] = ' ( type=1 or (type=2 and status=1) ) ';
		$where['receiveId'] = $this->loginUser['id'];
		
		$pageSql = $mdl_user_msg->getListSql( null, $where, 'createTime desc' );
		$pageSize = 5;
		$pageUrl = $this->parseUrl()->set( 'page' );
		$page = $this->page( $pageSql, $pageUrl, $pageSize, 10 );
		$list = $mdl_user_msg->getListBySql( $page['outSql'] );
		
		foreach ($list as $k=>$v){
		    if($list[$k]['sendId']==0){
		        $list[$k]['sendname']='System remind';
		    }else{
                $senduser = $mdl_user->get($list[$k]['sendId']);
                $list[$k]['sendname']=$senduser['name'];
            }

        }
		/* foreach ( $list as $key => $val ) {

			//消费用户信息
			 if ( $val['inviteId'] ){
				$invite = $mdl_user->get($val['inviteId']);
				if ( $invite ) {
					$list[$key]['invite'] = $invite;
				}
			}
			
        } */
		
		$id = get2('id');
		if($id)
		{
			$user_msg = $mdl_user_msg->get($id);
			if($user_msg)
			{	
				$mdl_user_msg->update(array('status' => 1), $id);
			
				$this->setData( $user_msg, 'user_msg' );
			}
		}

		$this->setData( $list, 'list' );
		$this->setData( $page['pageStr'], 'pager' );
		$this->setData( 'user_msg', 'member_menu' );
		$this->setData( '我的站内信 - '.$this->site['pageTitle'], 'pageTitle' );

		$this->display( 'member/user_msg' );
	}
	
	function search_address_action() {
		if ( is_post() ) 
		{
			$address = post('address');
			$address = str_replace(' ','+',$address);
			//$address = '墨尔本';
			//$result = file_get_contents('https://maps.googleapis.com/maps/api/place/queryautocomplete/json?key=AIzaSyCTuF8epXFHWyzFBIb28idWqQ3WHvOL3ec&language=zh-cn&input='.$address.',澳大利亚&location=-33.847404,150.6517922&radius=1000000');
			$result = file_get_contents('https://maps.googleapis.com/maps/api/place/queryautocomplete/json?key=AIzaSyCTuF8epXFHWyzFBIb28idWqQ3WHvOL3ec&language=en&input='.$address.',au&location=-33.847404,150.6517922&radius=1000000');
			
			//$result = file_get_contents('https://maps.googleapis.com/maps/api/place/queryautocomplete/json?key=AIzaSyCTuF8epXFHWyzFBIb28idWqQ3WHvOL3ec&language=en&input='.$address.'&location=-33.847404,150.6517922&radius=1000000');
			
			//$result = file_get_contents('https://maps.googleapis.com/maps/api/place/queryautocomplete/json?key=AIzaSyCTuF8epXFHWyzFBIb28idWqQ3WHvOL3ec&language=en&input='.$address);

			$list = json_decode($result, true);
			
			//print_r($list);exit;
			
			if ( $list && $list['status'] == 'OK' ) {
				$str = '<ul>';
				foreach ( $list['predictions'] as $item ) {
					$str .= '<li><span>'.$item['description'].'</span></li>';
				}
				$str .= '</ul>';
				echo $str;
			}
			exit;
		}
	}
	
	private function saveAvatar( $url ) {
		if ( empty( $url ) ) return '';
		$data = https_request( $url );
		if ( empty( $data ) ) return '';
		$filepath = date( 'Y-m' );
		$this->file->createdir( 'data/upload/'.$filepath );
		$avatar = $filepath.'/'.date( 'YmdHis' ).$this->createRnd().'.jpg';
		file_put_contents( UPDATE_DIR.$avatar, $data );
		return $avatar;
	}

	
	
	

}