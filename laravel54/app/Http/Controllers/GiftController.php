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
use App\Article;
class GiftController extends Controller{

    //主播礼物收入
    public  function  profileGiftIncome(){
        return view('/gift/profileGiftIncome');
    }

    //礼物清单
    public  function profileGiftList(){
        $pa = isset($this->data['pa'])?$this->data['g_id']:1;
        $g_id= isset($this->data['g_id'])?$this->dadta['g_id']:1;
        //计算偏移量
        $res = DB::select("select * from bo_gift join bo_gtype where bo_gift.gt_id= bo_gtype.gt_id ");
        //转换为数组
//        print_r($res);die;
        $res = json_decode(json_encode($res),true);


        //print_r($res);die;
        return view('gift/profileGiftList',['res'=>$res]);

    }

}