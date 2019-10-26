<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

        public function CustomerLogin(){
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
         $this->form_validation->set_rules('password', 'Password', 'required');
         if ($this->form_validation->run() == FALSE)
         {
                $this->load->view('header');
                $this->load->view('header_items/login');
                $this->load->view('footer');
        }
         else {
             $this->load->model('login_model');

             $result = $this->login_model->CustomerLogin();

             if ($result != false){
                 $user_data = array(
                     'id'=>$result->id,
                     'first_name'=>$result->first_name,
                     'last_name'=>$result->last_name,
                     'email'=>$result->email,
                     'loggedin'=>TRUE);
                 
                 print_r($_SESSION);
                 $this->session->set_userdata($user_data);
                 $this->session->set_flashdata('msg','Welcome');
                 redirect('customer/CustomerDashboard');
             }else{
                $this->session->set_flashdata('msg','Wrong Username And Password. Please Try Again.');
                 redirect('Home/Login');
             }
         }
    }

}
	
