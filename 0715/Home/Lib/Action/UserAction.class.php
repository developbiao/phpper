<?php
/*
*@Describe:UserAction测试
*@Author:GongBiao
*@Date:2015/07/15
*/

class UserAction extends Action{
	public function index(){
		$this->display();
	}	


	public function show(){
		/*
		echo '<pre>';	
		print_r($this->_post());
		echo '</pre>';	
		*/
		//echo $username = htmlspecialchars($_POST['username']);
		//echo $username = $this->_post('username'); //转实体

		$user = M('User');
		/*
		echo '<pre>';	
		print_r($_POST);
		echo '</pre>';	
		*/

		//echo $user->add($_POST);
		//echo $user->add($this->_post());


		//转实体再插入数据库
		echo $user->add(array(
				'user'=>$this->_post('user'),
				'passwd'=>$this->_post('passwd')

			));

	}

	public function swap(){
		/*
		$str='aaa\bbb';
		echo mysql_escape_string($str);
		*/

		echo htmlspecialchars_decode('aa&lt;b&gt;&quot;bbb&quot;&lt;/b&gt;cc');
	}




}
?>