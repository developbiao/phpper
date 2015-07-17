<?php
/*
*@Describe:UserModel
*@Author:GongBiao
*@Date:2015/07/17
*/

class UserModel extends RelationModel{
	//关联模型查询
	protected $_link = array(
			'Tel' => array( //Tel表示表名
					//'mapping_type' => HAS_ONE,
					'mapping_type' => HAS_MANY,
					'class_name' => 'Tel', //关联模型类
					'foreign_key' => 'user_id', //关联的依据
					'mapping_name' => 'teltable', //自定义映射过来的表名
					'mapping_fields' => 'code', //取指定映射字段
					//'as_fields' => 'code' //取指定映射字段到当前表
				),

			'Class' => array(
					'mapping_type' => BELONGS_TO,
					'class_name' => 'Class', //关联模型类
					'foreign_key' => 'class_id',
					//'mapping_name' => 'telcode', //自定义映射过来的表名
					//'mapping_fields' => 'code', //取指定映射字段
					'as_fields' => 'class_num' //取指定映射字段到当前表
				)
		);
}
?>