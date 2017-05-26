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
            }
