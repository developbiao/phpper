<?php
/*
封装，在方法上的体现
*/
header('Content-Type:text/html;charset=utf-8');

class Human{
	private $money = 1000;
	private $bank = 2000;

	private function getBank($num){
		$this->bank -= $num;
		return $num;

	}


	public function send($much){

		if($much > $this->money + $this->bank){
			return false;
		}else if($much > $this->money){
			$num = $much - $this->money; //算算从银行取多少钱
			$this->money += $this->getBank($num);

			$this->money -= $much;  //再把钱错给朋友
			return $much;
		}else{

			$this->money -= $much;
			return $much;
		}

	}


	public function showMoney(){
		return $this->money;
	}

	public function showBank(){
		return $this->bank;
	}
}


$lisi = new Human();

$flag = $lisi->send(2000);

if($flag){
	echo '借了',$flag,'元<br />';
	echo '还剩',$lisi->showMoney(),'元<br />';
	echo '银行还有',$lisi->showBank(),'元<br />';

}




?>