<?php
/*
@Describe:Cookie
@Author:GongBiao
@Date:2015/07/02
*/
header('Content-Type:text/html; charset=utf-8');

/*
把uri放在cookie里
setcookie('history', array($uri));
这是错误写法，因为cookie只能存储字符串，数字，不能是数组，对象，资源
因此$uri要放在数组里面，但数组需要转成字符串
*/

$uri = $_SERVER['REQUEST_URI']; //REQUEST_URI获取

if(!isset($_COOKIE['history'])){
	$his[] = $uri;
}else{ //已经是第N次访问了
	$his = explode('|', $_COOKIE['history']);
	array_unshift($his, $uri);	
	$his = array_unique($his);

	if(count($his) > 10){
		array_pop($his);
	}

}


setcookie('history', implode('|',$his));

$id = isset($_GET['id'])?$_GET['id']:0;
if($id < 0){
	$id = 0;
}


?>

<p> 
	<a href="index.php?id=<?php echo $id-1; ?>">上一页</a>
</p>
<p>
	<a href="index.php?id=<?php echo $id+1; ?>">下一页</a>
</p>

<ul>
	<li>浏览历史</li>
	<?php foreach($his as $v){?>
	<li><?php echo $v;?></li>
	<?php }?>
</ul>
