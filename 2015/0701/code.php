<?php
/*
 * 普通验证码
 * 变形为
 * 扭曲验证码
 */
class SecurityCode{

	public static function code(){
		$str = 'abcdefghijkmnpqrstuvwzxyABCDEFGKMNPQRSTUVWXYZ23456789';
		$code = substr(str_shuffle($str), 0, 5);

		//2块画布
		$src = imagecreatetruecolor(60, 25);
		$dst = imagecreatetruecolor(60 ,25);


		//准备背景颜色

		$sgray = imagecolorallocate($src, 200, 200, 200);
		$dgray = imagecolorallocate($src, 200, 200, 200);
		$sblue = imagecolorallocate($src, 0, 0, 255);

		//填充颜色

		imagefill($src, 0, 0, $sgray);
		imagefill($dst, 0, 0,  $dgray);


		//写字

		imagestring($src, 5, 5, 4, $code, $sblue);

			for($i=0; $i<60; $i++){
				//根据正弦曲线计算上下波动的posY

				$offset = 4; //最大波动几个像素
				$round = 2; //扭2个周期，即4PI
				$posY = round(sin($i * $round * M_PI / 60) * $offset); //关键公式在这里

				imagecopy($dst, $src, $i, $posY, $i, 0, 1, 25);
			}

		header('Content-Type:image/jpeg');
		imagejpeg($dst);

	}

}

//SecurityCode
SecurityCode::code();
?>
