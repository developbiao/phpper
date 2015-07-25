<?php
/*
*@Describe:权限控制
*@Author:GongBiao
*@Date:2015/07/25
*/

class CommonAction extends Action{
	//自动执行
	public function _initialize(){
		if(!$_SESSION['login'] || !$_SESSION['admin']){
			//echo $_SESSION['login'],'----',$_SESSION['admin'];
			$this->error('您的权限不足!', U('Login/index'));
			exit;
		}
	}
}
?>