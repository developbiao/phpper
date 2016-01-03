<?php
/*
@Description:单文件类
@Author:GongBiao
@Date:2015/06/25
*/ 

defined('ACC') || exit('ACC Denied');

/*
上传文件
1、配置允许的后缀
2、配置允许的大小
3、随机生成目录
4、随机生成文件名

5、获取文件后缀 
6、判断文件的后缀

良好的报错的支持
*/

class UpTool{
	protected $allowExt = 'jpg, jpeg, gif, bmp, png';
	protected $maxSize = 1; //大小限制M

	protected $error_num = 0;//错误代码
	protected $error = array( 
			0=>'无错',
			1=>'上传文件大小超出网页表单页面',
			2=>'上传文件大小超出网页表单页面',
			3=>'文件只有部分被上传',
			4=>'没有文件被上传',
			6=>'找不到临时文件夹',
			8=>'不允许的文件后缀',
			9=>'文件大小超出的类的允许范围',
			10=>'创建目录失败',
			11=>'移动失败'
		);


	public function up($key){
		if(!isset($_FILES[$key])){
			return false;
		}

		$f = $_FILES[$key];

		//检验上传有没有成功
		if($f['error']){
			$this->error_num = $f['error'];
			return false;
		}

		//获取后缀
		 $ext = $this->getExt($f['name']);


		//检查后缀

		if(!$this->isAllowExt($ext)){
			$this->error_num = 8;
			return false;
		}



		//检查大小
		if(!$this->isAllowSize($f['size'])){
			$this->error_num = 9;
			return flase;
		}

		//创建目录
		$dir = $this->mk_dir();

		if($dir == false){
			$this->error_num = 10;
			return false;
		}


		//生成随机文件名

		$newname = $this->randName() . '.' . $ext;
		$dir = $dir . '/' . $newname;

		//移动文件

		if(!move_uploaded_file($f['tmp_name'], $dir)){
			$this->error_num = 11;
			return false;
		}
		return str_replace(ROOT, '', $dir);
	}


	/*
	@Description:获取错误信息
	@params:void
	@return:mix
	*/

	public function getError(){
		return $this->error[$this->error_num];
	}
	/*
		@params: String 设置允许的后缀
	*/

	public function setExt($exts){

		$this->allowExt = $this->allowExt. ',' .$exts; //追加支持的格式

	}


	/*
		@params: String 设置允许的大小

	*/

	public function setSize($num){
		$this->maxSize = $num;

	}

	/*
	获取文件后缀
	*/

	public function getExt($file){
		$tmp = explode('.', $file);
		return end($tmp);

	}


	/*
		prams String $ext 文件后缀
		return bool

		防止大小写后缀问题
	*/

	protected function isAllowExt($ext){
		//return in_array(strtolower($ext), explode(',',strtolower($this->allowExt)));
		$exts = explode(',',strtolower($this->allowExt));
		for($i = 0; $i < count($exts); $i++){
			$exts[$i] = trim($exts[$i]);  //做了空格的处理工作
		}
		return in_array(strtolower($ext), $exts);
	}

	//检查文件大小
	protected function isAllowSize($size){
		return $size <= $this->maxSize * 1024 * 1024; //M
	}

	/*
	按日期创建目录
	*/

	protected function mk_dir(){
		$dir = ROOT.'data/images/' . date('Ym/d');

		if(is_dir($dir) || mkdir($dir, 007, true)){
			return $dir;
		}else{
			return false;
		}
	}

	/*
		生成随机文件名
	*/

		protected function randName($length = 6){
			$str = 'abcdefghijkmnpqrstuvwxyz1234567890';
			return substr(str_shuffle($str), 0, $length);
		}
}






?>