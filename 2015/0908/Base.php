<?php
class Base{
	private $name = '中国龙芯';
	private $number = 9;
	private $core;

	public function __construct($number){
		$this->core = 2;
		$this->number = $number;
		echo "<h3>中国制作龙芯CPU</h3>";
	}

	public function getCPU(){
		echo "<h3>中国龙芯CPU是:$this->core 核心数</h3>";
		echo "<h3>支持的线程是:$this->number</h3>";

	}
}

?>