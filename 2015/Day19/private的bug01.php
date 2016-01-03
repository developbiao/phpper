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

echo '小涛有',$xiaotao->getMoney($xiaotao),'元钱<br />';
$xiaotao->setMoney($xiaotiao);
echo '小涛用了500元,现在有', $xiaotao->getMoney($xiaotao),'元钱, <br/>';

?>
