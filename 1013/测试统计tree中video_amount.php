<?php
/*
@Description:统计树里面的video_amount 数量
@Author:GongBiao
@Date:2016/10/13
*/
header('Content-Type:text/html; charset=utf-8');
$area = array(
array('id'=>1,'name'=>'A','parent'=>0),
array('id'=>2,'name'=>'B','parent'=>0),
array('id'=>3,'name'=>'C','parent'=>0),
array('id'=>4,'name'=>'D','parent'=>1),
array('id'=>5,'name'=>'E','parent'=>1),
array('id'=>6,'name'=>'F','parent'=>2),
array('id'=>7,'name'=>'G','parent'=>2),
array('id'=>8,'name'=>'H','parent'=>3),
array('id'=>9,'name'=>'I','parent'=>5),
array('id'=>10,'name'=>'J','parent'=>5),
array('id'=>11,'name'=>'K','parent'=>9),
array('id'=>12,'name'=>'L','parent'=>9)
);

$videos = ['D' => 3, 'K' => 3, 'L' => 6, 'J' => 8, 'F' => 5, 'G' => 10, 'H' => 7];

$num = 0;

//找子栏目
function findson($arr, $id=0){
    //$id栏目的儿子有哪些呢
    //答：数组循环一遍，谁的parent值等于$id谁就是他儿子
    global $num;
    $sons = array(); //子栏目的数组
    foreach($arr as $v){
        if($v['parent']==$id){
            $sons[] = $v;
        }
        $num++;
    }

    return $sons;
}

// 迭代查找子孙树 
function subtree($arr,$parent=0) {
    $task = array($parent); // 任务表
    $tree = array(); // 地区表
    global $num;
    while(!empty($task)) {
        $flag = false;
        
        foreach($arr as $k=>$v) {
            if($v['parent'] == $parent) {
                $tree[] = $v;
                array_push($task,$v['id']); // 把最新的地区id入任务栈
                $parent = $v['id'];
                unset($arr[$k]); // 把找到单元unset掉
                $flag = true; //说明找到了子栏目
            } 
            $num++;
        }
        if($flag == false) {
            array_pop($task);
            $parent = end($task);
        }
    }
    return $tree;
}

function getTreeVideoAmount($area, $parent_id)
{
    global $videos;
    global $num;
    $sons_node = findson($area, $parent_id);

    foreach($sons_node as &$one_node)
    {
        $video_count = 0;
        $tree = subtree($area, $one_node['id']);
        if(count($tree))
        {//have child
            foreach($tree as $v)
            {
                if(!count(subtree($tree, $v['id']))){
                    $video_count += $videos[$v['name']];
                }

                $num++;
            }

        }
        else
        {//check last child
            $video_count += $videos[$one_node['name']];
            $num++;
        }
         $one_node['amount'] = $video_count;
    }

    return $sons_node;

}

//===========迭代查找树中每个节点的video amount===================
$time_start = microtime(true);
$parent_id = isset($_GET['parent_id']) ? $_GET['parent_id'] : 0;
$sons_node = getTreeVideoAmount($area, $parent_id);

echo '<pre>';
print_r($sons_node);
echo '</pre>';
$spend_time = microtime(true) - $time_start;
echo "<h3>Loop执行次数:{$num}</h3>";
echo "<h3>程序运行完成{$spend_time}ms!</h3>";
?>
