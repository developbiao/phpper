<?php
class Response{
	const JSON = 'json';
	const XML = 'xml';

	public static function show($code, $message, $data=array(), $type=self::JSON){
		if(!is_numeric($code)){
			return '';
		}

		$result= array(
			'code' 		=> $code,
			'message' 	=> $message,
			'data'	 	=> $data
			);

		if($type == 'json'){
			self::json($code, $message, $data);	
			exit;
		}else if($type == 'array'){
			echo '<pre>';
			print_r($result);
			echo '</pre>';
			exit;
		}else if($type == 'xml'){
			self::xmlEncoding($code, $message, $data);
			exit;
		}else{
			//TODO::other data
		}

	}

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
	*按xml的数据格式来封装接口数据
	*/
	public static function xmlEncoding($code, $message='', $data=array()){
		if(!is_numeric($code)){
			return '';
		}
		$result = array(
			'code' => $code,
			'message' => $message,
			'data' => $data
			);
		header('Content-Type:text/xml');
		$xml = "<?xml version='1.0' encoding='UTF-8'?>\n";
		$xml .= "<root>\n";
		$xml .= self::xmlToEncode($data);
		$xml .= "</root>";
		return $xml;
	}


	public static function xmlToEncode($data)
	{
		$xml = '';
		$attr = '';
		foreach($data as $key=>$value){
			if(is_numeric($key)){
				$attr = " id='{$key}'";
				$key = "item";
			}
			$xml .= "<{$key}{$attr}>\n";	
			$xml .= is_array($value) ? self::xmlToEncode($value) : $value;
			$xml .= "</{$key}>\n";	
		}

		return $xml;
	}


}

//在test_xml中调用

?>
