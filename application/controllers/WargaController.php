<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WargaController extends CI_Controller {

	public function __construct() {
        parent::__construct();
		isAuthorized();
		$this->load->model('warga_model');
		$this->load->model('user_model');
		$this->load->model('general_model');
		$this->load->model('rt_model');
	}
	
	public function index()
	{
		$data['title'] = 'List Warga';
		$data['page'] = 'modules/warga/index';
		$data['wargas'] = $this->warga_model->get_list_warga();

		$this->load->view('backend/layout', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah Warga';
		$data['page'] = 'modules/warga/create';
		$data['rts'] = $this->rt_model->get_list_rt();

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function edit($id)
	{
		$id = xss_clean($id);
		$data['title'] = 'Edit Warga';
		$data['page'] = 'modules/warga/edit';
		$data['warga'] = $this->general_model->get_single('TBL_WARGA', "nik='$id'");
		$data['rts'] = $this->rt_model->get_list_rt();
	
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function verifikasi($id)
	{
		$id = xss_clean($id);
		$data['title'] = 'Verifikasi Akun Warga';
		$data['page'] = 'modules/warga/verifikasi';
		$data['warga'] = $this->general_model->get_single('TBL_WARGA', "nik='$id'");
		$data['user'] = $this->general_model->get_single('TBL_USER', "nik='$id'");
	
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function store()
	{
        $data = $this->input->post();

        $nikExist = false;
        $nikExist = $this->general_model->count_table('TBL_WARGA', "nik='$data[nik]'");
        
        if ($nikExist) {
            // reject
			setFlashMessage('danger', 'Maaf!', 'Gagal disimpan, NIK sudah ada di database.');
            redirect(base_url() . 'admin/warga');
            exit;
		}
		
		if (empty($data['id_rt'])) {
			unset($data['id_rt']);
		}
								
		if ($this->warga_model->store($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil disimpan.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Disimpan.');
		}
					
		redirect(base_url() . 'admin/warga');  
	}

	public function update()
	{
		$data = $this->input->post();

		if (empty($data['id_rt'])) {
			unset($data['id_rt']);
		}
								
		if ($this->warga_model->update($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/warga');  
	}

	public function updateVerifikasi()
	{
		$data = $this->input->post();

		$email = $data['username'];
								
		if ($this->user_model->update($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}

		$isi = '<p><span style="font-weight: bold;">Anda terverifikasi sebagai member sedulur.ga</span>,</p>
                <p>Data Anda telah berhasil diverifikasi.</p>
                <p>Silahkan login menggunakan email:  '.$email.'</p>
                <p>Terima kasih.</p>
                <p><br></p>
                <p>Salam Guyub,</p>';

        $this->sendEmail($email, "Data anda telah diverifikasi", $isi);
							
				
		redirect(base_url() . 'admin/warga');  
	}

	public function delete($id) {
        $id = xss_clean($id);

        if ($this->warga_model->delete($id)) {
            setFlashMessage('success', "Selamat.", "Data Berhasil Dihapus.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Dihapus.');
		}
					
		redirect(base_url() . 'admin/warga');  
	}
	
	public function sendEmail($emailAddress, $judul, $isi) {
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://mail.sedulur.ga"; // kita akan mengirim via akun google
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
                        
        $this->email->from('admin@sedulur.ga', 'Sedulur.ga'); // email pengirim
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
