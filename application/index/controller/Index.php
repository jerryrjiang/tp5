<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function hello($name = 'thinkphp')
    {
        $data = Db::name('data')->find();
        $this->assign('result', $data);
        return $this->fetch();
    }
}