<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukController extends CI_Controller {

	public function __construct() {
        parent::__construct();
		isAuthorized();
		$this->load->model('produk_model');
		$this->load->model('user_model');
		$this->load->model('general_model');
		$this->load->model('rt_model');
	}
	
	public function index()
	{
		$data['title'] = 'Manajemen Produk';
		$data['page'] = 'modules/produk/index';
		$data['produks'] = $this->produk_model->get_list_produk();

		$this->load->view('backend/layout', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah produk';
		$data['page'] = 'modules/produk/create';
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

		$data['title'] = 'Edit produk';
		$data['page'] = 'modules/produk/edit';
		$data['script'] = 'form';
		$data['produk'] = $this->general_model->get_single('TBL_produk', "id='$id'");
	
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function store()
	{
		$data = $this->input->post();
		$data['slug'] = slugify($data['nama']);
		$data['id_user'] = $this->session->userdata['logged_in']->id;
							
		$config['upload_path']          = 'uploads/product/';
		$config['allowed_types']        = 'jpg|jpeg|png';
		$config['max_size']             = 2000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar'))
		{
				$error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('message', 'Gagal upload, ' . $error);
                redirect(base_url() . 'admin/produk');
                exit;
		} else {
                $upload_data = $this->upload->data();
                $url_foto = 'uploads/product/' . $upload_data['file_name'];
                
                $dataGambar['gambar'] = $url_foto;
                
				$dataGambar['id_produk'] = $this->produk_model->store($data);	

				$dataGambar['is_primary'] = '1';
				if ($this->produk_model->storeGambar($dataGambar)) {
					setFlashMessage('success', "Selamat.", "Data Berhasil disimpan.");
				} else {
					setFlashMessage('danger', 'Maaf!', 'Data Gagal Disimpan.');
				}
							
				redirect(base_url() . 'admin/produk');  
		}
	}

	public function update()
	{
		$data = $this->input->post();
								
		if ($this->produk_model->update($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/produk');  
	}

	public function updateVerifikasi()
	{
		$data = $this->input->post();
								
		if ($this->user_model->update($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/produk');  
	}

	public function delete($id) {
        $id = xss_clean($id);

        if ($this->produk_model->delete($id)) {
            setFlashMessage('success', "Selamat.", "Data Berhasil Dihapus.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Dihapus.');
		}
					
		redirect(base_url() . 'admin/produk');  
    }

	
}
