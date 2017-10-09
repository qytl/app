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
    Route::any('/',ucfirst($ROUTES[0]).'Controller@'.$ROUTES[1]);
}
else
{
    $uri=$_SERVER['REQUEST_URI'];
    $uri=explode('/', $uri);
    if(isset($uri[3])){
        Route::any('/'.$uri[2].'/'.$uri[3], ucfirst($uri[2]).'Controller@'.$uri[3]);
    }else{
        //Route::any('/'.$uri[2], ucfirst($uri[2]).'Controller@index');
        Route::any('/', 'IndexController@index');
}

    /*Route::get('/', function () {
        return view('welcome');
    });*/
}

