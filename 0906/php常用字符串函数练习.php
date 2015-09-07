<?php
/*
*@Decribe:PHP常用字符串函数练习
*@Author:GongBiao
*@Date:2015/09/06
*/
//------------------大小写转换--------------//
//echo strtolower('HELLO KITTY');
//echo strtoupper('hello, Kitty');
//将字符的首字符转成大写
//echo ucfirst('hello kitty'); //Hello kitty

//将每个单词的首字符转成大写
//echo ucwords('gong biao'); //Gong Biao


//----------字符串截取与替换-----------//
//substr():截取字符串，返回截取到的字符串
//当指定个数时，表示从这个数字截取到最后，相关当于substr($str, 3, $arr.length);
//echo substr('abcdef', 0, 3); //abcd
//echo substr('abcdef', 2, -1); //cde
//echo substr('abcdef', -4, 1); //c
//echo substr('ABCDEF', -2, 3); //从字符串倒数2位向前截取3个 EF


//字符中strstr提取doamin
//$email = 'developbiao@gmal.com';
//echo $domain = strstr($email, '@') //@gmail.com
//echo $domain = strstr($email, '@', true) //developbiao

//str_replace(): 字符串替换,(区分大小写)
/*
$str = '我最喜欢吃我xxxx做的馅饼，但她总是嫌麻烦偷工减料';
$sha = array('我', '馅饼', '嫌');
$lijun = array('你', '你大便', '不嫌');

//把$sha替换$lijun 在$str字符串中
echo $resut = str_replace($sha, $lijun, $str);
*/





/*
$mystring = 'abcdef';
$findme = 'G';
$pos = strpos($mystring, $findme);
if ( $pos  ===  false ) {
    echo  "The string ' $findme ' was not found in the string ' $mystring '" ;
} else {
    echo  "The string ' $findme ' was found in the string ' $mystring '" ;
    echo  " and exists at position  $pos " ;
}
*/




//-----------字符中与数组的转换------------//
//implode():将一个数组的元素转成字符串，用指定字符分割
//$arr = array('A', 'B', 'C', 'D');
//如果不指定第二个参数，没有分割符
//echo implode($arr);

//批定一个参数，连接每个数组元素的字符
//echo  implode('get-',$arr); //Aget-Bget-Cget-D 

//explode():将字符串转成数组，指定用什么隔开每个数组元素
/*
$str = 'Aget-Bget-Cget-D';
$arr = explode('get-', $str);
echo '<pre>';
print_r($arr); //返回一个数组:array('A', 'B', 'C', 'D');
echo '</pre>';
*/


 ?> 

