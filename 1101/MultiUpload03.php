<?php 
class MultiUpload
{
	protected $res = array();
	protected $fileInfo;
	protected $path;
	protected $destination='NULL';
	protected $flag;
	protected $maxSize;
	protected $allowExt;


	public function __construct($fileInfo, $path='./uploads', $flag=true, $maxSize=1048576, $allowExt=array('jpeg','jpg','png','gif'))
	{
		$this->fileInfo = $fileInfo;
		$this->path = $path;
		$this->flag = $flag;
		$this->maxSize = $maxSize;
		$this->allowExt = $allowExt;
	}
	/**
	 * 针对于单文件、多个单文件、多文件的上传
	 * @param array $fileInfo
	 * @param string $path
	 * @param string $flag
	 * @param number $maxSize
	 * @param array $allowExt
	 * @return string
	 */
	public function uploadFile()
	{
		//$flag=true;
		//$allowExt=array('jpeg','jpg','gif','png');
		//$maxSize=1048576;//1M
		//判断错误号
		if($this->fileInfo['error']===UPLOAD_ERR_OK)
		{
			//检测上传得到小
			if($this->fileInfo['size']>$this->maxSize)
			{
				$this->res['msg']=$this->fileInfo['name'].'上传文件过大';
			}

			//检测上传文件的文件类型
			$ext=$this->getExt($this->fileInfo['name']);
			if(!in_array($ext,$this->allowExt))
			{
				$this->res['msg']=$this->fileInfo['name'].'非法文件类型';
			}

			//检测是否是真实的图片类型
			if($this->flag)
			{
				if(!getimagesize($this->fileInfo['tmp_name']))
				{
					$this->res['msg']=$this->fileInfo['name'].'不是真实图片类型';
				}
			}

			//检测文件是否是通过HTTP POST上传上来的
			if(!is_uploaded_file($this->fileInfo['tmp_name']))
			{
				$this->res['msg']=$this->fileInfo['name'].'文件不是通过HTTP POST方式上传上来的';
			}

			if($this->res) return $this->res;

			//$path='./uploads';
			//检查上传目录存在不存在
			if(!file_exists($this->path))
			{
				mkdir($this->path,0777,true);
				chmod($this->path,0777);
			}

			//设置随机唯一文件名称
			$uniName=$this->getUniName();

			//设置目标路径
			$this->destination=$this->path.'/'.$uniName.'.'.$ext;

			//开始移动	
			if(!move_uploaded_file($this->fileInfo['tmp_name'],$this->destination))
			{
				$this->res['msg']=$this->fileInfo['name'].'文件移动失败';
			}

			$this->res['msg']=$this->fileInfo['name'].'上传成功';
			$this->res['dest']=$this->destination;
			return $this->res;
			
		}else{
			//匹配错误信息
			switch ($this->fileInfo ['error']) 
			{
				case 1 :
					$this->res['msg'] = '上传文件超过了PHP配置文件中upload_max_filesize选项的值';
					break;
				case 2 :
					$this->res['msg'] = '超过了表单MAX_FILE_SIZE限制的大小';
					break;
				case 3 :
					$this->res['msg'] = '文件部分被上传';
					break;
				case 4 :
					$this->res['msg'] = '没有选择上传文件';
					break;
				case 6 :
					$this->res['msg'] = '没有找到临时目录';
					break;
				case 7 :
				case 8 :
					$this->res['msg'] = '系统错误';
					break;
			}
			return $this->res;
		}
	}


//other method

	/**
	 * 得到文件扩展名
	 * @param string $filename
	 * @return string
	 */
	public function getExt($filename)
	{
		return strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	}

	/**
	 * 产生唯一字符串
	 * @return string
	 */
	public function getUniName()
	{
		return md5(uniqid(microtime(true),true));
	}


	/**
	 * 检测上传文件是否出错
	 * @return boolean
	 */
	protected function checkError(){
		if(!is_null($this->fileInfo)){
			if($this->fileInfo['error']>0){
				switch($this->fileInfo['error']){
					case 1:
						$this->error='超过了PHP配置文件中upload_max_filesize选项的值';
						break;
					case 2:
						$this->error='超过了表单中MAX_FILE_SIZE设置的值';
						break;
					case 3:
						$this->error='文件部分被上传';
						break;
					case 4:
						$this->error='没有选择上传文件';
						break;
					case 6:
						$this->error='没有找到临时目录';
						break;
					case 7:
						$this->error='文件不可写';
						break;
					case 8:
						$this->error='由于PHP的扩展程序中断文件上传';
						break;
						
				}
				return false;
			}else{
				return true;
			}
		}else{
			$this->error='文件上传出错';
			return false;
		}
	}
	/**
	 * 检测上传文件的大小
	 * @return boolean
	 */
	protected function checkSize(){
		if($this->fileInfo['size']>$this->maxSize){
			$this->error='上传文件过大';
			return false;
		}
		return true;
	}
	/**
	 * 检测扩展名
	 * @return boolean
	 */
	protected function checkExt(){
		$this->ext=strtolower(pathinfo($this->fileInfo['name'],PATHINFO_EXTENSION));
		if(!in_array($this->ext,$this->allowExt)){
			$this->error='不允许的扩展名';
			return false;
		}
		return true;
	}
	/**
	 * 检测文件的类型
	 * @return boolean
	 */
	protected function checkMime(){
		if(!in_array($this->fileInfo['type'],$this->allowMime))
		{
			$this->error='不允许的文件类型';
			return false;
		}
		return true;
	}
	/**
	 * 检测是否是真实图片
	 * @return boolean
	 */
	protected function checkTrueImg(){
		if($this->imgFlag){
			if(!@getimagesize($this->fileInfo['tmp_name'])){
				$this->error='不是真实图片';
				return false;
			}
			return true;
		}
	}
	/**
	 * 检测是否通过HTTP POST方式上传上来的
	 * @return boolean
	 */
	protected function checkHTTPPost(){
		if(!is_uploaded_file($this->fileInfo['tmp_name'])){
			$this->error='文件不是通过HTTP POST方式上传上来的';
			return false;
		}
		return true;
	}
	/**
	 *显示错误 
	 */
	protected function showError(){
		exit('<span style="color:red">'.$this->error.'</span>');
	}
	/**
	 * 检测目录不存在则创建
	 */
	protected function checkUploadPath(){
		if(!file_exists($this->uploadPath)){
			mkdir($this->uploadPath,0777,true);
		}
	}
}



