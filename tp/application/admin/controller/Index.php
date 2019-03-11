<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    //login页面
    public function index()
    {
        return $this->fetch('houtai/login');
    }
    //判断用户名
    public function houtai()
    {
        $name=$_POST['name'];
        $db=Db::name('zu3_user');
        $res=$db->where('name',$name)->find();
        if($res){
            return 1;
        }else{
            return 2;
        }
    }
    //判断密码
    public function shouye()
    {
        $db=Db::name('zu3_user');
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $res=$db->where('name',$name)->find();
        if($res){
            if($pass==$res['pass']){
                session('username',$name);
                return 3;
            }else{
                return 4;
            }
        }
    }
    //首页
    public function index2()
    {
        return $this->fetch('houtai/index');
    }

    public function index_v148b2()
    {
        return $this->fetch('houtai/index_v148b2');
    }
}