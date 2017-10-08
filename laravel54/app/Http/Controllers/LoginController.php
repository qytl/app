<?php
/**
 * LoginController.php
 *
 * ...
 *
 * Copyright (c)2017 http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/9/29, 作者:大乐乐, 操作:创建
 **/


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use yii\web\Request;
use App\Http\Requests;

class LoginController extends Controller
{
    //public $enableCsrfValidation = false; //关闭原有的表单验证类
    public function login()
    {
       $log=$_POST;
       //var_dump($user);die;
        $user=DB::table('user')->where(['user_name'=>$log['name']])->first();
      //  print_r($user->user_name);die;
        if(empty(json_encode($user,true)))
        {
            return view('Login.login');
        }
        else{
            if($log['pwd']==$user->user_pwd)
            {
                echo "登录成功！";
             //  return view('admin.prompt');
                //return redirect('路由')->send();
            }
            else
            {
                return view('Login.login');
            }
        }
    }
    public function submit()
    {
        $user_msg=$_POST;
        $user=DB::table('user')->where(['user_name'=>$log['name']])->first();
        if($user)
        {
            return view('Login/sub');
        }
        $res=DB::table('user')->insert(['user_name'=>$user_msg['name'],'user_pwd'=>$user_msg['pwd']]);
        if($res)
        {
            echo "注册成功";
        }
        else
        {
            echo "注册失败";
        }
    }
}

