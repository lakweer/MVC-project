<?php

class Packages extends Model {

  public $id,$user_id,$company_name,$package_name,$package_type,$description ,$email,$phone1,$phone2;
  public $amount,$deleted = 0;

  public function __construct(){
    $table = 'packages';
    parent::__construct($table);
    $this->_softDelete = true;
  }

  public static $addValidation = [
    'company_name' => [
      'display' => 'Company Name',
      'required' => true,
      'max' => 155
 ]
  ];

  public function findAllByUserId($user_id, $params=[]){
    $conditions = [
      'conditions' => 'user_id = ?',
      'bind' => [$user_id]
    ];
    $conditions = array_merge($conditions,$params);
    return $this->find($conditions);
  }

  public function displayName(){
    return $this->company_name;
  }

  public function findByIdAndUserId($package_id,$user_id,$params=[]){
    $conditions = [
      'conditions' => 'id = ? AND user_id = ?',
      'bind' => [$package_id, $user_id]
    ];
    $conditions = array_merge($conditions,$params);
    return $this->findFirst($conditions);
  }

}
