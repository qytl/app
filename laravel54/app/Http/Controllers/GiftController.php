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

        $res = DB::select("select * from bo_gift join bo_gtype where bo_gift.gt_id= bo_gtype.gt_id ");
        //转换为数组
        $res = json_decode(json_encode($res),true);
        //print_r($res);die;
        return view('gift/profileGiftList',['res'=>$res]);

    }

    //守护明细
    public  function profileGuardDetail(){
        $data = DB::select("select * from bo_income");
        $data = json_decode(json_encode($data),true);
        $res = [];
        $time = [];
        foreach($data as $k=>$v){
            if($k==10)break;
            $res[]=$v['in_money'];
            $time[]=date('d',$v['in_time']);
        }
        $res = implode(',',$res);
        $time = implode('","',$time);
        $time = '"'.$time.'"';
//       print_r($time);die;
        return view('/gift/profileGuardDetail',['data'=>$res,'time'=>$time]);
    }

}