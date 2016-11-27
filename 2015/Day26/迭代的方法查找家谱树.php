<?php
/*
@Description:迭代实现无限级分类
@Author:GongBiao
@Date:2015/06/18
*/
header('Content-Type:text/html; charset=utf-8');

/*
 * 无限级分类，求家谱树
 * 家谱树的应用,如面包屑导航，首页->手机类型->Adroid->Moto->V3
 */

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

//使用迭代的方法实习查找家谱树
//迭代，效率比递归高
function familytree($arr, $id){

	$tree = array();

	while($id !== 0){
		foreach($arr as $v){
			if($v['id'] == $id){
				$tree[] = $v;
				$id = $v['parent'];
				//echo '查找完成一次<br />';
				break; //跳出foreach当前循环继续
			}
		}
	}

	return $tree;
}

echo '<pre>';
print_r(familytree($area, 4));
echo '</pre>';

echo '<h3>程序运行完成!</h3>';
?>

