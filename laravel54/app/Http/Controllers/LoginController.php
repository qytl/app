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
use App\Http\Requests;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //public $enableCsrfValidation = false; //关闭原有的表单验证类
    public function homepage()
    {
        //查询数据库里的新闻信息
        $news=DB::table('news')->limit(5)->orderBy('creat_time','desc')->get();
        $news=json_decode($news,true);
        return view('Login.log',compact('news'));
    }
    //退出登录
    public function login_out(Request $request)
    {
        //获取
        //$data = $request->session()->all();
        //删除
        $request->session()->flush();
        echo "<script>alert('退出成功');location.href='?r=login/homepage'</script>";
    }
    public function login()
    {
       $log=$_POST;
      // var_dump($log);die;
        $user=DB::table('user')->where(['user_name'=>$log['name']])->first();
      //  print_r($user->user_name);die;
        if($user)
        {

            if($log['pwd']==$user->user_pwd)
            {
                echo"<script>alert('欢迎来到BOBO!')</script>";
                // 存储数据到session...
                session(['user' => $log]);
                // var_dump(session('user') );

                //var_dump($news);die;
                return view('Login.log');
                //return redirect('路由')->send();
            }
            else
            {
                echo"<script>alert('密码不正确,请重新登录!')</script>";
                return view('Login.log');
            }

        }
        else
        {
            echo"<script>alert('用户名不存在,请重新登录!')</script>";
            return view('Login.log');die;
        }

    }
    public function submit()
    {
        $user_msg=$_POST;
        $user=DB::table('user')->where(['user_name'=>$user_msg['name']])->first();
        if($user)
        {
            echo"<script>alert('Sorry,该用户名已存在!')</script>";
            return view('Login/log');die;
        }
        $res=DB::table('user')->insert(['user_name'=>$user_msg['name'],'user_pwd'=>$user_msg['pwd']]);
        if($res)
        {
            echo"<script>alert('欢迎加入BOBO!')</script>";
            return view('Login.log');
        }
        else
        {
            echo"<script>alert('服务器开小差了,请稍后注册!')</script>";
            return view('Login.log');
        }
    }
}

