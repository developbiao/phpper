<?php
header("content-type:text/html; charset=utf-8");
//分类
$area = array(
   array('id'=>1 ,'area'=>'北京','pid'=>0),
   array('id'=>2 ,'area'=>'广西','pid'=>0),
   array('id'=>3 ,'area'=>'桂林','pid'=>2),
   array('id'=>4 ,'area'=>'阳朔','pid'=>3),
   array('id'=>5 ,'area'=>'丰台','pid'=>1),
   array('id'=>6 ,'area'=>'方庄','pid'=>5),
   array('id'=>7 ,'area'=>'朝阳','pid'=>1),
   array('id'=>8 ,'area'=>'十里河','pid'=>7),
   array('id'=>9 ,'area'=>'老君堂','pid'=>8),
   array('id'=>10,'area'=>'四川省','pid'=>0),
   array('id'=>11,'area'=>'成都市','pid'=>10),
   array('id'=>12,'area'=>'雅安市','pid'=>10),
   array('id'=>13,'area'=>'石棉县','pid'=>12)
);

function so($arr,$id,$deep=1){
        static $list = array();
        foreach($arr as $k=>$v){
                if($v['pid'] == $id){
                        echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$deep) . $arr[$k]['area'] . '<br />';
                        $list[] = $v;
                        so($arr,$v['id'],$deep+1);
                }
        }
        return $list;
}

so($area,0);
//so($area,1);
//so($area,2);
//so($area,3);
?>

