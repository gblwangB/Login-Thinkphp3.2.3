<?php
return array(
	//'配置项'=>'配置值'
    // 添加数据库配置信息
    'DB_TYPE'=>'mysql',// 数据库类型
    'DB_HOST'=>'127.0.0.1',// 服务器地址
    'DB_NAME'=>'thinkphp',// 数据库名
    'DB_USER'=>'root',// 用户名
    'DB_PWD'=>'1122080',// 密码
    'DB_PORT'=>8889,// 端口
    'DB_PREFIX'=>'think_',// 数据库表前缀
    'DB_CHARSET'=>'utf8',// 数据库字符集
    // 添加session配置信息
    'SESSION_OPTIONS'=>array(
    'type'=> 'db',//session采用数据库保存
    'expire'=>1440,//session过期时间，如果不设就是php.ini中设置的默认值
    'SESSION_TABLE'=>'think_session', //必须设置成这样，如果不加前缀就找不到数据表，这个需要注意
    )
);
