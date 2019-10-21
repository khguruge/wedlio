<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sign_up extends CI_Controller {



		public function RegisterCustomer()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customers.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('header');
						$this->load->view('header_items/customer_sign_up');
						$this->load->view('footer');
                }
                else
                {
                        $this->load->model('add_customer');
                        $this->add_customer->InsertUserData();
                }

	}
		public function RegisterVendor()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('category', 'Vendor Category', 'required');
		$this->form_validation->set_rules('business_name', 'Business Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[vendors.email]');
		$this->form_validation->set_rules('features', 'Features of your business', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('header');
						$this->load->view('header_items/vendor_sign_up');
						$this->load->view('footer');
                }
                else
                {
                        $this->load->model('add_vendor');
                        $this->add_vendor->InsertUserData();
                }

	}

}
