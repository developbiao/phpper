<?php
/*
*@Describe:服务器
*@Author:GongBiao
*@Date:2015/07/28
*/
header('Content-Type:text/html; charset=utf-8');

//接收操作
$do = $_REQUEST['do'];

//对一维数据处理
$member['username'] = 'tommiao';
$member['password'] = '123456789';

//二维数组的处理
$person['1']['username'] = 'niuniuer';
$person['1']['password'] = 'cccccccer';
$person['2']['username'] = '牛要飞';
$person['2']['password'] = 'ddddddd';
$person['2']['address'] = '北京uniku';
$person['third']['members']['username'] = '心理咨询老师';

//对象处理
class addressClass{
	public $address = array();

	public function setAddress($address){
		$this->address = $address;

	}

	public function getAddress(){
		return $this->address;

	}
}

//实例化对象
$addressObj = new addressClass();

$addressObj->setAddress($person);


switch($do){
	case 'first':
		echo json_encode($member);
		break;
	case 'second':
		echo json_encode($person);
		break;
	case 'third':
		echo json_encode($addressObj);	
		break;
}

?>

