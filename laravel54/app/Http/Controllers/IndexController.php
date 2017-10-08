<?php

/* 
 * 豆廷强专属编辑  微信公众号baixh51  专属网址www.carry888.top
 * IT的时代领航 | come on
 * Stick to your dream
 */
namespace App\Http\Controllers;

class IndexController extends Controller{
    
    public function Login(){
        return view("/index/index");
    }
    //展示列表
    public function user(){
        return view("/user/user_center");
    }
    //主播申请
    public function apply(){
        
        return view("/user/user_apply");
    }
    //会员管理
    public function member(){
        return view("/user/user_member");
    }
    //后台管理员
    public function backend(){
        return view("/user/user_backend");
    }
   //分类
    public function classe(){
        return view("/user/user_class");
    }

}
