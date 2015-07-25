<?php
/*
*@Describe:商品Action
*@Author:GongBiao
*@Date:2015/07/25
*/

class ShopAction extends CommonAction{
	public function index(){



	}


	//添加商品
	public function add(){
		$this->display();
	}


	//处理上传图片与水印
	public function insert(){
		import('ORG.Net.UploadFile');
		import('ORG.Util.Image');
		$upload = new UploadFile();
		$upload->maxSize = 5 * 1024 * 1024;
		$upload->allowExts = array('jpg', 'png', 'gif');
		$upload->savePath = './Public/Uploads/';

		if($upload->upload()){
			$sarr = $upload->getUploadFileInfo();
			$sdir = $sarr[0]['savepath']; //上传后的存储目录
			$sfile = $sarr[0]['savename']; //上传后的文件名
			
			//打水印
			$image = new Image();
			$src = $sdir.$sfile;
			$water = $sdir.'logo.png';	
			$savename = $sdir.'water_'.$sfile;
			$thumb_name = $sdir.'thumb_'.$sfile;
			$image->water($src, $water, $savename, 20); //生成水印
			$image->thumb($src, $thumb_name, '', 50, 50); //图片缩放

			echo '文件上传成功!';
		}else{
			echo $upload->getErrorMsg();
			echo '文件上传失败';
		}


	}
}
?>