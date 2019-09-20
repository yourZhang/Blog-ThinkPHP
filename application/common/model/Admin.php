<?php

namespace app\common\model;

use think\Model;
use traits\model\SoftDelete;

class Admin extends Model
{
  //软删除
  use SoftDelete;
  //登录校验
  // public function login($data)
  // {
  //   $rule = [
  //     'username' => 'require',
  //     'pwd' => 'require'
  //   ];
  //   $valuedate = new  \app\common\valid\Admin($rule);
  //   if ($valuedate->scene('login')->check($data)) {
  //     return $valuedate->getError();
  //   }
  //   $res = $this->where($data)->find();
  //   if ($res) {
  //     return 1;
  //   } else {
  //     return '用户名或密码错误';
  //   }
  // }

  //注册测试

}
