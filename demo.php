<?php
$rtn=array(
	array(
		'id'=>1,
		'name'=>'yunqian',
		'type'=>'person',
		'describe'=>'云谦的个人测试账户',
		'accouts'=>array(
			array('id'=>'234',
				'name'=>'yunqian-01',
				'password'=>'taobao123',
				'describe'=>'买东西测试'
			)
		)
	),array(
		'id'=>2,
			'name'=>'yunqian',
			'type'=>'person',
			'describe'=>null,
			'accouts'=>array(
				array('id'=>'234',
					'name'=>'yunqian-01',
					'password'=>'taobao123',
					'describe'=>'买东西测试'
				)
		)
	),array(
		'id'=>3,
		'name'=>'demo',
		'type'=>'project',
		'describe'=>null,
		'accouts'=>array(
			array('id'=>'257',
				'name'=>'demo-01',
				'password'=>'taobao123',
				'describe'=>'买东西测试'
			),array('id'=>'258',
				'name'=>'demo-02',
				'password'=>'taobao123',
				'describe'=>'卖东西测试'
			),array('id'=>'259',
				'name'=>'demo-03',
				'password'=>'taobao123',
				'describe'=>null
			)
		)
	),array(
		'id'=>4,
		'name'=>'daisy',
		'type'=>'project',
		'accouts'=>array(
			array('id'=>'267',
				'name'=>'daisy-01',
				'password'=>'taobao123'
			),array('id'=>'268',
				'name'=>'daisy-02',
				'password'=>'taobao123'
			),array('id'=>'269',
				'name'=>'daisy-03',
				'password'=>'taobao123'
			)
		)
	)
);
echo json_encode($rtn);
?>