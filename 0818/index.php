<?php
/*
*@Describe:一致性hash的PHP实现 
*/

interface hash{
	public function _hash($str);
}

interface distribution{
	public function lookup($key);
}


class Consistent implements hash, distribution{
	public function _hash($str){
		return sprintf('%u',crc32($str));
	}

	public function lookup($key){

	}
} 

$conn = new Consistent();
echo $conn->_hash('gege');
?>