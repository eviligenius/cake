<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 */
class Image extends AppModel {

//$Opauth = new Opauth();

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'image_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'image_cover';
       
//star
public $validate = array(
'image_id' => array(
			'blank' => array(
				'rule' => array('blank'),
				'on' => 'create',
			),

),


//moon


	'image_cover'=>array(
	'uploadError'=>array(
			'rule'=>'uploadError',
			'message'=>'Image upload failed.',
			'allowEmpty'=>FALSE,
				),
					'mimeType'=>array(
						'rule'=>array('mimeType',array('image/gif','image/png','image/jpg','image/jpeg')),
					'message'=>'Pls upload only images(gif,png,jpg)',
					'allowEmpty'=>FALSE,
							),
					'fileSize'=>array(
				//	'rule'=>'fileSize','<=','2MB',
					'allowEmpty'=>FALSE,

					),
			'processCoverUpload'=>array(
					'rule'=>'processCoverUpload',
					'message'=>'Unable to process Image Upload',
					'allowEmpt'=>FALSE,
					),
			),
);


	public function processCoverUpload($check=array()){
			if(!is_uploaded_file($check['image_cover']['tmp_name'])){
				return FALSE;
					}
			if (!move_uploaded_file($check['image_cover']['tmp_name'], WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['image_cover']['name'])) {
                return FALSE;
            }


			$this->data[$this->alias]['image_cover']= 'uploads' .DS. $check['image_cover']['name'];
			return TRUE;

			}





}
