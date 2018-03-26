<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_model');
    }

	public function index()
	{
		$data['title'] = 'Daftar Akun';
		$data['page'] = 'register';
		$this->load->view('frontend/layout', $data);
	}

	public function save()
	{
		$data['title'] = 'Daftar ';
		$data['page'] = 'register';
		$this->load->view('frontend/layout', $data);
	}

	
	
	
}
