<?php

namespace app\admin\controller;

use think\Controller;
use think\Db;

class Cate extends Controller
{
  //栏目列表
  public function list()
  {
    $res = Db::name('cate')->order('sort', 'asc')->where(['delete_time' => 'null'])->select();
    $viewdata = [
      'cates' => $res
    ];
    $this->assign($viewdata);
    return view();
  }
  //栏目添加
  public function cateadd()
  {
    if (request()->isAjax()) {
      $data = [
        'catename' => input('post.catename'),
        'sort' => input('post.sort')
      ];
      $res = model('Cate')->add($data);
      if ($res == 1) {
        $this->success('添加成功', 'admin/cate/list');
      } else {
        $this->error($res);
      }
    }
    return view();
  }

  //删除

  public function catedel()
  {
    $data = [
      'id' => input('post.id')
    ];
    $res = Db::name('cate')->where($data)->update(['delete_time' => 1]);
    $this->success('删除成功', 'admin/cate/list');
  }
}
