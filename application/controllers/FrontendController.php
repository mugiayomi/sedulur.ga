<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontendController extends CI_Controller {

	public function __construct() {
        	parent::__construct();
	}
	
	public function index()
	{
		$data['title'] = 'Beranda';
		$data['page'] = 'home';
		$this->load->view('frontend/home_layout', $data);
	}

	
}
