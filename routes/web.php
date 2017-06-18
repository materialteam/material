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

Route::get('/login',function(){
	return view('user.login');
});

Route::get('/',function(){
	return view('warehouse.index');
});

//仓库路由群组
Route::group(['middleware' => 'web','prefix'=>'warehouse'], function () {

	//仓库物资库存列表
    Route::get('/index','admin\WarehouseController@index'); 

	//仓库物资清单列表页
    Route::get('/lists','admin\WarehouseController@lists');

    //仓库入库
    Route::get('/storage','admin\WarehouseController@storage');

    //仓库入库记录
    Route::get('/inRecord','admin\WarehouseController@inRecord');

    //仓库出库记录
    Route::get('/outRecord','admin\WarehouseController@outRecord');
});

//站点路由群组
Route::group(['middleware' => 'web','prefix'=>'site'],function(){
    
    //站点清单查看修改
    Route::get('/index','admin\SiteController@index');

    //站点清单上传
    Route::get('/import','admin\SiteController@import');

    //站点操作记录
    Route::get('/record','admin\SiteController@record');

    //站点列表管理
    Route::get('/manage','admin\SiteController@manage');
});

//角色路由群组
Route::group(['middleware' => 'web','prefix'=>'user'],function(){
	//登录
	Route::get('/login','admin\UserController@login');
	Route::post('/doLogin','admin\UserController@doLogin');
});
