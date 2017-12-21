<?php

/**
 * Created by PhpStorm.
 * User: noname
 * Date: 12/20/2017
 * Time: 10:54 AM
 */
class GroupSalesController extends AppController
{
    public $name = 'GroupSales';
    public $uses = array('AccountGroup', 'Account');

    public function view()
    {
        $data = $this->AccountGroup->find('all');
        $this->set('data', $data);
    }

    public function ajax(){
        $this->request->onlyAllow('ajax');
        $data = $this->AccountGroup->findById($this->request->data['id']);
        $this->set('data',$data);
        $this->render('ajax_data','ajax');
    }

    public  function edit(){
        if ($this->request->is('post')){
            $this->AccountGroup->id= $this->data['id'];
            $this->AccountGroup->set('group_name',$this->data['gr_name']);
            if(!empty($this->data['account_id']) ){
                $this->AccountGroup->set('account_id',$this->data['account_id']);
            }
            if($this->AccountGroup->validates()){
                $this->AccountGroup->save();
                $this->Session->setFlash('Cập nhật thành công');
                return $this->redirect(array('action'=>'view'));
            }else{
                $errors = $this->AccountGroup->validationErrors;
                $this->Session->setFlash('Cập nhật không thành công ! '.$errors['group_name']['0']);
                return $this->redirect(array('action'=>'view'));
            }
        }
    }

    public function delete($id=null){
        if(isset($id)) {
            $this->AccountGroup->delete($id);
            $this->Session->setFlash('Xóa nhóm thành công');
        }
        $this->redirect(array('action'=>'view'));
    }
    public function add(){
        if ($this->request->is('post')){
            $data['AccountGroup']['group_name']= $this->request->data['gr_name'];
            $this->AccountGroup->set($data);
            if ($this->AccountGroup->validates()){
                $this->AccountGroup->save();
                $this->Session->setFlash('Thêm thành công');
                $this->redirect(array('action'=>'view'));
            }else{
                $errors = $this->AccountGroup->validationErrors;
                $this->Session->setFlash('Thêm dữ liệu không thành công ! '.$errors['group_name']['0']);
            }
            $this->redirect(array('action'=>'view'));
        }
    }
}