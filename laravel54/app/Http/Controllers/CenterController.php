<?php

/**
 * User: 豆廷强
 * Website: www.carry888.top
 * QQ: 178702482
 * Date: 2017/10/9
 * Time: 10:08
 */

namespace App\Http\Controllers;
use DB;
class CenterController extends Controller{
    public function user_center(){

        $user = DB::table('user_center')->select('u_id','u_name','u_age','u_adress','u_sign')->first();
        $user = json_decode(json_encode($user),true);
//        print_r($user);die;
        return view('/user/user_centers',['user'=>$user]);
      //var_dump($user);
    }

    public function pwd(){
        return view('/user/user_pwd');
    }

    public function upd(){
        $param = $_GET;
        //print_r($param);die;
        $data =array('u_name'=> $param['u_name']);
        $res = DB::table('user_center')->where('u_id',$param['id'])->update($data);
        if($res){
            echo "恭喜您获得新的昵称";
        }else{
            echo "您只可以更改用户名哦,谢谢";
        }
    }

    public function maintain(){
        return view('/user/user_maintain');
    }


}







