<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

    public function CustomerDashboard (){
       $this->load->view('customer/dashboard');
    }

}
	
