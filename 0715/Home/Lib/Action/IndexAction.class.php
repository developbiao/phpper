<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	/*
    	通过GET获取模块和操作
		echo '<pre>';    
		print_r($_GET);
		echo '<pre>';    
		*/
		//获取模块和操作常量
		echo MODULE_NAME,'<br />';
		echo ACTION_NAME;
    }

    public function test(){
    	$this->display('test');
    }

    public function show(){
    	//echo 'Index/show';
    	//echo __INFO__;
    	//echo __EXT__; //获取后缀
    }

    public function Say(){

    	$this->assign('tel', '18828077952');
    	$this->display();
    }

    public function _empty(){
    	//echo '<h1>您'.ACTION_NAME.'操作的方法存在哦~</h1>';
    	$this->myerror();
    }

    public function myerror(){
    	$this->display('myerror');
    }
}