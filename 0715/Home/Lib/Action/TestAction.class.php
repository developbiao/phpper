<?php
/*
*@Describe:TestAction
*@Author:GongBiao
*@Date:2015/07/15
*/
class TestAction extends Action{
	public function index(){

		$this->display();		
	}

	//Ajax测试
	public function show(){
		//判断是不是Ajax请求
		//var_dump(IS_AJAX);
		//echo 'Ajax Ok!';
		//$this->display(); //把模板模板发送给ajax

		$arr = array(
				'name' => '美女老师',
				'age' => 29,
				'sex' => 'female'
			);

		//php的方法把数据转json
		//echo json_encode($arr);

		//ThinkPHP中的方法
		$this->ajaxReturn($arr, '数据发送成功,美女老师来咯^^', 1);


	}

	//参数绑定
	public function demo($id=1){
		if(IS_GET){ 
			$user = M('User');
			$row = $user->find($id); //根据id查找数据
			echo '<pre>';
			print_r($row);
			echo '</pre>';
		}
	}
	public function test01(){
		echo 'this is test01 action function!';
	}

	public function SayHello(){
		echo '<h3>我正在努力的学习ThinkPHP,我想改变我的命运，注定不平凡！</h3>';
	}


	//URL路由测试
	public function router(){

		echo '<pre>';
		print_r($this->_get());
		echo '</pre>';

	}



}
?>