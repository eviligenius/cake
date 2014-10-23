<?php
Class UsersController extends AppController {

Public $name='Admins'; 

public function beforeFilter(){

	parent::beforeFilter();
$this->Auth->allow('add');
$this->Auth->allow('view');

}



public function login(){
if ( $this->request->is('post')){
if ($this->Auth->login()){
$this->redirect($this->Auth->redirect());
}else {
$this->Session->setFlash('Your username/password combination was incorrect');
//debug($this->Auth->login());
}

}

}


public function logout(){

$this->redirect($this->Auth->logout());

}















}

?>
