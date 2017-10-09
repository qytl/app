<?php

/* 
 * 豆廷强专属编辑  微信公众号baixh51  专属网址www.carry888.top
 * IT的时代领航 | come on
 * Stick to your dream
 */

namespace App\Http\Controllers;

class IndexController extends Controller{
    public function login(){        return view("/index/index");
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
   //用户分类
    public function classe(){
        return view("/user/user_class");
    }
    //直播分类 
    public function type(){
        return view("/index/fenlei");
    }

    //主播信息
    public  function ProfileInfo(){
        return view("/user/ProfileInfo");
    }

     //违规查询
    public  function ProfileFreezeAppeal(){
        return view("/user/ProfileFreezeAppeal");
    }

    //主播收入
    public  function MyAccount(){
        return view("/user/MyAccount");
    }

    //礼物清单
    public  function profileGiftList(){
        return view("/user/profileGiftList");
    }

    //签约申请
    public  function ProfileSign(){
        return view("/user/ProfileSign");
    }

    //我的粉丝
    public  function ProfileFans(){
        return view("/user/ProfileFans");
    }



}
