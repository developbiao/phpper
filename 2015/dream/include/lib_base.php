<?php
//递归转义数组
/*
function _addslashes($arr){
	foreach($arr as $k=>$v){
		if(is_string($v)){
			$arr[$k] = addslashes($v);
		}else if(is_array($v)){
			$arr[$k] = _addslashes($v); //如果是数组，调用自身，再转义
		}
	}

	return $arr;
}
*/

defined('ACC') || exit('ACC Denied!');


// 先写一个1维数组的转义函数
function _addslashes($arr) {
    foreach($arr as $k=>$v) {
        if(is_string($v)) {
            $arr[$k] = addslashes($v);
        } else if(is_array($v)) {  // 再加判断,如果是数组,调用自身,再转
            $arr[$k] = _addslashes($v);
        }
    }
    
    return $arr;
}


?>