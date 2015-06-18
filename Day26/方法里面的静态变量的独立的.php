<?php
/*
@Description:把变量写到文件中
@Author:GongBiao
@Date:2015/06/18
*/
header('Content-Type:text/html; charset=utf-8');
function method01(){
	static $var = 3;
	return ++$var;
}

function method02(){
	static $var = 5;
	return ++$var;
}

echo method01(),'<br/>'; 
echo method01(),'<br/>'; 
echo method01(),'<br/>'; 
echo '----------------<br />';
echo method02(),'<br/>';  //method02 方法里面的static并没有影响到method里面的$var
echo method01(),'<br/>'; 


echo '<h3>程序运行完成!</h3>';

/*
	static总结
	1：修饰类的属性方法为静态属性，静态方法
	2: statid::method(),延迟绑定
	3: 在函数/方法中，声明静态变量用
*/
?>
