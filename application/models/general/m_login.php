<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Login extends CI_Model {
	function do_login($user_data){
		//echo $user_data['password'];echo md5($user_data['password']);
		$query = "SELECT username, level from USER where username='".$user_data['username']
			."' and password='".md5($user_data['password'])."'";
		$result = $this->db->query($query);
		//echo $query;exit;
		if($result->num_rows()==0) return 0;
		else return $result->result_array();
	}
}
?>