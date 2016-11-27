<?php
header('Content-Type:text/html; charset=utf-8');

class sixty{
	public $wine = '1斤';

	public function Play(){
		echo '谈理想,温饱<br />';
	}
}

class nine extends sixty{

	public function Play(){   //override 重写了父类的方法
		echo '玩网游，宅<br />';
	}	

	public function momo(){
		echo '妹子，认识一下<br />';
	}
}

$s9 = new nine();
echo '小衰的洒量',$s9->wine,'<br />';
$s9 -> Play();
$s9 -> momo();
?>
