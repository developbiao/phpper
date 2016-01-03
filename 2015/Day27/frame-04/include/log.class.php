<?php
/*
@Descrition:log.class.php
作用:记录信息到日志
思路:
给定内容，写入到文件(fopen,fwite...)
如果文件大于 >1M,重新写一份


传给我一个内容
判断当前日志的大小
如果>1M,备份
否则，写入
@Author:GongBiao
@Date:2015/06/16

*/

header('Content-Type:text/html; charset=utf-8');

defined('ACC') || exit('ACC Denied!');
class Log{

	const LOGFILE = 'curr.log'; //建一个常量，代表日志文件的名称
	//写日志的

	public static function write($cont){
		$cont .= "\r\n";
		//判断是否备份
		$log = self::isBak(); //计算出日志文件的地址

		$fh = fopen($log, 'ab');
		fwrite($fh, $cont);
		fclose($fh);
	}

	//备份日志

	public static function bak(){
		//就是把原来的日志文件，改个名存储起来
		//改成 年-月-日.bak这种形式 

		$log = ROOT.'data/log/'.self::LOGFILE;
		$bak = ROOT.'data/log/'.date('ymd'.mt_rand(10000, 99999));

		return rename($log, $bak);

	}


	//读取并判断日志的大小
	public static function isBak(){
		$log = ROOT.'data/log/'.self::LOGFILE;

		if(!file_exists($log)){
			touch($log); //如果文件不存在，见分晓创建该文件
			return $log;
		}

		//要是存在，则判断大小 

		//清除缓存解决每次文件大小不同
		$size = filesize($log);
		clearstatcache();
		if($size <= 1024 * 1024){ //大于1M
			return $log;
		}

		//走到这一行说明>1M
		if(!self::bak()){
			return $log;
		}else{
			touch($log);
			return $log;
		}
	}
}


/*
Log::write('这是一个记录片!');

echo '<h3>程序已执行</h3>';
*/



?>
