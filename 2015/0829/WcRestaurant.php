<?php
require_once "models/BaseModel.php";

class WcRestaurant extends BaseModel{
    /**
     * ---------------------------------------------------------
     * id=1 表示取desk
     * id=2 表示取chair
     * id=3 表示取stool
     * ---------------------------------------------------------
     */
    const WC_DESK = 1;
    const WC_CHAIR = 2;
    const WC_STOLL = 3;
    //获取椅子的数量
    public function getChairNumber()
    {
        $table_name = $this->table_name();
        return R::getCol("SELECT number FROM $table_name WHERE id=2")[0];
    }

    //获取椅子的使用状态
    public function getChairStat()
    {
        $table_name = $this->table_name();

        $stat = R::getCol("SELECT stat FROM $table_name WHERE id=2");
        return $stat[0];
    }

    //设置椅子的状态
    public function setChairStat($stat)
    {
        $table_name = $this->table_name();
        $number = R::getCol("SELECT stat FROM $table_name WHERE id=2");
        if($stat < 0 || $stat > $number) //如果要修改的状态小于库存数量或者大于库存数量，修改失败
        {
            return false;
        }

        //return R::exec("UPDATE $table_name SET stat=$stat WHERE id=2");
        $chair = R::findOne($table_name, 'id=?', array(2));
        $chair->stat = $stat;
        return R::store($chair);

    }

    //设置椅子的数量
    public function setChairNumber($number)
    {
        $number = $number ? $number : 0;
        $table_name = $this->table_name();
        $chair = R::findOne($table_name, 'id=?', array(2));
        $chair->number = $number;
        return R::store($chair);

    }


}