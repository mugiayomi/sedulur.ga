<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->model('general_model');
    }

	public function index()
	{
		$data['title'] = 'Daftar Akun';
        $data['page'] = 'register';
        $data['script'] = 'register';
        $data['rws'] = $this->general_model->get_list('TBL_RW', null);

        $data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$this->load->view('frontend/layout', $data);
    }
    
	public function result()
	{
		$data['title'] = 'Status Pendaftaran';
        $data['page'] = 'result';
        
		$this->load->view('frontend/layout', $data);
	}

	public function store()
	{
        $data = $this->input->post();

        $nikExist = false;
        $emailExist = false;

        $nikExist = $this->general_model->count_table('TBL_WARGA', "nik='$data[nik]'");
        $emailExist = $this->general_model->count_table('TBL_USER', "username='$data[email]'");
        
        if ($nikExist || $emailExist) {
            // reject
            $this->session->set_flashdata('title', 'Maaf!');
            $this->session->set_flashdata('message', 'Gagal disimpan, NIK/Email sudah ada di database.');
            redirect(base_url() . 'register/result');
            exit;
        }

        $config['upload_path']          = 'uploads/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['max_size']             = 2000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('photo'))
		{
				$error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('message', 'Gagal upload, ' . $error);
                redirect(base_url() . 'register/result');
                exit;
		}
		else
		{
                $upload_data = $this->upload->data();
                $url_foto = 'uploads/' . $upload_data['file_name'];

                $data_user['nik'] = $data['nik'];
                $data_user['username'] = $data['email'];
                $data_user['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                $data_warga['nik'] = $data['nik'];
                $data_warga['nama'] = $data['nama'];
                $data_warga['alamat'] = $data['alamat'];
                $data_warga['email'] = $data['email'];
                $data_warga['id_rt'] = $data['id_rt'];
                $data_warga['url_foto'] = $url_foto;
								
				if ($this->user_model->store($data_user, $data_warga)) {
                    setFlashMessage('success', "Selamat Datang ".$data['nama']."!", 'Anda telah terdaftar sebagai member Akun anda akan aktif setelah Ketua RT melakukan verifikasi.
                    <br> Informasi selanjutnya melalui email. Terima kasih');
                } else {
                    setFlashMessage('danger', 'Maaf!','Data Gagal Disimpan.');
                }
							
				redirect(base_url() . 'register/result');
        }
        
	}

	
	
	
}
