<?php
/*
@Describe:自己写一个图像缩放，打水印处理工具类
@Author:GongBiao
@Date:2015/06/30
*/
header('Content-Type:text/html; charset=utf-8');

/*
思路：
1、操作图片需要自动获取到图像的信息和类型
2、水印就是把指定的水印复制到目标上，并加透明效果
3、缩略图就是把大图片复制到小尺寸画面上
*/

class ImageTools{

/*
	protected $error_code = 0; //错误代码
	protected $error = array(
			0 => '无错',
			1 => '图片不存在',
			2 => '其中一张图片不存在',
			3 => '水印图不能比待操作图大',
			4 => 'imagecreate..函数不存在',
			5 => '加水印失败'
		); 

	//获取错误信息

	public static function getError(){
	}
	*/

	//ImageInfo分析图片信息


	public static function ImageInfo($image){

		//判断图是否存在
		if(!file_exists($image)){
			$this->error_code = 1;
			return false;
		}

		$info = getimagesize($image);

		//把信息整理一下
		$img ['width'] = $info[0];
		$img['height'] = $info[1];
		$img['ext'] = substr($info['mime'], strpos($info['mime'], '/') + 1);

		return $img;
	}


	/*
		加水印功能
		parm String $dst 等操作图片
		parm String $water 水印小图
		parm String $save 存储路径，没有指定默认是替换
		parm int  $alpah 透明度
	*/		

	public static function water($dst, $water, $save=NULL, $pos=2, $alpha=50){
		//先保证2个图片存在
		if(!file_exists($dst) || !file_exists($water)){
			//$this->error_code = 2;	
			return false;
		}	

		//检查操作图比水印图大
		$dinfo = self::imageInfo($dst);  //获取目标图的信息
		$winfo = self::imageInfo($water); //获取源图的信息

		if($winfo['width'] > $dinfo['width'] || $winfo['height'] > $dinfo['height']){
			//$this->error_code = 3;
			return false;
		}

		//两张图，读取画面上，但是图片可能是png,可能是jpeg其它格式，用什么函数来读？
		//解决拼接图像画布创建函数，跟据图片的类型
		$dfunc = 'imagecreatefrom' . $dinfo['ext'];
		$wfunc = 'imagecreatefrom' . $winfo['ext'];


		//判断函数
		if(!function_exists($dfunc) || !function_exists($wfunc)){
			//$this->error_code = 4;
			return false;
		}

		//动态加载函数来创建画布
		$dim = $dfunc($dst); //创建待操作的画布
		$wim = $wfunc($water); //创建水印画布

		//根据水印的位置，计算粘贴坐标

		switch($pos){
			case 0: //左上角
			$posx = 0;
			$posy = 0;
			break;

			case 1: //右上角
			$posx = $dinfo['width'] - $winfo['width'];
			$posy = 0;
			break;


			case 3: //左下角
			$posx = 0;
			$posy = $dinfo['height'] - $winfo['height'];

			default:
			$posx = $dinfo['width'] - $winfo['width'];
			$posy = $dinfo['height'] - $dinfo['height'];

		}


		//加水印

		if(!imagecopymerge($dim, $wim, $posx, $posy, 0, 0, $winfo['width'], $winfo['height'], $alpha)){
			//$this->error_code = 5;
			return false;
		}


		//保存

		if(!$save){
			$save = $dst;
			unlink($dst); //删除原图
		}

		$createfunc = 'image' . $dinfo['ext'];
		$createfunc($dim ,$save);

		//销毁画布
		imagedestroy($dim);
		imagedestroy($wim);

		return true;


	}


	/*
	 thumb 生成缩略图
	 等比例缩放，两边留白
	*/


    /**
        thumb 生成缩略图
        等比例缩放,两边留白
    **/
    public static function thumb($dst,$save=NULL,$width=200,$height=200) {
        // 首先判断待处理的图片存不存在
        $dinfo = self::imageInfo($dst);
        if($dinfo == false) {
            return false;
        }

        // 计算缩放比例
        $calc = min($width/$dinfo['width'], $height/$dinfo['height']);

        // 创建原始图的画布
        $dfunc = 'imagecreatefrom' . $dinfo['ext'];
        $dim = $dfunc($dst);

        // 创建缩略画布
        $tim = imagecreatetruecolor($width,$height);

        // 创建白色填充缩略画布
        $white = imagecolorallocate($tim,255,255,255);

        // 填充缩略画布
        imagefill($tim,0,0,$white);

        // 复制并缩略
        $dwidth = (int)$dinfo['width']*$calc;
        $dheight = (int)$dinfo['height']*$calc;

        $paddingx = (int)($width - $dwidth) / 2;
        $paddingy = (int)($height - $dheight) / 2;


        imagecopyresampled($tim,$dim,$paddingx,$paddingy,0,0,$dwidth,$dheight,$dinfo['width'],$dinfo['height']);

        // 保存图片
        if(!$save) {
            $save = $dst;
            unlink($dst);
        }

        $createfunc = 'image' . $dinfo['ext'];
        $createfunc($tim,$save);

        imagedestroy($dim);
        imagedestroy($tim);

        return true;

    }


}

/*
echo '<pre>';
print_r(ImageTools::imageInfo('./fly.jpg'));
echo '</pre>';
*/

/*
echo ImageTools::water('./motox.jpg', './fly.png', './temp/test01.jpg', 0)?'Ok':'Faild';
echo ImageTools::water('./motox.jpg', './fly.png', './temp/test02.jpg', 1)?'Ok':'Faild';
echo ImageTools::water('./motox.jpg', './fly.png', './temp/test03.jpg', 2)?'Ok':'Faild';
echo ImageTools::water('./motox.jpg', './fly.png', './temp/test04.jpg', 3)?'Ok':'Faild';
*/

echo ImageTools::thumb('./motox.jpg', './temp/motox_thumb1.jpg', 200, 200)?'OK':'Faild';
echo ImageTools::thumb('./motox.jpg', './temp/motox_thumb2.jpg', 200, 300)?'OK':'Faild';
echo ImageTools::thumb('./motox.jpg', './temp/motox_thumb3.jpg', 300, 200)?'OK':'Faild';




echo '<h3>程序运行结束!</h3>';


?>
