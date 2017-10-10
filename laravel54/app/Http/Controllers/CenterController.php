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
        $user = DB::table('user')->select('id','user_name','user_pwd')->first();
        $user = json_decode(json_encode($user),true);
        return view('/user/user_pwd',['user'=>$user]);
    }

    public function aa(){
        $post = $_POST;
//        print_r($post);die;
        $id = array('user_pwd'=>$post['user_pwd']);
        $re = DB::table('user')->where('id',$post['id'])->update($id);
        if ($re){
            echo '<script>alert("修改成功");location.href="/user/user_center"</script>';
        }else{
            echo '<script>alert("修改失败");location.href="/user/user_pwd"</script>';
        }
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

    public function subscr(){
        return view('/user/user_subscr');
    }


}







