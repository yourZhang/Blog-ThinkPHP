<?php

namespace app\admin\controller;

use think\Controller;
use think\Validate;
use think\Db;
use think\Model;

class Index extends controller
{
  //登陆后台
  public function login()
  {

    if (request()->isAjax()) {
      $validate = new Validate([
        'username|用户名'  => 'require',
        'pwd|密码' => 'require'
      ]);
      $data = [
        'username' => input("post.username"),
        'pwd' => input('post.pwd')
      ];
      if (!$validate->check($data)) {
        $this->error($validate->getError());
      }
      $res = Db::name('users')->where($data)->count();
      if ($res == 1) {
        $this->success('登陆成功', 'admin/home/index');
      } else {
        $this->error('用户名或密码不正确');
      }
    }
    return view();
  }

  //注册
  public function reg()
  {
    if (request()->isAjax()) {
      $data = [
        'username' => input('post.username'),
        'pwd' => input('post.pwd'),
        'nickname' => input('post.nickname'),
        'email' => input('post.email')
      ];
      $res = model('Users')->reg($data);
      if ($res == 1) {
        $this->success('注册成功', 'admin/Index/login');
      } else {
        $this->error($res);
      }
    };
    return view('reg');
  }

  //找回密码
  public function getpwd()
  {
    if (request()->isAjax()) {
      $data = input('post.email');
      $res = model('Users')->getpwd($data);
      $this->success($res);
    }
    echo $res;
    return view();
  }
}
