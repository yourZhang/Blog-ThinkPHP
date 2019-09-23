<?php

namespace app\admin\controller;

use think\Controller;
use think\Session;

class Home extends Controller
{
  //后台首页
  public function index()
  {
    if (Session::get('usernames') == null) {
      return $this->redirect('admin/Index/login');
    }
    return view();
  }
  //退出登录
  public function outlogin()
  {
    Session::delete('usernames');
    return 'login.html';
  }
}
