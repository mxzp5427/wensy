<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class StoryController extends HomeController {

	//系统首页
    public function index(){
        $this->category = D('Category')->info(40);
        $this->display();
    }
    
    public function lists($p = 1) {
        $Public = A('Public');
        $Public->lists($p);
        $this->display();
    }

    public function detail($id = 0, $p = 1) {
        $Public = A('Public');
        $Public->detail($id, $p);
        $this->display();
    }

}