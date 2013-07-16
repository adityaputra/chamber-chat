<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		//session_start();
	}
	public function index()
	{
		//echo "sip";exit;
		//print_r($_SESSION);exit;
		//session_unset();
		//session_destroy();
		//echo"cek session:"; echo $this->session_check();exit;
		if($this->session_check()==0){
			$this->load->helper('url');
			redirect('login');
		}
		else if ($this->session_check()==1){
			$this->load->view('home');
		}
	}
	
	public function session_check(){
		$user = $this->session->userdata('username');
		//echo "jos"; print_r($user);
		if(empty($user)){
			
			return 0;
		}
		else return 1;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */