<?php
/**
 * Created by PhpStorm.
 * User: qin
 * Date: 2017/8/10
 * Time: 16:07
 */

namespace Home\Model;


use Think\Model;

class RepairsModel extends Model
{
    protected $_validate = array(
        array('name', 'require', '姓名不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
        array('tel', 'require', '电话不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
        array('question', 'require', '问题不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
    );

    protected $_auto = array(
        array('sn', 'php'.NOW_TIME, self::MODEL_INSERT),
        array('time', NOW_TIME, self::MODEL_BOTH),
        array('status', '1', self::MODEL_BOTH),
    );
}