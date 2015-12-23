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
function getPbType($mysqlType)
{
	if(stripos($mysqlType,'int')!==false)
		$type ='int64';
	elseif(stripos($mysqlType,'bool')!==false)
		$type ='bool';
	elseif(preg_match('/(real|floa|doub)/i',$dbType))
		$type ='double';
	else
		$type ='string';
	return $type;
}

?>

message Entity<?php echo $modelClass; ?> 
{
<?php
$count = 1;
foreach($columns as $column)
{
echo "\toptional " . getPbType($column->dbType)." $column->name = $count; // $column->comment\n";
$count ++;
}
?> 
}