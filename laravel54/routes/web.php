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
//配置路由规则
$ROUTES=isset($_GET['r'])?$_GET['r']:false;
if($ROUTES)
{
    $ROUTES=explode('/',$ROUTES);
    Route::match(['get','post'],'/',ucfirst($ROUTES[0]).'Controller@'.$ROUTES[1]);
}
else
{
    $uri=$_SERVER['REQUEST_URI'];
    $uri=explode('/', $uri);
    if(isset($uri[2])){
        Route::any('/'.$uri[1].'/'.$uri[2], ucfirst($uri[1]).'Controller@'.$uri[2]);
    }else{
        //Route::any('/'.$uri[1], ucfirst($uri[1]).'Controller@index');
        Route::any('/', 'LoginController@homepage');
    }

    /*Route::get('/', function () {
        return view('welcome');
    });*/
}
