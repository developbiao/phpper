<?php
header('Content-Type:text/html;charset=utf-8');

class People{
	private $money = 1000;

	public function getMoney($people){
		return $people->money;
	}

	public function setMoney($people){
		$people->money -= 500;
	}
}

$xiaotao = new People();
$chenglin = new People();

//echo $xiaotao->money; 
//让小涛去打探陈林的钱
echo $xiaotao ->getMoney($chenglin),'<br />';

//让小涛去改变陈的钱
$xiaotao ->setMoney($chenglin);
echo $xiaotao ->getMoney($chenglin), '<br />';

print_r($chenglin);

echo '<hr />';

//小涛自己用了自己的钱

$xiaotao ->setMoney($xiaotao);  //小涛用了钱
$xiaotao ->setMoney($xiaotao); //小涛又用了钱
echo $xiaotao ->getmoney($xiaotao), '<br />';
echo '<pre>';
print_r($xiaotao);
echo '</pre>';
?>
