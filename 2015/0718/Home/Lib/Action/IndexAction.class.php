<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {

	public function index(){
		//判断有没有登陆自动调用_initialize
		$user = M('User');
		$this->rows=$user->order('id')->select();
		$this->display();
	}

	public function show(){
		$this->display();
	}

	//session的测试
    public function demo01(){
    	//echo session_id();
    	//session的设置
    	session('username', 'perter');
    	session('login', '1');
    	session('isadmin', '1');

    	//session('isadmin', null); //session的删除

    	exit;
    	$this->display();
    }

    public function test(){
    	echo '<pre>';
    	print_r($_SESSION);
    	echo '</pre>';
    }
}