<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoController extends CI_Controller {

	public function __construct() {
        parent::__construct();
		isAuthorized();
		$this->load->library('form_validation');
		$this->load->model('info_model');
		$this->load->model('user_model');
		$this->load->model('general_model');
		$this->load->model('rt_model');
	}
	
	public function index()
	{
		$data['title'] = 'Daftar Info';
		$data['page'] = 'modules/info/index';
		$data['infos'] = $this->info_model->get_list_info();

		$this->load->view('backend/layout', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah info';
		$data['page'] = 'modules/info/create';
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

		$data['title'] = 'Edit info';
		$data['page'] = 'modules/info/edit';
		$data['script'] = 'form';
		$data['info'] = $this->general_model->get_single('TBL_info', "id='$id'");
	
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

		$config['upload_path']          = 'uploads/info/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['max_size']             = 2000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar'))
		{
				$error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('message', 'Gagal upload, ' . $error);
                redirect(base_url() . 'admin/info');
                exit;
		} else {
                $upload_data = $this->upload->data();
                $url_foto = 'uploads/info/' . $upload_data['file_name'];
                
                $data['gambar'] = $url_foto;
                $data['id_user'] = $this->session->userdata['logged_in']->id;
								
				if ($this->info_model->store($data)) {
					setFlashMessage('success', "Selamat.", "Data Berhasil disimpan.");
				} else {
					setFlashMessage('danger', 'Maaf!', 'Data Gagal Disimpan.');
				}
							
				redirect(base_url() . 'admin/info');  
        }
								
		
	}

	public function update()
	{
		$data = $this->input->post();
		$data['slug'] = slugify($data['judul']);
		
		$config['upload_path']          = 'uploads/info/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['max_size']             = 2000;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar'))
		{
                $upload_data = $this->upload->data();
                $url_foto = 'uploads/info/' . $upload_data['file_name'];
                
                $data['gambar'] = $url_foto;
		}

		if ($this->info_model->update($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/info');  
								
		
	}

	public function updateVerifikasi()
	{
		$data = $this->input->post();
								
		if ($this->user_model->update($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/info');  
	}

	public function delete($id) {
        $id = xss_clean($id);

        if ($this->info_model->delete($id)) {
            setFlashMessage('success', "Selamat.", "Data Berhasil Dihapus.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Dihapus.');
		}
					
		redirect(base_url() . 'admin/info');  
    }

	
}
