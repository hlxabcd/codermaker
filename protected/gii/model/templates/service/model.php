<?php
/**
 *   游戏服实体模板
 *   luxiao.huang@kunlun-inc.com 2013.10.17
 *   
 * - $this: the ModelCode object
 * - $tableName: the table name for this class (prefix is already removed if necessary)
 * - $modelClass: the model class name
 * - $columns: list of table columns (name=>CDbColumnSchema)
 * - $labels: list of attribute labels (name=>label)
 * - $rules: list of validation rules
 * - $relations: list of relations (name=>relation declaration)
 */
$lcName = lcfirst($modelClass);
?>
<?php echo "<?php\n"; ?>

namespace service;
use common\Utils;
use framework\util;
use entity;
use common;
use dao;

/** 
 *
 * @package <?php echo $modelClass; ?>Service
 */
class <?php echo $modelClass; ?>Service 
{
	/**
	 * <?php echo $modelClass; ?>Dao对象
	 *
	 * @var dao\<?php echo $modelClass; ?>Dao
	 */
	private $<?php echo $lcName; ?>Dao;
	
  
    /**
     * 构造函数
     */
    public function __construct()
    {
    	$this-><?php echo $lcName; ?>Dao = util\Singleton::get("dao\\<?php echo $modelClass; ?>Dao");
    }
    /**
     * 获取指定Id信息
     *
     * @param int $id
     * @return entity\<?php echo $modelClass; ?>
     */
    public function getById($id)
    {
    	return $this-><?php echo $lcName; ?>Dao->fetchById($id);
    }
    
    /**
     * 获取指定Id序列信息
     *
     * @param array $id
     * @return array <entity\<?php echo $modelClass; ?>>
     */
    public function getByIds($ids)
    {
    	return $this-><?php echo $lcName; ?>Dao->fetchByIds($ids);
    }
    
    /**
     * 添加新信息
     *
     * @param entity\<?php echo $modelClass; ?> $<?php echo $lcName; ?>
     */
    public function add(entity\<?php echo $modelClass; ?> $<?php echo $lcName; ?>)
    {
    	$this-><?php echo $lcName; ?>Dao->add($<?php echo $lcName; ?>);
    	 
    	common\GameView::setDirtyList('<?php echo $lcName; ?>', common\GameView::ACT_TYPE_ADD, array($<?php echo $lcName; ?>-><?php echo $primaryKey; ?>=>$<?php echo $lcName; ?>));
    }
    
    /**
     * 更新信息
     *
     * @param entity\<?php echo $modelClass; ?> $<?php echo $lcName; ?>
     * @param array $props
     */
    public function update(entity\<?php echo $modelClass; ?> $<?php echo $lcName; ?>, $props)
    {
    	$this-><?php echo $lcName; ?>Dao->update($<?php echo $lcName; ?>, $props);
    	 
    	$changeData = array();
    	foreach($props as $prop)
    	{
    		$changeData[$prop] = $<?php echo $lcName; ?>->$prop;
    	}
    	 
    	common\GameView::setDirtyList('<?php echo $lcName; ?>', common\GameView::ACT_TYPE_UPDATE, array($<?php echo $lcName; ?>-><?php echo $primaryKey; ?>=>$changeData));
    }
    
    /**
     * 删除指定信息
     *
     * @param int $id
     */
    public function remove($id)
    {
    	$result = $this-><?php echo $lcName; ?>Dao->remove($id);
    	if($result)
    	{
    		common\GameView::setDirtyList('<?php echo $lcName; ?>', common\GameView::ACT_TYPE_DELETE, array($id=>array('<?php echo $primaryKey; ?>'=>$id)));
    	}
    	return $result;
    }

}