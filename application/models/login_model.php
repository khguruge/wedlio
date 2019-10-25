<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

	function CustomerLogin(){
		
			$email = $this->input->post('email');
			$password = sha1($this->input->post('password'));
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$respond = $this->db->get('customers');
			if ($respond->num_rows()==1){
				return $respond->row(0);
			}else{
				return false;
			}




			}

}

?>