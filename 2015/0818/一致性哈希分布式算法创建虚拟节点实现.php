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
	protected $_nodes = array();
	protected $_postion = array();
	protected $_mul = 64;   //虚拟节点
	public function _hash($str){
		return sprintf('%u',crc32($str)); //把字符串转成32位符号整数
	}


	//核心功能
	public function lookup($key){
		$point = $this->_hash($key);

		//先取圆环上最小的一个节点，当成如果
		$node = current($this->_postion);

		foreach($this->_postion as $k=>$v){
			if($point <= $k){
				$node = $v;
				break;
			}
		}

		return $node;

	}

	//添加服务器
	public function addNode($node){
		//如array(13亿=>q, 8亿=>b, 24->c);
		//添加虚拟节点
		for($i=0; $i<$this->_mul; $i++){

			$this->_postion[$this->_hash($node . '_' . $i)] = $node;
		}
		//$this->_nodes[$this->_hash($node)] = $node;
		$this->sortPos();
	}

	//循环所有的虚节点，谁的值==指定的真实节点，就把它删除掉
	public function delNode($node){
		foreach($this->_postion as $k=>$v){
			if($v == $node){
				unset($this ->_postion[$k]);
			}
		}
	}


	//对nodes服务器排序
	protected function sortPos(){
		ksort($this->_postion, SORT_REGULAR);
	}

	//调试用的函数
	/*
	public function printNodes(){
		print_r($this->_nodes);
	}
	*/


	public function printPos(){
		print_r($this->_postion);
	}

} 


//test 
$con = new Consistent();
$con->addNode('a');
$con->addNode('b');
$con->addNode('c');


echo '所有的服务器如下:<br />';
$con->printPos();

echo '当前的键计算的hash落点是', $con->_hash('title').'<br />';

echo '应该落在'.$con->lookup('title').'号服务器<br />';

?>
