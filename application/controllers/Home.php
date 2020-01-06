<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	// Header Items

	public function PlanningTools(){
		$this->load->view('header');
		$this->load->view('header_items/planning_tools');
		$this->load->view('footer');
	}

	public function WeddingVision(){
		$this->load->view('header');
		$this->load->view('header_items/wedding_vision');
		$this->load->view('footer');
	}

	public function LocalVendors(){
		$this->load->view('header');
		// $this->load->view('local_vendor_items/local_vendor_header');
		$this->load->view('header_items/local_vendor');
		$this->load->view('footer');
	}
	public function Gallery(){
		$this->load->view('header');
		$this->load->view('header_items/gallery');
		$this->load->view('footer');
	}

	public function Budgeter(){
		$this->load->view('header');
		$this->load->view('header_items/budgeter');
		$this->load->view('footer');
	}

	public function Login(){
		$this->load->view('header');
		$this->load->view('header_items/login');
		$this->load->view('footer');
	}

	public function CustomerSignUp(){
		$this->load->view('header');
		$this->load->view('header_items/customer_sign_up');
		$this->load->view('footer');
	}

	public function VenderSignUp(){
		$this->load->view('header');
		$this->load->view('header_items/vendor_sign_up');
		$this->load->view('footer');
	}

	// Local Vender Items

	public function WeddingPlanners(){
		$this->load->view('header');
		// $this->load->view('local_vendor_items/local_vendor_header');
		$this->load->view('local_vendor_items/wedding_planners');
		$this->load->view('footer');
	}

	public function ReceptionVenues(){
		$this->load->view('header');
		// $this->load->view('local_vendor_items/local_vendor_header');
		$this->load->view('local_vendor_items/reception_venues');
		$this->load->view('footer');
	}

	public function Videographers(){
		$this->load->view('header');
		$this->load->view('local_vendor_items/videographers');
		$this->load->view('footer');
	}

	public function Photographers(){
		$this->load->view('header');

		$this->load->view('local_vendor_items/photographers');
	
	}

	public function BridalSalons(){
		$this->load->view('header');
		$this->load->view('local_vendor_items/bridal_salons');
		$this->load->view('footer');
	}

	public function DJs(){
		$this->load->view('header');
		$this->load->view('local_vendor_items/djs');
		$this->load->view('footer');
	}

	public function WeddingBands(){
		$this->load->view('header');
		$this->load->view('local_vendor_items/wedding_bands');
		$this->load->view('footer');
	}

	public function Rentals(){
		$this->load->view('header');
		$this->load->view('local_vendor_items/rentals');
		$this->load->view('footer');
	}

}
