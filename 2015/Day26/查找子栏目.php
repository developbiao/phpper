<?php
/*
@Description:把变量写到文件中
@Author:GongBiao
@Date:2015/06/18
*/
header('Content-Type:text/html; charset=utf-8');

/*
 * 
// 对于下面这个数组,每个单元有自己的id和地区名
// 每个单元之间的地位是平等的
// 因此谈不上谁是谁的上级/下级
$area = array(
array('id'=>1,'name'=>'安徽'),
array('id'=>2,'name'=>'海淀'),
array('id'=>3,'name'=>'濉溪县'),
array('id'=>4,'name'=>'昌平'),
array('id'=>5,'name'=>'淮北'),
array('id'=>6,'name'=>'朝阳'),
array('id'=>7,'name'=>'北京'),
array('id'=>8,'name'=>'上地')
 **/
/*

我们为了表示地区之间的一下级关系，人为的加了一个字段
parent
parent的值是该栏目的父栏目的id
找A栏目的子栏目时：谁的parent值等于A的值，谁就是A的儿子
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


//找子栏目
function findson($arr, $id=0){
	//$id栏目的儿子有哪些呢
	//答：数组循环一遍，谁的parent值等于$id谁就是他儿子

	$sons = array(); //子栏目的数组

	foreach($arr as $v){
		if($v['parent']==$id){
			$sons[] = $v;
		}
	}

	return $sons;

}

echo '<pre>';
print_r(findson($area, 1));
echo '</pre>';

echo '<h3>程序运行完成!</h3>';
?>
