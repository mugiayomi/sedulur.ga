<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// isAuthorized();
	}
	
	public function error_404()
	{
		// $data['page'] = 'dashboard';
		$this->load->view('errors/html/error_404');
	}
	
	public function error_500()
	{
		$this->load->view('errors/html/error_404');
	}

	
}
