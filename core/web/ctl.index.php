<?php

class ctl_index extends cmsPage
{

	function index_action() {
        $mdl_info = $this->loadModel( 'info' );
        $mdl_infoclass = $this->loadModel( 'infoclass' );
        $mdl_infopic = $this->loadModel( 'infopic' );
        $mdl_config_data = $this->loadModel( 'config_data' );
        //business_brief
        $business_brief= $mdl_info->getList(null,array('isApproved'=>1, 'classId'=>'101','ordinal' ));
        $this->setData($business_brief, 'business_brief' );


        //公告
        $gg= $mdl_info->getList(null,array('isApproved'=>1, 'classId'=>'104104'),'ordinal desc');
        $this->setData($gg, 'gg' );
		//seo
		$this->setData($this->site['pageTitle'], 'pageTitle');
        $this->setData($this->site['keywords'], 'pageKeywords');
		$this->setData($this->site['description'], 'pageDescription');
		$this->setData( 'default', 'menu' );
		$this->display();
	}

	function error404_action() {
		header( 'HTTP/1.1 404 Not Found' );
		header( 'Status: 404 Not Found' );
		$this->display( '404' );
		exit;
	}

}