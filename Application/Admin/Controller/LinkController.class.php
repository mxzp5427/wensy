<?php
namespace Admin\Controller;

/**
 * 友情链接管理控制器
 * @author 墨羲 <moxi@adagl.com>
 */

class LinkController extends AdminController {

    /**
     * 链接列表
     * @author 墨羲 <moxi@adagl.com>
     */
    public function index(){
		
        $list = M('Link')->select();

        $this->assign('list', $list);
        $this->meta_title = '友情链接管理';
        $this->display();
    }

    /**
     * 添加Banner
     * @author 墨羲 <moxi@adagl.com>
     */
    public function add(){
        if(IS_POST){
            $Link = D('Link');
            $data = $Link->create();
			
            if($data){
                $id = $Link->add();
                if($id){
                    $this->success('新增成功', U('index'));
                    //记录行为
                    action_log('update_link', 'Link', $id, UID);
                } else {
                    $this->error('新增失败');
                }
            } else {
                $this->error($Link->getError());
            }
        } else {          
            $this->meta_title = '新增链接';
            $this->display('edit');
        }
    }

    /**
     * 编辑频道
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function edit($id = 0){
        if(IS_POST){
            $Link = D('Link');
            $data = $Link->create();
            if($data){
                if($Link->save()){
                    //记录行为
                    action_log('update_link', 'Link', $data['id'], UID);
                    $this->success('编辑成功', U('index'));
                } else {
                    $this->error('编辑失败');
                }

            } else {
                $this->error($Link->getError());
            }
        } else {
            $info = array();
            /* 获取数据 */
            $info = M('Link')->find($id);

            if(false === $info){
                $this->error('获取配置信息错误');
            }

            $this->assign('info', $info);
            $this->meta_title = '编辑链接';
            $this->display();
        }
    }

    /**
     * 删除频道
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function del(){
        $id = array_unique((array)I('id',0));

        if ( empty($id) ) {
            $this->error('请选择要操作的数据!');
        }

        $map = array('id' => array('in', $id) );
        if(M('Link')->where($map)->delete()){
            //记录行为
            action_log('update_链接', 'Link', $id, UID);
            $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }

    /**
     * 导航排序
     * @author huajie <banhuajie@163.com>
     */
    public function sort(){
        if(IS_GET){
            $ids = I('get.ids');

            //获取排序的数据
           
            $list = M('Link')->field('id,title')->order('sort asc,id asc')->select();

            $this->assign('list', $list);
            $this->meta_title = '链接排序';
            $this->display();
        }elseif (IS_POST){
            $ids = I('post.ids');
            $ids = explode(',', $ids);
            foreach ($ids as $key=>$value){
                $res = M('Link')->where(array('id'=>$value))->setField('sort', $key+1);
            }
            if($res !== false){
                $this->success('排序成功！');
            }else{
                $this->eorror('排序失败！');
            }
        }else{
            $this->error('非法请求！');
        }
    }
	
	
	public function setStatus() {
		$id = I('ids',0);
		$status = I('status');

        $map['id'] = $id;
		$data['status'] = $status;
        if(M('Link')->where($map)->save($data)){           
            $this->success('更新成功');
        } else {
            $this->error('更新失败');
        }		
	}
}
