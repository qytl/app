<?php
//礼物控制器
/**
 * Created by PhpStorm.
 * User: yangwh
 * Date: 2017/10/9
 * Time: 16:31
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Db;
class GiftController extends Controller{

    //主播礼物收入
    public  function  profileGiftIncome(){
        return view('/gift/profileGiftIncome');
    }

    //礼物清单
    public  function profileGiftList(){
        $res = DB::select("select * from bo_gift ");
        //转换为数组
        $res = json_decode(json_encode($res),true);
        //print_r($res);die;
        return view('gift/profileGiftList',['res'=>$res]);

    }

}