<?php
header('Content-Type:text/html; charset=utf-8');

class Demo{

private $onobj_position = array( //on objcet坐标
			array('x'=>1, 'y'=>2, 'z'=>4, 'obj_type'=>2, 'obj_id'=>1),
			array('x'=>2, 'y'=>3, 'z'=>8, 'obj_type'=>3, 'obj_id'=>4),
			array('x'=>3, 'y'=>5, 'z'=>1, 'obj_type'=>4, 'obj_id'=>2),
			array('x'=>4, 'y'=>7, 'z'=>7, 'obj_type'=>5, 'obj_id'=>5)
	);

private $release_position = array( //objcet 释放坐标
			array('next_x'=>4, 'next_y'=>5, 'next_z'=>6),
			array('next_x'=>1, 'next_y'=>5, 'next_z'=>7),
			array('next_x'=>5, 'next_y'=>9, 'next_z'=>8),
			array('next_x'=>3, 'next_y'=>7, 'next_z'=>2)
	);

private static $current_position = array('x'=>3, 'y'=>8, 'z'=>9, 'flag'=>0); //初始化的出生坐标

//$rand_index = rand(0, count($onobj_position) - 1);  //rand index

public function move(){

$rand_index = rand(0, count($this->onobj_position) - 1);  //rand index

if(self::$current_position['flag'] == 0){
	self::$current_position['x'] = self::$current_position['x'] + rand(-5, 5);
	self::$current_position['y'] = self::$current_position['y'] + rand(-5, 5);
	self::$current_position['z'] = self::$current_position['z'] + rand(-5, 5);
	//next poistion
	self::$current_position['next_x'] = $this->onobj_position[$rand_index]['x'];
	self::$current_position['next_y'] = $this->onobj_position[$rand_index]['y'];
	self::$current_position['next_z'] = $this->onobj_position[$rand_index]['z'];
	self::$current_position['flag'] = 1; //next next position

	//do move...
	$movement = array();
			$movement['x'] = self::$current_position['x'];
            $movement['y'] = self::$current_position['y'];
            $movement['z'] = self::$current_position['z'] ;
            $movement['vx'] = 0;
            $movement['vy'] = 278.247223;
            $movement['vz'] = 0;
            $movement['cmd'] = 'GroupRoom.robotMove';

            return $movement;

}
	
	//走下一次next next 正确的objcet坐标
if(self::$current_position['flag'] == 1){
		self::$current_position['x'] = self::$current_position['next_x'];
		self::$current_position['y'] = self::$current_position['next_y'];
		self::$current_position['z'] = self::$current_position['next_z'];
		self::$current_position['flag'] = 0;

		 		$movement['object_type'] = $this->onobj_position[$rand_index]['obj_type'];
                $movement['object_id'] = $this->onobj_position[$rand_index]['obj_id'];
                $movement['duration'] = 0;
                $movement['next_pos_x'] = self::$current_position['x'];
                $movement['next_pos_y'] = self::$current_position['y'];
                $movement['next_pos_z'] = self::$current_position['z'];
                $movement['next_pos_vx'] = 0;
                $movement['next_pos_vy'] = 0;
                $movement['next_pos_vz'] = 0;
                $movement['cmd'] = 'GroupRoom.onObject';

                return $movement;
	}

	}

}



/*
	echo '<pre>';
	print_r(move($onobj_position, $current_position));
	echo '</pre>';
	*/

$demo = new Demo();

for($i=1; $i<=20; $i++){
	//echo '<h3>第', $i, '次move</h3>';
	echo '<hr>';
	echo '<pre>';
	print_r($demo->move());
	echo '</pre>';
}

echo '<h3>Program runing is ok!</h3>';

exit;


/*
echo '<pre>';
print_r($demo->current_position);
echo '</pre>';
exit;
*/





//随机取下标




echo '<h3>start坐标:</h3>';
echo '<pre>';
print_r($onobj_position[$rand_index]);
echo '</pre>';

echo '<hr />';
echo '<h3>释放坐标</h3>';
echo '<pre>';
print_r($release_position[$rand_index]);
echo '</pre>';

?>
