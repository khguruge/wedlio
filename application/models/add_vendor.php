<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add_vendor extends CI_Model {

	function InsertUserData(){
		
		$data = array(
			'first_name' => $this->input->post('first_name',TRUE) , 
			'last_name' => $this->input->post('last_name',TRUE) ,
			'vendor_category' => $this->input->post('category',TRUE) ,
			'business_name' => $this->input->post('business_name',TRUE) ,
			'email' => $this->input->post('email',TRUE),
			'features' => $this->input->post('features',TRUE) ,
			'password' => sha1($this->input->post('password'))

		);
		return $this->db->insert('vendors',$data);

	}

}

?>