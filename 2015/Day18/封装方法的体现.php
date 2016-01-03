<?php
/*
封装，在方法上的体现
*/
header('Content-Type:text/html;charset=utf-8');

class Human{

private $money = 1000;

public function showMoney(){
	return $this->money;
}


}


$p1 = new Human();
echo  $p1->showMoney();


?>
