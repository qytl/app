<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//路由配置规则
$ROUTES=isset($_GET['r'])?$_GET['r']:false;
    if($ROUTES){
        $ROUTES=explode('/',$ROUTES);
        Route::match(['get','psot'],'/',ucfirst($ROUTES[0]).'Controller@'.$ROUTES[1]);
    }else{
        $uri=$_SERVER['REQUEST_URI'];
        $uri=explode('/', $uri);
        if(isset($uri[3])){
       Route::any('/'.$uri[2].'/'.$uri[3], ucfirst($uri[2]).'Controller@'.$uri[3]);
    }else{
         Route::any('/','IndexController@index');
        }
    };
