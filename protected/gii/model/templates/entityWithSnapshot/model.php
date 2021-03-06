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
namespace entity;

class <?php echo $modelClass; ?> extends EntityBaseWithSnapshot
{
	const TABLE_NAME = '<?php echo $tableName; ?>';
	
	private static $attributes = array(
<?php 
foreach($columns as $column)
	$columnName .="\t\t'".$column->name."',\n";
echo $columnName;
?>
		);
<?php foreach($columns as $column):?> 
	/**
	 * <?php echo $column->comment."\n"; ?>
	 * 
	 * @var <?php echo $column->type."\n"; ?>
	 */
	public $<?php echo $column->name; ?><?php if($column->defaultValue)echo ' = \''.$column->defaultValue.'\''; ?>;
	<?php endforeach; ?> 
	
	public static function getAttributes ()
	{
		return array_merge(self::$attributes,parent::getAttributes());
	}
}