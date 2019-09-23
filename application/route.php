<?php

use think\Route;
//后台登陆
Route::group('admin', function () {
    Route::rule('login', 'admin/Index/login');
    //注册
    Route::rule('reg', 'admin/Index/reg');
    //找回密码
    Route::rule('getpwd', 'admin/Index/getpwd');
    //后台主页
    Route::rule('home', 'admin/Home/index');
    //退出登录
    Route::rule('outlogin', 'admin/Home/outlogin');
    //栏目列表
    Route::rule('catelist', 'admin/cate/list');
    //栏目添加
    Route::rule('cateadd', 'admin/cate/cateadd');
    //修改列表
    Route::rule('catedel', 'admin/cate/catedel');
    //编辑列表
    Route::rule('cateedit', 'admin/cate/cateedit');
});
