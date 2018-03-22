<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        // isAuthorized();
	}
	
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['page'] = 'dashboard';
		$this->load->view('modules/layout', $data);
	}

	
}
