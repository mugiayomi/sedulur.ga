<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontendController extends CI_Controller {

	public function __construct() {
        parent::__construct();
	}
	
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['page'] = 'home';
		$this->load->view('frontend/layout', $data);
	}

	
}
