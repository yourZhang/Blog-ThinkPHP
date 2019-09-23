<?php

namespace app\common\model;

use think\Model;
use traits\model\SoftDelete;

class Users extends Model
{
  //软删除
  use SoftDelete;

  //注册测试
  public function reg($data)
  {
    //创建验证器
    $val = new \app\common\valid\Admin();
    if (!$val->scene('reg')->check($data)) {
      return $val->getError();
    }
    $res = $this->save($data);
    if ($res) {
      mailto($data['email'], '欢迎入住', '恭喜注册成功');
      return 1;
    } else {
      return '注册失败';
    }
  }

  //找回密码
  public function getpwd($data)
  {
    $res = $this->where('email', $data['emails'])->field('username,pwd')->select();
    if (count($res) > 0) {
      mailto($data['emails'], '找回密码', '您的密码:' . $res[0]->pwd . '您的帐号' . $res[0]->username);
      return 1;
    } else {
      return 0;
    }
  }
}
