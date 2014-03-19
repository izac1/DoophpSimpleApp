<?php
Doo::loadCore('db/DooModel');
class User extends DooModel {
    public $id;
    public $username;
    public $password;
	public $name;
	

    public $_table = 'user';
    public $_primarykey = 'id';
    public $_fields = array('id', 'username', 'password', 'name');
	
	public function get_user(){
	if(!$this->username or !$this->password){
	return array('errorMsg'=>"At least one field was empty");
	}else{
	$a=Doo::db()->find( $this, array('limit'=>1));
	if($a){
		return true; 
	
	}else return array('errorMsg'=>"no user or wrong pass");
	}
	}
	function __construct(){
parent::$className = __CLASS__;
}
	
}
?>