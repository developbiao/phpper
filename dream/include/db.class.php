<?php
/***
数据库类

目前到底采用什么数据库 
***/

defined('ACC') || exit('ACC Denied');

abstract class db{
	/*
	连接服务器
	parms $h 服务器地址
	parms $u 用户名
	parms $p 密码
	*/


	public abstract  function connect($h, $u ,$p);

	/*
	查询多行数据
	parms $sql select 型语句
	return array/bool
	*/

	public abstract function getAll($sql);

	/*
	查询单行数据
	params $sql select 型语句
	return array/bool
	*/


	public abstract function getOne($sql);

	/*
	自动执行insert/update语句
	$params $sql select型语句
	return array/bool

	使用:
	$this->autoExcte('user', array('username'=>'zhangsan', 'email'=>'zanshan@gmail.com'), insert);
	*/

	public abstract function autoExecute($table, $data, $act='insert', $where='');

}
?>