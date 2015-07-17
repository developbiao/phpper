<?php
/*
*@Describe:IndexAction
*@Author:GongBiao
*@Date:2015/07/17
*/
class IndexAction extends Action {

	public function index(){
		define('HOSTNAME', 'http://www.google.com');
		$this->assign('name', 'user123');
		$this->assign('time', time());
		//$this->display('User:index');//输出到模块下的index
		$str =  $this->fetch('show'); //存储起来
		//echo "<script type='text/javascript'>alert(".$str.")</script>";

	}


	//关联查询测试01
    public function demo01(){
    	$user = D('User');
    	$rows = $user->relation(true)->select();
    	echo '<pre>';
    	print_r($rows);
    	echo '</pre>';

    }

    public function test(){

    }
}