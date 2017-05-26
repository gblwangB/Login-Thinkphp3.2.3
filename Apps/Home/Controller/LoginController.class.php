<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    /*
     *
     * login
     */

    //登录
    public function login(){
        if (IS_POST) {
            // 实例化Login对象
            $login = D('admin');

            // 自动验证 创建数据集
            if (!$data = $login->create()) {
                // 防止输出中文乱码
//                header("Content-type: text/html; charset=utf-8");
                exit($login->getError());
            }

            // 组合查询条件
            $where = array();
            $where['useaname'] = $data['username'];
            $where['password'] = $data['password'];
            $result = $login->where($where)->field('username,password')->find();

            // 验证用户名 对比 密码
            if ($result && $result['password'] == $result['password']) {
                // 存储session
                session('uid', $result['userid']);          // 当前用户id
                session('nickname', $result['nickname']);   // 当前用户昵称
                session('username', $result['username']);   // 当前用户名
                session('login_time', $result['login_time']);   // 上一次登录时间
                session('login_ip', $result['login_ip']);       // 上一次登录IP

                 //更新用户登录信息
                $where['userid'] = session('uid');
                M('admin')->where($where)->setInc('loginnum');   // 登录次数加 1
                M('admin')->where($where)->save($data);   // 更新登录时间和登录ip
                $this->success('登录成功,正跳转至系统首页..', U('Index/index'));
            } else {
                $this->error('登录失败,帐号或者密码错误!',U('Login/login'));
            }
        } else {
            $this->display();
        }
    }
}