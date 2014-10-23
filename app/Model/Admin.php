<?php
App::uses('AppModel', 'Model');
/**
 * Admin Model
 *
 */
class Admin extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'admin_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'email';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'admin_id' => array(
			'blank' => array(
				'rule' => array('blank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		/*'email' => array(
			'n' => array(
				'rule' => array('n'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),*/

'password'=>array(
	'Not empty'=>array(
		'rule'=>'notEmpty',
		'message'=>'Enter your password'
),
/*	'Match passwords'=>array(
		'rule'=>'matchPasswords',
		'message'=>'Password do not match'
),
*/

),

/*
'password_confirmation'=>array(
'Not empty'=>array(
'rule'=>'notEmpty',
'message'=>'Please confirm your password'

)
),
*/

);

/*
public function matchPassword($data){
	if($data['password'] == $this->data['Admin']['password_confirmation']){
	return true;
}
 $this->invalidate('password_confirmation','Password not match');
	
return false;
}
*/

public function beforeSave(){
	if(isset($this->data['Admin']['password'])){
	$this->data['Admin']['password'] = AuthComponent::password($this->data['Admin']['password']); 
	}
	return true;
}


}
