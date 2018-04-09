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

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('frontend/home_layout', $data);
	}

	
}
