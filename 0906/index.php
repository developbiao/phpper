<?php
/*
*@Decribe:php匿名函数练习
*@Author:GongBiao
*@Date:2015/09/06
*/
define ( "MAXSIZE" ,  100 );

echo  MAXSIZE ;
echo  constant ( "MAXSIZE" );  // same thing as the previous line


 interface  bar  {
    const  test  =  'foobar!' ;
}

class  foo  {
    const  test  =  'newspaper!' ;
}

 $const  =  'test' ;

 var_dump ( constant ( 'bar::' .  $const ));  // string(7) "foobar!"
 var_dump ( constant ( 'foo::' .  $const ));  // string(x) "newspaper!"
 ?>