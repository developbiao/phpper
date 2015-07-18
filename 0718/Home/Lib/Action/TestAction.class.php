<?php
/*
@Describe:测试cookie与图片打水印
@Author:GongBiao
@Date:2015/07/18
*/

class TestAction extends Action{

	//图片缩放测试
	public function index(){
		import('ORG.Util.Image');
		$img = new Image();

		//定义参数路径
		$path = './Public/Uploads';
		$src = $path .'/src/per_html.jpg';
		$dst = $path . '/thumb_html.jpg';

		if($img->thumb($src, $dst, '', 70, 70)){
				echo '<h3>缩放成功!</h3>';
		}else{
			echo '<h3>缩放失败!</h3>';
		}


	}

	//打水印测试
	public function water_demo(){
		import('ORG.Util.Image'); //导入图像操作类
		$img = new Image(); //创建水印操作对象
		//定义路径参数
		$path = './Home/Tpl/Public/Images/per_html.jpg';
		$dst = './Home/Tpl/Public/Images/logo.png';
		$save_path = './Public/Uploads/per_html.jpg';

		$img->water($path, $dst, $save_path); //打出水印

		echo '<h3>水印打成功了！</h3>';


	}

	public function show(){

		echo APP_NAME;
	}

	//设置cookie
	public function set_cookie(){

		cookie('song', '周杰伦');
		echo '<h3>Ok</h3>';
		exit;
		$this->display();
	}

	//查看cookie
	public function cookie_show(){
		echo '<pre>';
		print_r($_COOKIE);
		echo '<pre>';
	}



	//删除Cookie
	public function delete(){

		cookie('song', null);
		echo '删除已执行！';

	}
}

?>