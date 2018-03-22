<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function index()
	{
		$data = '';
		$this->load->view('modules/auth/login', $data);
	}

	public function doLogin()
	{
		$data['page'] = 'dashboard';
		$this->load->view('modules/layout', $data);
	}

	public function doLogout()
	{
		$this->session->sess_destroy();
        redirect(base_url() . 'auth');
        exit;
	}

	
	
}
