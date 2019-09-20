<?php

use think\Route;
//后台登陆
Route::group('admin', function () {
    Route::rule('login', 'admin/Index/login');
    //注册
    Route::rule('reg', 'admin/Index/reg');
    //找回密码
    Route::rule('getpwd', 'admin/Index/getpwd');
});
