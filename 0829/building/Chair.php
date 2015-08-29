<?php
require_once "models/wc/WcRestaurant.php";

class Chair{
    private static $wc_chair = array();  //chair
    private static $flag= true;

    public function  __construct()
    {
        if(self::$flag)   //如果第一次进来就初始化
        {
            $chair = new WcRestaurant();

            //初始化椅子的状态
            $chair_num = $chair->getChairNumber();  //椅子的总数量
            for ($i = 0; $i < $chair_num; $i++)
            {
                self::$wc_chair[$i] = true;
            }
            self::$flag=false;
        }
    }

    //申请使用几号椅子?
    public function use_chair($chair_id)
    {
        $chair = new WcRestaurant();
        $stat = $chair->getChairStat(); //获取当前椅子的使用情况
       if(isset(self::$wc_chair[$chair_id]))  //判断椅子存在不存在
       {
           if(self::$wc_chair[$chair_id])  //判断椅子被使用没有
           {
               self::$wc_chair[$chair_id] = false;  //把这个椅子标记为使用了
               $chair->setChairStat(--$stat);  //修改数据库中椅子使用情况
               return true;
           }
       }
        return false;  //说明椅子使用中
    }

    //回收椅子
    public function recover_chair($chair_id)
    {
        $chair = new WcRestaurant();
        $stat = $chair->getChairStat();
        if(isset(self::$wc_chair[$chair_id]))
        {
            if(!self::$wc_chair[$chair_id])
            {
                self::$wc_chair[$chair_id] = true;
                $chair->setChairStat(++$stat);
                return true;  //成功回收了椅子
            }
        }
        return false;
    }

}