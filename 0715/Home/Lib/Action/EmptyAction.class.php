<?php
/*
*@Describe:空模块处理
*@Author:GongBiao
*@Date:2015/07/15
*/

class EmptyAction extends Action{
	public function index(){
		echo '<h3>啊哦~没有找到'.MODULE_NAME.'模块!</h3>';	
	}
}
?>