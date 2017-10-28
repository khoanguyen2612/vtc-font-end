<?php
App::uses('AppController', 'Controller');

class InfocartsController extends AppController
{
    public $uses = array('Account', 'Contact');

    public function beforeFilter()
    {
        parent::beforeFilter();
        if (!$this->Auth->loggedIn()) {
            return $this->redirect($this->Auth->loginAction);
        }
    }

    public function register()
    {
        $id_acc = $this->Auth->User('id');
        $record_personal = $this->Contact->find('all', array(
            'conditions' => array(
                'account_id' => $id_acc,
                'role_flg' => 'I',
                'contact_type' => '1'
            ),
            'fields' => array('id', 'role_flg', 'lname')
        ));
        $record_organizion = $this->Contact->find('all', array(
            'conditions' => array(
                'account_id' => $id_acc,
                'role_flg' => 'R',
                'contact_type' => '1'
            ),
            'fields' => array('id', 'role_flg', 'lname')
        ));
        $this->set(array(
            'record_personal' => $record_personal,
            'record_organizion' => $record_organizion,
            'title_for_layout' => 'Điền thông tin'
        ));

        if ($this->request->is('post')) {

            if (!empty($this->data['Contact']['name'])) {

                $data = array(
                    'lname' => $this->data['Contact']['name'],
                    'ownerid' => $this->data['Contact']['ownerid'],
                    'street1' => $this->data['Contact']['street'],
                    'phone' => $this->data['Contact']['phone'],
                    'email' => $this->data['Contact']['email'],
                    'account_id' => $id_acc,
                    'contact_type' => '1',
                    'role_flg' => 'I',
                    'sex' => $this->data['Contact']['sex_cn']
                );
                $this->Contact->set($this->data);
                if ($this->Contact->validate_cn()) {
                    $this->Contact->save($data);
                    return $this->redirect(array('controller' => 'Payment', 'action' => 'paychoice'));
                }else{
                  $this->set('Errors',$this->Contact->validationErrors);
              }
          } else
          if (!empty($this->data['Contact']['name_tc'])) {
            $data = array(
                array(
                    'lname' => $this->data['Contact']['name_tc'],
                    'ownerid' => $this->data['Contact']['ownerid_tc'],
                    'street1' => $this->data['Contact']['street_tc'],
                    'phone' => $this->data['Contact']['phone_tc'],
                    'email' => $this->data['Contact']['email_tc'],
                    'account' => $id_acc,
                    'role_flg' => 'R',
                    'contact_type' => '1',
                    'account_id' => $id_acc,
                ),
                array(
                    'lname' => $this->data['Contact']['mn_name'],
                    'ownerid' => $this->data['Contact']['mn_ownerid'],
                    'street1' => $this->data['Contact']['mn_street'],
                    'phone' => $this->data['Contact']['mn_phone'],
                    'email' => $this->data['Contact']['mn_email'],
                    'role_flg' => 'R',
                    'contact_type' => '2',
                     'account_id' => $id_acc,
                     'organization' => $this->data['Contact']['name_tc']
                ),
                array(
                    'lname' => $this->data['Contact']['bill_name'],
                    'ownerid' => $this->data['Contact']['bill_ownerid'],
                    'street1' => $this->data['Contact']['bill_street'],
                    'phone' => $this->data['Contact']['bill_phone'],
                    'email' => $this->data['Contact']['bill_email'],
                    'role_flg' => 'R',
                    'contact_type' => '4',
                     'account_id' => $id_acc,
                     'organization' => $this->data['Contact']['name_tc']
                )
            );

            $this->Contact->set($this->data);

            if ($this->Contact->validate_tc()) {
              if(  $this->Contact->saveMany($data))
                $this->redirect(array('controller' => 'payment', 'method' => 'paychoice'));

        }else{
         $this->set('Errors',$this->Contact->validationErrors);
     }
 }

}

}

public function getSaveRecord()
{
    $data = $this->Contact->findById($_POST['record_id']);
    if (!empty($data)) {
        $data['status'] = '1';
    } else {
        $data['status'] = '0';
    }
    header('Content-Type: application/json');
    echo json_encode($data);
    $this->autoRender = false;
}

public function getInfoAccount()
{
    $id_acc = $this->Auth->User('id');
    $data = $this->Account->findById($id_acc);
    pr($data);
    header('Content-Type: application/json');
    echo json_encode($data);
    $this->autoRender = false;
}
}

?>
