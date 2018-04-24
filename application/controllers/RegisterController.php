<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {

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

        $data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
        
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
                    <br> Informasi selanjutnya melalui email (Cek SPAM Folder). Terima kasih');
                } else {
                    setFlashMessage('danger', 'Maaf!','Data Gagal Disimpan.');
                }

                $isi = '<p><span style="font-weight: bold;">Selamat Bergabung '.$data['nama'].'</span>,</p>
                <p>Anda telah berhasil mendaftar sebagai member tapi masih menunggu konfirmasi oleh ketua RT untuk dapat menggunakan akun ini.</p>
                <p>Informasi verifikasi akan disampaikan melalui email.</p>
                <p>Terima kasih.</p>
                <p><br></p>
                <p>Salam Guyub,</p>';

                $this->sendEmail($data['email'], "Selamat Datang di Sedulur.ga", $isi);
							
				redirect(base_url() . 'register/result');
        }
        
    }
    
    public function sendEmail($emailAddress, $judul, $isi) {
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://mail.sedulur.ga"; // kita akan mengirim via akun ini
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "admin@sedulur.ga"; // ini adalah akun yang akan mengirim email
        $config['smtp_pass'] = "sedulur"; // ini adalah password akun yang akan mengirim email
        $config['charset'] = "iso-8859-1";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        $this->email->initialize($config);
        
        $tomail = "$emailAddress"; // email tujuan, jika banyak silahkan tambahkan email lagi dengan koma
        $subject = "$judul";
        $isiEmail = "$isi";
                        
        $this->email->from('admin@sedulur.ga', 'Admin Sedulur'); // email pengirim
        $list = $tomail;
        $this->email->bcc($list);
        $this->email->subject($subject);
        $this->email->message($isiEmail);
        
        if ($this->email->send()){
            return true;
        }else{
            return false;
        }

    }
	
	
}