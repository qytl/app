<?php

/* 
 * 豆廷强专属编辑  微信公众号baixh51  专属网址www.carry888.top
 * IT的时代领航 | come on
 * Stick to your dream
 */

namespace App\Http\Controllers;
use DB;
class IndexController extends Controller{
    
//    public function Login(){
//        return view("/login/log");
//    }
    //展示列表
    public function user(){
        $user = DB::table('user_center')->select('u_name','u_age','u_adress','u_sign')->first();
        $user = json_decode(json_encode($user),true);
        return view("/user/user_center",['user'=>$user]);
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
   //用户分类
    public function classe(){
        return view("/user/user_class");
    }
    //直播分类 
    public function type(){
        return view("/index/fenlei");
    }

    public function pwd(){
        $user = DB::table('user')->select('user_name','user_pwd')->first();
        $user = json_decode(json_encode($user),true);
        return view('/user/user_pwd',['user'=>$user]);
    }

    //直播
    public function zb(){
        return view('/index/index_zb');
    }

    //分类
    public function fl(){
        return view('/index/fenlei');
    }

//    //树状图
//    public function szt(){
//
//        $user = DB::table('img')->select('i_id','img_one','img_two','img_three','img_four','img_five','img_six')->first();
//        $user = json_decode(json_encode($user),true);
////        print_r($txt);
//        return view('/user/user_szt',['user'=>$user]);
//    }




}


