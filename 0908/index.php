<?php
header('Content-Type:text/html; charset=utf-8');
require_once('Base.php');
class JiaoLong extends Base{
	private $name;
	private $core;
	private $number;
	public function __construct($number){
		//$this->core = 8;
		//parent::__construct($number);	
		echo "<h3>中国姣龙CPU</h3>";
		echo "<h3>子类里面的核心数量$this->core</h3>";
	}
}


$jiaolong = new JiaoLong(8);
$jiaolong->getCPU();
?>