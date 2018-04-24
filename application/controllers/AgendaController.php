<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgendaController extends CI_Controller {

	public function __construct() {
        parent::__construct();
		isAuthorized();
		$this->load->model('agenda_model');
		$this->load->model('user_model');
		$this->load->model('general_model');
		$this->load->model('rt_model');
	}
	
	public function index()
	{
		$data['title'] = 'Daftar Agenda';
		$data['page'] = 'modules/agenda/index';
		$data['agendas'] = $this->agenda_model->get_list_agenda();

		$this->load->view('backend/layout', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah agenda';
		$data['page'] = 'modules/agenda/create';
		$data['script'] = 'form';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function edit($id)
	{
		$id = xss_clean($id);

		$data['title'] = 'Edit agenda';
		$data['page'] = 'modules/agenda/edit';
		$data['script'] = 'form';
		$data['agenda'] = $this->general_model->get_single('TBL_agenda', "id='$id'");
	
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function store()
	{
		$data = $this->input->post();
		$data['slug'] = slugify($data['judul']);
		$data['id_user'] = $this->session->userdata['logged_in']->id;
		
		$waktu = explode(' - ', $data['waktu']);
		$data['tanggal_mulai'] = $waktu[0];
		$data['tanggal_akhir'] = $waktu[1];

		unset($data['waktu']);

		$config['upload_path']          = 'uploads/agenda/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['max_size']             = 2000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar'))
		{
				$error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('message', 'Gagal upload, ' . $error);
                redirect(base_url() . 'admin/agenda');
                exit;
		} else {
                $upload_data = $this->upload->data();
                $url_foto = 'uploads/agenda/' . $upload_data['file_name'];
                
                $data['gambar'] = $url_foto;
								
				if ($this->agenda_model->store($data)) {
					setFlashMessage('success', "Selamat.", "Data Berhasil disimpan.");
				} else {
					setFlashMessage('danger', 'Maaf!', 'Data Gagal Disimpan.');
				}
							
				redirect(base_url() . 'admin/agenda'); 
        }
								
		 
	}

	public function update()
	{
		$data = $this->input->post();
		$data['slug'] = slugify($data['judul']);
		
		$waktu = explode(' - ', $data['waktu']);
		$data['tanggal_mulai'] = $waktu[0];
		$data['tanggal_akhir'] = $waktu[1];

		unset($data['waktu']);

		$config['upload_path']          = 'uploads/agenda/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['max_size']             = 2000;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar'))
		{
                $upload_data = $this->upload->data();
                $url_foto = 'uploads/agenda/' . $upload_data['file_name'];
                
                $data['gambar'] = $url_foto;
		}

								
		if ($this->agenda_model->update($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/agenda');  
	}

	public function updateVerifikasi()
	{
		$data = $this->input->post();
								
		if ($this->user_model->update($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/agenda');  
	}

	public function delete($id) {
        $id = xss_clean($id);

        if ($this->agenda_model->delete($id)) {
            setFlashMessage('success', "Selamat.", "Data Berhasil Dihapus.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Dihapus.');
		}
					
		redirect(base_url() . 'admin/agenda');  
    }

	
}
