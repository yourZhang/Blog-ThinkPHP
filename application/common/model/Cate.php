<?php

namespace app\common\model;

use think\Model;
use traits\model\SoftDelete;
use think\Validate;

class Cate extends Model
{
  //软删除
  use SoftDelete;
  protected $deleteTime = 'delete_time';
  //添加
  public function add($data)
  {
    $validate = new Validate([
      'catename|栏目名'  => 'require|unique:cate',
      'sort|排序' => 'require'
    ]);
    if (!$validate->check($data)) {
      return $validate->getError();
    }
    $res = $this->save($data);
    if ($res) {
      return 1;
    } else {
      return 0;
    }
  }
  //删除
  public function catedel($data)
  { }
}
