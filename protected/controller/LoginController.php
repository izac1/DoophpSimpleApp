<?php

class LoginController extends DooController {

	
    protected $data = array();
	
	

	/* This function is called by DooPHP before we run an action */
	public function beforeRun($resouce, $action) {
		// Get the sites base url i.e. http://localhost/ (includes the / at the end)
		$this->data['app_url'] = Doo::conf()->APP_URL;
	}

    
    public function index() {
	$this->data['errorMsg']="";
	$this->data['pagetitle'] = 'login';
        $this->view()->render('login',$this->data);
    }
	 public function login() {
	
		$this->data['pagetitle'] = 'login';
	
        Doo::loadModel('User');
		$u = new User;
		$u->username=$_POST['txt_username'];
		$u->password=md5($_POST['txt_password']);
		
		$ab=$u->get_user();
		if(isset($ab['errorMsg'])){
		$this->data['errorMsg']=$ab['errorMsg'];
		$this->view()->render('login',$this->data);
		}else{
		$this->view()->render('success');
		}
		
		
		

    }

}
?>