<?php
/**
 * Created by PhpStorm.
 * User: qin
 * Date: 2017/8/11
 * Time: 19:09
 */

namespace Home\Controller;


class NoticeController extends HomeController
{
    public function index(){
        $model = M('document');
        $list = $model->select();
        $this->assign('list', $list);
        $this->display();
    }

    public function detail(){

    }
}