<?php 
header('Content-Type:text/html; charset=utf-8');
$ext = array('avi','wmv','asf','mov','rm','ra','ram','mp3','wma','swf'); 
$data = array(1, 3, 7, 8, 9);
if(in_array(11,$data) ){ 
        	echo '存在'; 
}else{ 
        	echo '不存在'; 
} 

