<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

	public function index()
	{
        if ($this->session->has_userdata('logged_in')) {
            redirect(base_url() . 'profile', 'refresh');
            exit;
        }

		$data['title'] = 'Login';
        $data['page'] = 'login';

        $data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$this->load->view('frontend/layout', $data);
	}

	public function doLogin()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
            redirect(base_url() . 'auth');
            exit;
        }

        $data = $this->input->post();

        $userdata = $this->user_model->get_user_by_username($data['email']);
        if (empty($userdata)) {
            $this->session->set_flashdata('message', 'Kombinasi Username atau Password Salah');
            redirect(base_url() . 'auth');
            exit;
        }

        if (password_verify($data['password'], $userdata->password)) {
            if (!$userdata->is_active) {
                $this->session->set_flashdata('message', 'Akun anda belum diaktifkan, silahkan kontak ketua RT.');
                redirect(base_url() . 'auth');
                exit;
            }
            // verified!
            $this->session->set_userdata('logged_in', $userdata);

            $this->session->user_agent = $_SERVER['HTTP_USER_AGENT'];
            $this->session->ip_address = $_SERVER['REMOTE_ADDR'];
            
            redirect(base_url() . 'admin', 'refresh');
            exit;
        } else {
            $this->session->set_flashdata('message', 'Kombinasi Username atau Password Salah');
            redirect(base_url() . 'auth');
            exit;
        }
	}

	public function doLogout()
	{
		$this->session->sess_destroy();
        redirect(base_url());
        exit;
	}

	
	
}
