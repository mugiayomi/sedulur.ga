<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArisanController extends CI_Controller {

	public function __construct() {
        parent::__construct();
		isAuthorized();
		$this->load->model('arisan_model');
		$this->load->model('user_model');
		$this->load->model('general_model');
		$this->load->model('rt_model');
	}
	
	public function index()
	{
		$data['title'] = 'Manajemen Arisan';
		$data['page'] = 'modules/arisan/index';
		$data['arisans'] = $this->arisan_model->get_list_arisan();

		$this->load->view('backend/layout', $data);
	}

	public function create()
	{
		$data['title'] = 'Tambah arisan';
		$data['page'] = 'modules/arisan/create';
		$data['script'] = 'form';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function daftar($id)
	{
		$data['title'] = 'Mendaftar Arisan';
		$data['page'] = 'modules/arisan/daftar';
		$data['script'] = 'form';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$data['arisan'] = $this->general_model->get_single('TBL_ARISAN', "id='$id'");
		$this->load->view('backend/layout', $data);
	}

	public function peserta($id)
	{
		$data['title'] = 'Peserta Arisan';
		$data['page'] = 'modules/arisan/peserta';
		$data['script'] = 'form';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$data['arisan'] = $this->general_model->get_single('TBL_ARISAN', "id='$id'");
		$data['pesertas'] = $this->arisan_model->get_list_peserta_arisan($id);
		$this->load->view('backend/layout', $data);
	}

	public function bayar($id)
	{
		$data['title'] = 'Membayar Arisan';
		$data['page'] = 'modules/arisan/bayar';
		$data['script'] = 'form';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$data['arisan'] = $this->general_model->get_single('TBL_ARISAN', "id='$id'");
		$this->load->view('backend/layout', $data);
	}

	public function edit($id)
	{
		$id = xss_clean($id);

		$data['title'] = 'Edit arisan';
		$data['page'] = 'modules/arisan/edit';
		$data['script'] = 'form';
		$data['arisan'] = $this->general_model->get_single('TBL_ARISAN', "id='$id'");
	
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function store()
	{
		$data = $this->input->post();
		$data['id_user'] = $this->session->userdata['logged_in']->id;
								
		if ($this->arisan_model->store($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil disimpan.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Disimpan.');
		}
					
		redirect(base_url() . 'admin/arisan');  
	}

	public function storePeserta()
	{
		$data = $this->input->post();

		$data['id_user'] = $this->session->userdata['logged_in']->id;
								
		if ($this->arisan_model->storePeserta($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil disimpan.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Disimpan.');
		}
					
		redirect(base_url() . 'arisan');  
	}

	public function storeBayar()
	{
		$data = $this->input->post();

		$data['id_peserta_arisan'] = $this->session->userdata['logged_in']->id;
								
		if ($this->arisan_model->storeBayar($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil disimpan.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Disimpan.');
		}
					
		redirect(base_url() . 'arisan');  
	}

	public function update()
	{
		$data = $this->input->post();
								
		if ($this->arisan_model->update($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/arisan');  
	}

	public function updateVerifikasi()
	{
		$data = $this->input->post();
								
		if ($this->user_model->update($data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/arisan');  
	}

	public function delete($id) {
        $id = xss_clean($id);

        if ($this->arisan_model->delete($id)) {
            setFlashMessage('success', "Selamat.", "Data Berhasil Dihapus.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Dihapus.');
		}
					
		redirect(base_url() . 'admin/arisan');  
    }

	
}
