<?php
// 分页与文件上传测试练习
class IndexAction extends Action {

	//index
	public function index(){
		$this->display();

	}

	//文件上传
	public function upload(){

		import('ORG.Net.UploadFile');
		$up = new UploadFile();
		$up->savePath = './Public/Uploads/Images/';
		$up->autoSub = true; //设置子目录
		$up->subType = 'date'; //子目录保存格式
		$up->dateFormat = 'Ymd';
		$up->thumb = true;
		$up->thumbMaxWidth = 50;
		$up->thumbMaxHeight = 50;
		//$up->maxSize = 1024 * 1024; //设置大小
		$up->allowExts = array('jpg');
		if($up->upload()){
			 //获取图片详细信息
			echo '<pre>';
			print_r($up->getUploadFileInfo());
			echo '</pre>';
		}else{
			echo $up->getErrorMsg();
		}


	}

	//实现数据分页
    public function pagetest(){

    	$user = M('User');
    	import('ORG.Util.Page'); //导入分页类
    	$count = $user->count(); //数据总条数
    	$length = 3; //每页分几个
    	$page = new Page($count, $length); //创建分页对象

    	//定制分页theme
    	//$page->setConfig('header', '个vip会员');
    	$page->setConfig('theme', '%header%  %first% 总计%totalRow%个学生 %upPage% %downPage% %end%' );
    	$this->show = $page->show();  //分页导航


    	//取数据
    	$this->rows = $user->order('id')->limit($page->firstRow, $length)->select();

    	$this->display();
    }
}