<?php
namespace entity;

class ChapterInfo 
{
	const TABLE_NAME = 'chapter_info';
 
	/**
	 * 章节id
	 * 
	 * @var string
	 */
	public $id;
	 
	/**
	 * 开启等级
	 * 
	 * @var string
	 */
	public $needLevel;
	 
	/**
	 * 前置章节id
	 * 
	 * @var integer
	 */
	public $preChapterId;
	 
	/**
	 * 普通难度奖励1
	 * 
	 * @var string
	 */
	public $normalReward1;
	 
	/**
	 * 普通难度奖励2
	 * 
	 * @var string
	 */
	public $normalReward2;
	 
	/**
	 * 普通难度奖励3
	 * 
	 * @var string
	 */
	public $normalReward3;
	 
	/**
	 * 困难难度奖励1
	 * 
	 * @var string
	 */
	public $hardReward1;
	 
	/**
	 * 困难难度奖励2
	 * 
	 * @var string
	 */
	public $hardReward2;
	 
	/**
	 * 困难难度奖励3
	 * 
	 * @var string
	 */
	public $hardReward3;
	 
	/**
	 * 精英难度奖励1
	 * 
	 * @var string
	 */
	public $eliteReward1;
	 
	/**
	 * 精英难度奖励2
	 * 
	 * @var string
	 */
	public $eliteReward2;
	 
	/**
	 * 精英难度奖励3
	 * 
	 * @var string
	 */
	public $eliteReward3;
	 
}