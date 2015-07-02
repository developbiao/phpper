<?php
defined('ACC') || exit('ACC Denied!');
//父类model
class Model{
	protected $table = NULL; //是model所控制的表
	protected $db = NULL; //是引入的mmysql对象

	protected $pk = '';
	protected $fields = array();
	protected $_auto = array();
	protected $_valid = array();
	protected $error = array();

	public function __construct(){
		$this->db = mysql::getIns();
	}

	public function table($table){
		$this->table = $table;
	}

	/*
		自动过滤
		负责把传来的数组
		清除掉不用的单元
		留下与表的字段对应的单元
		思路：
		循环数组，分别判断其key，是否是表的字段
		自然，要先有表的字段

		表的字段可以desc表名来分析
		也可以搬运写好，以tp为例，两者都行
		@params Array array
		@return Array data
	*/
	public function _facade($array = array()){
		$data = array();
		foreach($array as $k=>$v){
			if(in_array($k, $this->fields)){
				$data[$k] = $v;
			}
		}

		return $data;

	}

	/*
	 自动填充
	 负责把表中需要，而$_POST又没有传的字段，赋值
	 比如$_POST里面没有add_time,即商品时间
	 则自动把time()的返回值赋过来
	 @paras:Array $data
	 @return Array $data; 
	*/

	 public function _autoFill($data){
	 	foreach($this->_auto as $k=>$v)	{
	 		if(!array_key_exists($v[0], $data))	{
	 			switch($v[1]){
	 				case 'value':
	 				$data[$v[0]] = $v[2];
	 				break;
	 				case 'function':
	 				$data[$v[0]] = call_user_func($v[2]); //回调函数
	 				break;
	 			}
	 		}
	 	}

	 	return $data;

	 }

	 /*
	 @Description：自动验证字段
	 格式：$this->_valid = array(
	 	array('验证的字段名', 0/1/2(验证的场景), '报错提示', 'require/in'
	 	,(某种情况)/between(范围)/length(某个范围), '参数')
	 )

	 检验说明：
	 0:有字段则检查，无此字段则不检，如性别

	 1:必检字段

	 2:如有且内容不空，则检查，如签名档，非空，则检查长度


	 array('goods_name', 1, '必须有商品名', 'require'),
	 array('cat_id', 1, '栏目id必须是整型值', 'number');
	 array('is_new', 0, 'in_new只能是0或1', 'in', '0, 1');
	 array('good_breif', 2 '商品简介就在10到100字符', 'length', '10, 100');
	 */


	 public function _validate($data) {
	 	if(empty($this->_valid)) {
	 		return true;
	 	}

	 	$this->error = array();

	 	foreach($this->_valid as $k=>$v) {
	 		switch($v[1]) {
	 			case 1:
	 			if(!isset($data[$v[0]])) {
	 				$this->error[] = $v[2];
	 				return false;
	 			}
	 			
	 			if(!$this->check($data[$v[0]],$v[3])) {
	 				$this->error[] = $v[2];
	 				return false;
	 			}
	 			break;
	 			case 0:
	 			if(isset($data[$v[0]])) {
	 				if(!$this->check($data[$v[0]],$v[3],$v[4])) {
	 					$this->error[] = $v[2];
	 					return false;
	 				}
	 			}
	 			break;
	 			case 2:
	 			if(isset($data[$v[0]]) && !empty($data[$v[0]])) {
	 				if(!$this->check($data[$v[0]],$v[3],$v[4])) {
	 					$this->error[] = $v[2];
	 					return false;
	 				}
	 			}
	 		}
	 	}

	 	return true;

	 }


	 //检验错误信息

	 public function getErr(){
	 	return $this->error;
	 }


	 //检验chek函数

	 protected function check($value,$rule='',$parm='') {
	 	switch($rule) {
	 		case 'require':
	 		return !empty($value);

	 		case 'number':
	 		return is_numeric($value);

	 		case 'in':
	 		$tmp = explode(',',$parm);
	 		return in_array($value,$tmp);
	 		case 'between':
	 		list($min,$max) = explode(',',$parm);
	 		return $value >= $min && $value <= $max;
	 		case 'length':
	 		list($min,$max) = explode(',',$parm);
	 		return strlen($value) >= $min && strlen($value) <= $max;
	 		case 'email':
	 			//判断$value 是否是email,可以用正则来表达
	 			//这里使用系统函数来判断filter_var
	 			return (filter_var($value, FILTER_VALIDATE_EMAIL) !== false);

	 		default:
	 		return false;
	 	}
	 }
	/*
	在父类里，写最基本的增、删、改查操作
	*/

	/*
	增加操作
	params array $data
	return bool
	*/

	public function add($data){
		return $this->db->autoExecute($this->table, $data);

	}

	/*
	删除操作
	params int $id 主键
	return int影响行数
	*/

	public function delete($id){
		$sql = 'DELETE FROM '. $this->table . ' WHERE' . $this->pk . '=' . $id;
		if($this->db->query($sql)){
			return $this->db->affected_rows();
		}else{
			return false;
		}

	}

	/*
	修改操作
	params array $arr
	params int $id
	return int 影响行数
	*/

	public function update($data, $id){
		$rs = $this->db->autoExecute($this->table, $data, 'update', ' where ' . $this->pk . '='.$id);
		if($rs){
			return $this->db->affected_rows();
		}else{
			return false;
		}

	}

	/*
	查询所有的数据
	params void
	return Array $arr
	*/

	public function select(){
		$sql = 'SELECT * FROM ' . $this->table;
		return $this->db->getAll($sql);
	}


	/*
	查找一行数据
	params $id
	return Array
	*/

	public function find($id){
		$sql = 'SELECT * FROM '. $this->table . ' WHERE ' . $this->pk . '=' . $id;
		return $this->db->getRow($sql);
	}


}

?>
