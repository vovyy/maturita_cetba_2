<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
	       parent::__construct();

	         $this->load->model('Cetba_model');
	         $this->load->library('ion_auth');
	         if (!$this->ion_auth->logged_in())
	         {
	         	redirect('auth/login', 'refresh');
	         }
	    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
