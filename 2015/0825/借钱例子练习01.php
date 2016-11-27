<?php
/*
面向对象复习
*/
header('Content-Type:text/html; charset=utf-8');

class Human{
    private $money = 1000;
    private $bank = 2000;

    private function getBank($num){
        $this->bank -= $num;
        return $num;
    }


    public function send($much){

        if($much <= 1000){
            $this->money -= $much;
            return $much;
        }else if($much <= $this->money + $this->bank){
            $num = $much - $this->money; //算算要从银行取多少钱
            $this->money += $this->getBank($num); //从银行出取钱，加到现金里

            $this->money -= $much; //再把钱错给朋友
            return $much; 
        }else{ //最后，实在借不了那么多
            return false;
        }

    }


    public function showBank(){
        return $this->bank;
    }


    public function showMoney(){
        return $this->money;
    }
}



$xiaotao = new Human();

$money = $xiaotao->send(1321.33);

if($money){
    echo '借了', $money, '元<br />';
    echo '还剩下', $xiaotao->showMoney(), '<br />';

}else{
    echo '小涛说他没有钱咯~<br />';
}

echo '小涛银行还有:', $xiaotao->showBank();

?>
