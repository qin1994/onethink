<?php
/**
 * Created by PhpStorm.
 * User: qin
 * Date: 2017/8/14
 * Time: 15:15
 */

namespace Home\Controller;

use EasyWeChat\Foundation\Application;

require "./vendor/autoload.php/";

class WechatController extends HomeController
{
    public function index(){
        $options = [
            'debug'  => true,
            'app_id' => 'wx77af4d06596992e7',
            'secret' => '0dd3a9b3e90339647f4591db2436f4a2',
            'token'  => 'property',
            // 'aes_key' => null, // 可选
            'log' => [
                'level' => 'debug',
                'file'  => '/www/wwwroot/Onethink/easywechat.log', // XXX: 绝对路径！！！！
            ],
            //...
        ];
        $app = new Application($options);
        $response = $app->server->serve();
// 将响应输出
        $response->send(); // Laravel 里请使用：return $response;
    }
}