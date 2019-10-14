<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sign_up extends CI_Controller {

	public function RegisterUser()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('sign_up');
                }
                else
                {
                        $this->load->model('add_users');
                        $this->add_users->InsertUserData();
                }

	}

}
