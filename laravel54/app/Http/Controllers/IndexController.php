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
    
    public function user(){
        return view("/user/user_center");
    }
    
    public function apply(){
        
        return view("/user/user_apply");
    }
    
    public function member(){
        return view("/user/user_member");
    }
    
    public function backend(){
        return view("/user/user_backend");
    }

    public function classe(){
        return view("/user/user_class");
    }
}
