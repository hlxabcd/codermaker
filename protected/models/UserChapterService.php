<?php

namespace service;
use common\Utils;
use framework\util;
use entity;
use common;
use dao;

/** 
 *
 * @package UserChapterServiceService
 */
class UserChapterServiceService 
{
	/**
	 * UserChapterServiceDao对象
	 *
	 * @var dao\UserChapterServiceDao
	 */
	private $userChapterServiceDao;
	
  
    /**
     * 构造函数
     */
    public function __construct()
    {
    	$this->userChapterServiceDao = util\Singleton::get("dao\\UserChapterServiceDao");
    }
    /**
     * 获取指定Id信息
     *
     * @param int $id
     * @return entity\UserChapterService     */
    public function getById($id)
    {
    	return $this->userChapterServiceDao->fetchById($id);
    }
    
    /**
     * 获取指定Id序列信息
     *
     * @param array $id
     * @return array <entity\UserChapterService>
     */
    public function getByIds($ids)
    {
    	return $this->userChapterServiceDao->fetchByIds($ids);
    }
    
    /**
     * 添加新信息
     *
     * @param entity\UserChapterService $userChapterService     */
    public function add(entity\UserChapterService $userChapterService)
    {
    	$this->userChapterServiceDao->add($userChapterService);
    	 
    	common\GameView::setDirtyList('userChapterService', common\GameView::ACT_TYPE_ADD, array($userChapterService->id=>$userChapterService));
    }
    
    /**
     * 更新信息
     *
     * @param entity\UserChapterService $userChapterService     * @param array $props
     */
    public function update(entity\UserChapterService $userChapterService, $props)
    {
    	$this->userChapterServiceDao->update($userChapterService, $props);
    	 
    	$changeData = array();
    	foreach($props as $prop)
    	{
    		$changeData[$prop] = $userChapterService->$prop;
    	}
    	 
    	common\GameView::setDirtyList('userChapterService', common\GameView::ACT_TYPE_UPDATE, array($userChapterService->id=>$changeData));
    }
    
    /**
     * 删除指定信息
     *
     * @param int $id
     */
    public function remove($id)
    {
    	$result = $this->userChapterServiceDao->remove($id);
    	if($result)
    	{
    		common\GameView::setDirtyList('userChapterService', common\GameView::ACT_TYPE_DELETE, array($id=>array('id'=>$id)));
    	}
    	return $result;
    }

}