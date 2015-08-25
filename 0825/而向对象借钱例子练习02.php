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

        //优化了前面的写法
        if($much > $this->money + $this->bank){
            return false;
        }else if($much > $this->money){
            $num = $much - $this->money;
            $this->money += $this->getBank($num);
            $this->money -= $much;
            return $much;
        }else{
            $this->money -= $much;
            return $much;
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

$money = $xiaotao->send(22.33);

if($money){
    echo '借了', $money, '元<br />';
    echo '还剩下', $xiaotao->showMoney(), '<br />';

}else{
    echo '小涛说他没有钱咯~<br />';
}

echo '小涛银行还有:', $xiaotao->showBank();

?>
