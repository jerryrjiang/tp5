<?php
namespace app\index\controller;

use think\Controller;
use think\Config;
use think\Request;

class Login extends Controller
{
    // 获取用户数据列表并输出
    public function index()
    {
        //资源路径赋值
        $this->assign('js_path', Config::get('web_root').'js');
        return $this->fetch();
    }
    //验证登陆
    public function login(Request $request)
    {
        $username = $request->post('username');
        $password = $request->post('password');
        if($username!="admin" || $password!="admin")
        {
            $this->assign('css_path', Config::get('web_root').'css');
            return $this->fetch('error');
        }
        else
        {
            return $this->fetch('dashboard/index');
        }
    }
}