<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

    public function CustomerDashboard (){

    	$this->load->view('customer/dashboard');

    }

    public function Rating (){

    	$this->load->view('customer/hi');

    }

}
	
