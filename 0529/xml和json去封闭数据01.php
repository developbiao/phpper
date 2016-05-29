<?php
class Response{
	/*
	@Describe format json data	
	*按json方式输出通信数据
	@param inter $code 状态码 
	@param string $message  提示信息
	@param array $data数据 
	*/
	public static function json($code, $message='', $data=array()){
		if(!is_numeric($code)){
			return '';
		}

		$result = array(
			'code' => $code,
			'message' => $message,
			'data' => $data
			);
		echo json_encode($result);
	}


	/*
	@Describe format xml data
	*按
	*/
	public static function xml(){
	 header("Content-Type:text/xml");
	  $xml = "<?xml version='1.0' encoding='UTF-8'?>\n";	
	  $xml .= "<root>\n";
	  $xml .= "<code>200</code>\n";
	  $xml .= "<message>数据返回成功</message>\n";
	  $xml .= "<data>\n";
	  $xml .= "<id>999075</id>\n";
	  $xml .= "<name>gongbiao</name>\n";
	  $xml .= "</data>\n";
	  $xml .= "</root>";

	  echo $xml;
	}

}


?>

