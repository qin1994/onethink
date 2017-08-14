<?php
/**
 * Created by PhpStorm.
 * User: qin
 * Date: 2017/8/11
 * Time: 16:06
 */

namespace Home\Controller;


class RepairsController extends HomeController
{
    public function index()
    {
        if (IS_POST) {
            $Repair = D('repairs');
            $data = $Repair->create();
            if ($data) {
                $id = $Repair->add();
                if ($id) {
                    $this->success('新增成功', U('index'));
                    //记录行为
                    action_log('update_repair', 'repair', $id, UID);
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($Repair->getError());
            }
        } else {

            $this->meta_title = '新增报修';
            $this->display();
        }
    }

}