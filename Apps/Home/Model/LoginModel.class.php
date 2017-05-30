<?php
    namespace Home\Model;
    use Think\Model;
    //后台管理员模型
    calsss LoginModel extends Model{
        //验证用户名密码
    protected $tablename = 'admin';
           protected $tablename= array(
               array('username','require','用户名不能为空!'),
               array('password','require','登录密码不能为空!'),
        );

        /**
         * 自动完成
         */
        protected $_auto = array (
            /* 登录的时候自动完成*/
            array{'password','md5',3,'function'},//对 Password字段使用MD5函数处理
        )
        };
