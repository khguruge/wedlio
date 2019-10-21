<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add_vendor extends CI_Model {

	function InsertUserData(){
		
		$data = array(
			'first_name' => $this->input->post('first_name',TRUE) , 
			'last_name' => $this->input->post('last_name',TRUE) ,
			'email' => $this->input->post('email',TRUE),
			'password' => sha1($this->input->post('password'))

		);
		$this->db->insert('users',$data);
		echo "Vendor Registered";

	}

}

?>