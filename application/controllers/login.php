<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('general/m_login');
	}
	function index(){
		$this->login();
	}
	function login(){
		$this->load->view('login/index');
	}
	function do_login(){
		if($_POST){
			$login_status = $this->m_login->do_login($_POST);
			if($login_status == 0){
				$this->index();
			}
			else {
				//echo $login_status[0]['username'];exit;
				//$_SESSION['chamber']['username']=$login_status[0]['username'];//echo $_SESSION['chamber']['username'];exit;
				$user = array(
                   'username'  => $login_status[0]['username'],
                   'level'     => $login_status[0]['level'],
                   'logged_in' => TRUE
               	);
				$this->session->set_userdata($user);
				//echo "username:";echo $this->session->userdata('username');exit;
				//$_SESSION['chamber']['level']=$login_status[0]['level'];
				redirect('home');
			}
		}
	}
	function do_logout(){
		
	}
}