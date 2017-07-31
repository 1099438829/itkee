<?php
// +----------------------------------------------------------------------
// | ITKEE [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://www.itkee.cn.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: SuperMan <superman@itkee.cn>//前台路由
// +----------------------------------------------------------------------
use think\Route;

//首页模块
Route::group(['prefix'=>'index/index/','ext'=>'html'],function(){
    Route::get('/','/index');                   //站点首页
});

