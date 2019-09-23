<?php

namespace app\common\valid;

use think\Validate;

class Admin extends Validate
{
  protected $rule = [
    'username'  => 'require|unique:users',
    'pwd' => 'require',
    'nickname' => 'require',
    'email' => 'require|email|unique:users',
    'emails' => 'require',
    'catename' => 'require|unique:cate',
    'sort' => 'require'
  ];

  //登陆验证场景
  public function login()
  {
    return $this->only(['username', 'pwd']);
  }
  //注册场景
  public function sceneReg()
  {
    return $this->only(['username', 'pwd', 'nickname', 'email']);
  }
  //添加列表场景
  public function scencCateadd()
  {
    return $this->only(['catename', 'sort']);
  }
  //验证提示
  protected $message  =   [

    'username.require' => '用户名必须',
    'pwd.require' => '密码必须',
    'email.unique' => '邮箱已被注册',
    'emails.require' => '邮箱不能为空',
    'username.unique' => '用户名重复'
  ];
}
