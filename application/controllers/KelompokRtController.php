<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KelompokRtController extends CI_Controller {

	public function __construct() {
        parent::__construct();
		isAuthorized();
		$this->load->model('rt_model');
		$this->load->model('general_model');
	}
	
	public function index()
	{
		$data['title'] = 'Kelompok RT/RW';
		$data['page'] = 'modules/kelompokRt/index';
		$data['rws'] = $this->rt_model->get_list_rw();
		$data['rts'] = $this->rt_model->get_list_rt();

		$this->load->view('backend/layout', $data);
	}

	public function createRw()
	{
		$data['title'] = 'Tambah Kelompok RW';
		$data['page'] = 'modules/kelompokRt/create-rw';
		$data['wargas'] = $this->general_model->get_list('TBL_WARGA', null);

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function editRw($id)
	{
		$id = xss_clean($id);
		$data['title'] = 'Edit Kelompok RW';
		$data['page'] = 'modules/kelompokRt/edit-rw';
		$data['wargas'] = $this->general_model->get_list('TBL_WARGA', null);
		$data['rw'] = $this->general_model->get_single('TBL_RW', "id='$id'");

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function storeRw()
	{
        $data = $this->input->post();

        $rwExist = false;
        $rwExist = $this->general_model->count_table('TBL_RW', "nama_rw='$data[nama_rw]'");
        
        if ($rwExist) {
            // reject
			setFlashMessage('danger', 'Maaf!', 'Gagal disimpan, Nama RW sudah ada di database.');
            redirect(base_url() . 'admin/kelompok-rt');
            exit;
		}
		
		if (empty($data['ketua_rw'])) {
			unset($data['ketua_rw']);
		}
								
		if ($this->rt_model->store('TBL_RW', $data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil disimpan.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Disimpan.');
		}
					
		redirect(base_url() . 'admin/kelompok-rt');  
	}

	public function updateRw()
	{
		$data = $this->input->post();
		if (empty($data['ketua_rw'])) {
			unset($data['ketua_rw']);
		}
								
		if ($this->rt_model->update('TBL_RW', $data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/kelompok-rt');  
	}

	public function deleteRw($id) {
        $id = xss_clean($id);

        if ($this->rt_model->delete('TBL_RW', $id)) {
            setFlashMessage('success', "Selamat.", "Data Berhasil Dihapus.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Dihapus.');
		}
					
		redirect(base_url() . 'admin/kelompok-rt');  
    }

	public function createRt()
	{
		$data['title'] = 'Tambah Kelompok RW';
		$data['page'] = 'modules/kelompokRt/create-rt';
		$data['rws'] = $this->general_model->get_list('TBL_RW', null);
		$data['wargas'] = $this->general_model->get_list('TBL_WARGA', null);

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function editRt($id)
	{
		$id = xss_clean($id);
		$data['title'] = 'Edit Kelompok RT';
		$data['page'] = 'modules/kelompokRt/edit-rt';
		$data['wargas'] = $this->general_model->get_list('TBL_WARGA', null);
		$data['rws'] = $this->general_model->get_list('TBL_RW', null);
		$data['rt'] = $this->general_model->get_single('TBL_RT', "id='$id'");

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view('backend/layout', $data);
	}

	public function storeRt()
	{
        $data = $this->input->post();

        $rwExist = false;
        $rwExist = $this->general_model->count_table('TBL_RT', "nama_rt='$data[nama_rt]' and id_rw='$data[id_rw]'");
        
        if ($rwExist) {
            // reject
			setFlashMessage('danger', 'Maaf!', 'Gagal disimpan, Nama RT sudah ada di database.');
            redirect(base_url() . 'admin/kelompok-rt');
            exit;
		}
		
		if (empty($data['ketua_rt'])) {
			unset($data['ketua_rt']);
		}
								
		if ($this->rt_model->store('TBL_RT', $data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil disimpan.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Disimpan.');
		}
					
		redirect(base_url() . 'admin/kelompok-rt');
	}

	public function updateRt()
	{
		$data = $this->input->post();
		if (empty($data['ketua_rt'])) {
			unset($data['ketua_rt']);
		}
								
		if ($this->rt_model->update('TBL_RT', $data)) {
			setFlashMessage('success', "Selamat.", "Data Berhasil diupdate.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal diupdate.');
		}
					
		redirect(base_url() . 'admin/kelompok-rt');  
	}

	public function deleteRt($id) {
        $id = xss_clean($id);

        if ($this->rt_model->delete('TBL_RT', $id)) {
            setFlashMessage('success', "Selamat.", "Data Berhasil Dihapus.");
		} else {
			setFlashMessage('danger', 'Maaf!', 'Data Gagal Dihapus.');
		}
					
		redirect(base_url() . 'admin/kelompok-rt');  
    }

	
}
