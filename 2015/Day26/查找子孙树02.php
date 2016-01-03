<?php
/*
@Description:无限级分类
@Author:GongBiao
@Date:2015/06/18
*/
header('Content-Type:text/html; charset=utf-8');


/*
顺着这层关系,我们可以分析出
0
    安徽
        淮北
            濉溪县        
    北京
        海淀
            上地
        昌平
        朝
 * */

/**
无限级分类，牵涉3个应用
0是 找指定栏目的子栏目
1是 找指定栏目的子孙栏目，即子孙树
2是 找指定的栏目的父栏目/父父栏目...顶级栏目，即家谱树
 **/

$area = array(
array('id'=>1,'name'=>'安徽','parent'=>0),
array('id'=>2,'name'=>'海淀','parent'=>7),
array('id'=>3,'name'=>'濉溪县','parent'=>5),
array('id'=>4,'name'=>'昌平','parent'=>7),
array('id'=>5,'name'=>'淮北','parent'=>1),
array('id'=>6,'name'=>'朝阳','parent'=>7),
array('id'=>7,'name'=>'北京','parent'=>0),
array('id'=>8,'name'=>'上地','parent'=>2)
);


//查找子孙树
//用数组merge

function subtree($arr, $id=0, $level = 1){
	$subs = array(); // 子孙树数组
	foreach($arr as $v){
		if($v['parent'] == $id){
			$v['level'] = $level;
			$subs[] = $v;

			$subs = array_merge($subs, subtree($arr, $v['id'],$level+1));
		}
	}
	return $subs;
}

echo '<pre>';
print_r(subtree($area, 0, 1));
echo '</pre>';

echo '<h3>程序运行完成!</h3>';
?>
