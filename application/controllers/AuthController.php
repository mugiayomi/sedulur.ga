<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_model');
    }

	public function index()
	{
		$data = '';
		$this->load->view('modules/auth/login', $data);
	}

	public function doLogin()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
            redirect(base_url() . 'auth');
            exit;
        }

        $user_login = $this->input->post('username');
        $user_password = $this->input->post('password');

        try {
            $userdata = $this->auth_model->cek_username($user_login);

            if (password_verify($user_password, $userdata->user_password)) {
                // verified!
                $this->session->set_userdata('logged_in', $userdata);

                // load default option
                if ($userdata->group_user == 'Administrator') {
                    $menu = $this->link_model->get_admin_menu();
                } else {
                    $menu = $this->link_model->get_authorized_menu($userdata->id_user);
                }
                
//                $this->session->menu = $menu;
                $this->session->menu = $this->buildMenu(0, $menu);
//                echo '<pre>';
//                print_r($menu);
//                exit;

                $this->session->menu_parent = $this->menu_parent;
                $this->session->menu_child = $this->menu_child;

                $this->session->user_agent = $_SERVER['HTTP_USER_AGENT'];
                $this->session->ip_address = $_SERVER['REMOTE_ADDR'];
                
                saveLog("Berhasil Login");
                redirect(base_url() . 'dashboard', 'refresh');
                exit;
            } else {
                $this->session->set_flashdata('message', 'Kombinasi Username atau Password Salah');
                redirect(base_url() . 'auth');
                exit;
            }
        } catch (Exception $exc) {
            $this->session->set_flashdata('message', $exc->getTraceAsString());
            redirect(base_url() . 'auth');
            exit;
        }
	}

	public function doLogout()
	{
		$this->session->sess_destroy();
        redirect(base_url() . 'auth');
        exit;
	}

	
	
}
