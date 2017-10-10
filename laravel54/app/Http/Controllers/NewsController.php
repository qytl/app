<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class NewsController
{
    public function meg()
    {
        $id=$_GET['id'];
       // echo $id;die;
        //新闻详情
        $data['news']=DB::table('news')->where(['id'=>$id])->first();
        $data['news']=json_decode(json_encode($data['news']),true);
        //var_dump($news);die;
        //最近新闻
        $data['allnews']=DB::table('news')->limit(5)->orderBy('creat_time','desc')->get();
        $data['allnews']=json_decode($data['allnews'],true);
        //var_dump($data);die;
        //return view('News.meg',compact('data'));
        return view('News.meg',['data'=>$data]);
    }
}











/**
 * NewsController.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/10, 作者: 降省心(QQ:1348550820), 操作:创建
 **/