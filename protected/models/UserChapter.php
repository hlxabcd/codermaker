<?php
namespace entity;

class UserChapter 
{
	const TABLE_NAME = 'user_chapter';
 
	/**
	 * 自增id
	 * 
	 * @var string
	 */
	public $id;
	 
	/**
	 * 用户id
	 * 
	 * @var string
	 */
	public $uid;
	 
	/**
	 * 章节id
	 * 
	 * @var integer
	 */
	public $chapterId;
	 
	/**
	 * 用户本章节三个难度获得的star数，用json表示
	 * 
	 * @var string
	 */
	public $star;
	 
	/**
	 * 用户本章节三个难度已领取到第几个奖励，用json表示
	 * 
	 * @var string
	 */
	public $receiveReward;
	 
}