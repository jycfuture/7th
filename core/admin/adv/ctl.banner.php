<?php

/*
 @ctl_name = subscribe@
*/

class ctl_banner extends adminPage
{
    public function index_action () #act_name = 编辑#
    {
        $mdl = $this->loadModel( 'banner' );
        if ( is_post() ) {
            $data = post( 'data' );
            $this->cookie->setCookie( 'banner_edit', $data );

            $this->validate( $data );

            if ( $mdl->update( $data ) ) {
                $this->cookie->clearArrayCookie( 'banner_edit', $data );
                $this->sheader( $this->parseUrl() );
            }
            else {
                $this->sheader( null, $this->lang->mailbox_setting_failed );
            }
        }
        else {
            $this->setData( $mdl->get() );
            $this->setData( $this->cookie->getCookie( 'adminemail_edit' ), 'form' );
            $this->display();
        }
    }
}

?>