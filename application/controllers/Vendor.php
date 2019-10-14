<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

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
	public function index()
	{
		$this->load->view('vendor_home');
	}
	public function WeddingPlanners()
	{
		$this->load->view('wedding_planners');
	}
	public function ReceptionVenues()
	{
		$this->load->view('reception_venues');
	}
	public function Videographers()
	{
		$this->load->view('videographers');
	}
	public function Photographers()
	{
		$this->load->view('photographers');
	}
	public function BridalSalons()
	{
		$this->load->view('bridal_salons');
	}
	public function DJs()
	{
		$this->load->view('djs');
	}
	public function WeddingBands()
	{
		$this->load->view('wedding_bands');
	}
	public function Rentals()
	{
		$this->load->view('rentals');
	}
	public function Login()
	{
		$this->load->view('login');
	}
	public function SignUp()
	{
		$this->load->view('sign_up');
	}

}
