<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$user = M('User');
    	$this->rows = $user->select();
    	$this->display();
    }

    public function add(){
    	$this->display();

    }
    public function insert(){
    	echo '<pre>';
    	print_r($_POST);
    	echo '</pre>';

    }
}