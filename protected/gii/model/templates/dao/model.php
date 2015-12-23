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
?>
<?php echo "<?php\n"; ?>
namespace dao;

class <?php echo $modelClass; ?>Dao extends DaoBase
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
		parent::__construct('entity\\<?php echo $modelClass; ?>');
	}
}