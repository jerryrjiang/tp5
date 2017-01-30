<?php
namespace app\index\controller;

use app\index\model\Data as DataModel;
use think\Controller;

class Data extends Controller
{
    // 获取用户数据列表并输出
    public function index()
    {
        $list = DataModel::all();
        dump($list);
    }
}