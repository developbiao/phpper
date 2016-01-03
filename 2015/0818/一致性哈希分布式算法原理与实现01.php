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
	public function _hash($str){
		return sprintf('%u',crc32($str)); //把字符串转成32位符号整数
	}

	public function lookup($key){
		$point = $this->_hash($key);

		//先取圆环上最小的一个节点，当成如果
		$node = current($this->_nodes);

		foreach($this->_nodes as $k=>$v){
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
		$this->_nodes[$this->_hash($node)] = $node;
		$this->sortNode();
	}


	//对nodes服务器排序
	protected function sortNode(){
		ksort($this->_nodes, SORT_REGULAR);
	}


	public function printNodes(){
		print_r($this->_nodes);
	}

} 


//test 
$con = new Consistent();
$con->addNode('a');
$con->addNode('b');
$con->addNode('c');

echo '所有的服务器如下:<br />';
$con->printNodes();

echo '当前的键计算的hash落点是', $con->_hash('hehe').'<br />';

echo $con->lookup('hehe');

?>
