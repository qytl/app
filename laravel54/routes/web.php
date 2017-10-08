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
$uri=$_SERVER['REQUEST_URI'];
$uri=explode('/', $uri);
if(isset($uri[5]))
{
    Route::any('/'.$uri[4].'/'.$uri[5], ucfirst($uri[4]).'Controller@'.$uri[5]);
}else
{
    Route::any('/'.$uri[4], ucfirst($uri[4]).'Controller@index');
}

Route::get('/', function () {
    return view('welcome');
});


