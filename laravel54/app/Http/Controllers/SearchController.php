<?php
/**
 * SearchController.php
 *
 * ...
 *
 * Copyright (c)2017 http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/9/27, 作者:大乐乐, 操作:创建
 **/


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class SearchController
{
    //public $layout=false; //去除原有样式
    public $enableCsrfValidation = false; //关闭原有的表单验证类
    public function search()
    {   // echo "11";die;
        $search=$_POST['hsk'];

       // dd($search);die;

        //记载浏览记录
        //$sou = DB::table('search')->whereRaw('search = ?',[$search])->pluck('search','search_times');

        $sou=DB::select("select * from bo_search where search=:search",['search'=>$search]);
       //var_dump($sou);die;
      // $so=json_decode($sou,true);
        if(empty($sou))
        {
            $res=DB::insert('insert into bo_search(search) values(?)',[$search]);
            if($res)
            {
                echo "1";
               // 查询符合的数据
               $data= DB::table('theme')
                    ->where('theme', 'like','%'. $search.'%')
                    ->get();
               // $data=DB::select("select * from bo_theme where theme like:search",['search'=>$search]);
                //dd($data);
                return view('Search.search', ['users' => $data]);
            }
            else{
                echo "搜孫失敗";
            }

        }
        else{
            $times=$sou[0]->search_times;
           $res=DB::update('update bo_search set search_times = ? where search = ?',[$times+1,$search]);
            if($res)
            {
                echo "2";
                $data= DB::table('theme')
                    ->where('theme', 'like','%'. $search.'%')
                    ->get();
              //  dd($data);
                return view('Search.search', ['users' => $data]);
            }
            else
            {
                echo "添加失敗";
            }

        }


    }
}

