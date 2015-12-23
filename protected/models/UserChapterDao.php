<?php
namespace dao;

class UserChapterDaoDao extends DaoBase
{
	/**
	 * 缓存期限
	 * 
	 * @var int
	 */
	const CACHE_TREM = 3600;
	
	/** 
	 * 构造函数
	 * 
	 * @return 
	 */
	public function __construct()
	{
		parent::__construct('entity\\UserChapterDao');
	}
}