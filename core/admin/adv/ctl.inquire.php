<?php

/*
 @ctl_name = inquire管理@
*/

class ctl_inquire extends adminPage
{

	public function index_action () #act_name = 列表#
	{
		$bllLink	= $this->loadModel('inquire');
		$where		= "";
		$order		= "createTime desc";
		$pageSql	= $bllLink->getListSql(null, $where, $order);
		$pageUrl	= $this->parseUrl()->set( 'page' );
		$pageSize	= 20;
		$maxPage	= 10;
		$page		= $this->page($pageSql, $pageUrl, $pageSize, $maxPage);
		$data		= $bllLink->getListBySql($page['outSql']);

		$this->setData($data, 'data');
		$this->setData($page['pageStr'], 'pager');
		$this->setData($this->parseUrl(), 'refreshUrl');
		$this->setData($this->parseUrl()->set( 'act' )->set( 'id' ), 'doUrl');
		$this->display();
	}

	public function edit_action () #act_name = 查看#
	{
		$id			= (int)get2('id');
		$bllLink	= $this->loadModel('inquire');
		$data		= $bllLink->get($id);
		if (!$data) $this->sheader(null, $this->lang->curinquire_record_not_exists);

		$this->setData($data, 'data');
		$this->setData($this->parseUrl()->set( 'act' )->set( 'id' ), 'returnUrl');
		$this->display();
	}

	public function delete_action () #act_name = 删除#
	{
		if (is_post())
		{
			$ids = post('ids');
			if (is_array($ids))
			{
				foreach ($ids as $k=>$v)
				{
					self::_delete((int)$v);
				}
			}
		}
		else
		{
			self::_delete((int)get2('id'));
		}
		$this->sheader($this->parseUrl()->set( 'act' )->set( 'id' ));
	}

	private function _delete ($id)
	{
		$id			= (int)$id;
		$bllLink	= $this->loadModel('inquire');
		$link		= $bllLink->get($id);
		if (!$link)
		{
			$this->sheader(null, $this->lang->curinquire_record_not_exists."<br />id:$id");
		}
		if ($bllLink->delete($id))
		{
			
		}
		else
		{
			$this->sheader(null, $this->lang->delete_failed."<br />id:$id");
		}
	}

}

?>