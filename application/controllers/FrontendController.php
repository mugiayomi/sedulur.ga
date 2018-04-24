<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontendController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('arisan_model');
		$this->load->model('general_model');
		$this->load->model('produk_model');
	}
	
	public function index()
	{
		$data['title'] = 'Beranda';
		$data['page'] = 'home';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		if ($this->session->has_userdata('logged_in')) {
			$data['nama'] = $this->session->userdata['logged_in']->nama;
			$data['id_user'] = $this->session->userdata['logged_in']->id;
		} else {
			$data['nama'] = '';
			$data['id_user'] = '';
		}

		$data['agendas'] = $this->general_model->get_list_limit('TBL_AGENDA', null, 3, 'DESC');
		$data['kentongans'] = $this->general_model->get_list('TBL_KENTONGAN', "wk_rekam > DATE_SUB(NOW(), INTERVAL 1 HOUR)");
		$data['infos'] = $this->general_model->get_list_limit('TBL_INFO', null, 6, 'DESC');
		$data['products'] = $this->produk_model->get_list_produk_limit(10);
		
		$this->load->view('frontend/home_layout', $data);
	}

	public function info()
	{
		$data['title'] = 'Info Penting';
		$data['page'] = 'info';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		if ($this->session->has_userdata('logged_in')) {
			$data['nama'] = $this->session->userdata['logged_in']->nama;
			$data['id_user'] = $this->session->userdata['logged_in']->id;
		} else {
			$data['nama'] = '';
			$data['id_user'] = '';
		}

		$data['infos'] = $this->general_model->get_list('TBL_INFO', null);
		$data['kentongans'] = $this->general_model->get_list('TBL_KENTONGAN', "wk_rekam > DATE_SUB(NOW(), INTERVAL 1 HOUR)");

		$this->load->view('frontend/layout', $data);
	}

	public function showInfo($slug)
	{
		$data['title'] = 'Informasi Penting';
		$data['page'] = 'showInfo';
		$data['script'] = 'showAgenda';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		if ($this->session->has_userdata('logged_in')) {
			$data['nama'] = $this->session->userdata['logged_in']->nama;
			$data['id_user'] = $this->session->userdata['logged_in']->id;
		} else {
			$data['nama'] = '';
			$data['id_user'] = '';
		}

		$data['info'] = $this->general_model->get_single('TBL_INFO', "slug='$slug'");

		$data['kentongans'] = $this->general_model->get_list('TBL_KENTONGAN', "wk_rekam > DATE_SUB(NOW(), INTERVAL 1 HOUR)");

		$this->load->view('frontend/layout', $data);
	}


	public function agenda()
	{
		$data['title'] = 'Agenda Kegiatan';
		$data['page'] = 'agenda';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		if ($this->session->has_userdata('logged_in')) {
			$data['nama'] = $this->session->userdata['logged_in']->nama;
			$data['id_user'] = $this->session->userdata['logged_in']->id;
		} else {
			$data['nama'] = '';
			$data['id_user'] = '';
		}

		$data['agendas'] = $this->general_model->get_list('TBL_AGENDA', null);

		$data['kentongans'] = $this->general_model->get_list('TBL_KENTONGAN', "wk_rekam > DATE_SUB(NOW(), INTERVAL 1 HOUR)");

		$this->load->view('frontend/layout', $data);
	}

	public function showAgenda($slug)
	{
		$data['title'] = 'Agenda Kegiatan';
		$data['page'] = 'showAgenda';
		$data['script'] = 'showAgenda';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		if ($this->session->has_userdata('logged_in')) {
			$data['nama'] = $this->session->userdata['logged_in']->nama;
			$data['id_user'] = $this->session->userdata['logged_in']->id;
		} else {
			$data['nama'] = '';
			$data['id_user'] = '';
		}

		$data['agenda'] = $this->general_model->get_single('TBL_AGENDA', "slug='$slug'");

		$data['kentongans'] = $this->general_model->get_list('TBL_KENTONGAN', "wk_rekam > DATE_SUB(NOW(), INTERVAL 1 HOUR)");

		$this->load->view('frontend/layout', $data);
	}

	public function pasar()
	{
		$data['title'] = 'Pasar Lingkungan RT';
		$data['page'] = 'pasar';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		if ($this->session->has_userdata('logged_in')) {
			$data['nama'] = $this->session->userdata['logged_in']->nama;
			$data['id_user'] = $this->session->userdata['logged_in']->id;
		} else {
			$data['nama'] = '';
			$data['id_user'] = '';
		}

		$data['products'] = $this->produk_model->get_list_produk_limit(15);

		$data['kentongans'] = $this->general_model->get_list('TBL_KENTONGAN', "wk_rekam > DATE_SUB(NOW(), INTERVAL 1 HOUR)");

		$this->load->view('frontend/layout', $data);
	}

	public function showPasar($slug)
	{
		$data['title'] = 'Pasar Erte';
		$data['page'] = 'showPasar';
		// $data['script'] = 'showAgenda';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		if ($this->session->has_userdata('logged_in')) {
			$data['nama'] = $this->session->userdata['logged_in']->nama;
			$data['id_user'] = $this->session->userdata['logged_in']->id;
		} else {
			$data['nama'] = '';
			$data['id_user'] = '';
		}

		$data['produk'] = $this->produk_model->get_single_produk($slug);
		$data['relateds'] = $this->produk_model->get_list_related_produk_limit($slug, 5);
		$idProduk = $data['produk']->id_produk;
		$data['gambars'] = $this->general_model->get_list('TBL_GAMBAR_PRODUK', "id_produk = '$idProduk'");

		$data['kentongans'] = $this->general_model->get_list('TBL_KENTONGAN', "wk_rekam > DATE_SUB(NOW(), INTERVAL 1 HOUR)");

		$this->load->view('frontend/layout', $data);
	}

	public function arisan()
	{
		$data['title'] = 'Beranda';
		$data['page'] = 'arisan';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		if ($this->session->has_userdata('logged_in')) {
			$data['nama'] = $this->session->userdata['logged_in']->nama;
			$data['id_user'] = $this->session->userdata['logged_in']->id;
			$data['arisans'] = $this->arisan_model->get_list_arisan_user($this->session->userdata['logged_in']->id);
		} else {
			$data['nama'] = '';
			$data['id_user'] = '';
			$data['arisans'] = $this->general_model->get_list('TBL_ARISAN', null);
		}

		$data['kentongans'] = $this->general_model->get_list('TBL_KENTONGAN', "wk_rekam > DATE_SUB(NOW(), INTERVAL 1 HOUR)");
		
		

		$this->load->view('frontend/layout', $data);
	}

	public function kontak()
	{
		$data['title'] = 'Kontak';
		$data['page'] = 'kontak';

		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		if ($this->session->has_userdata('logged_in')) {
			$data['nama'] = $this->session->userdata['logged_in']->nama;
			$data['id_user'] = $this->session->userdata['logged_in']->id;
		} else {
			$data['nama'] = '';
			$data['id_user'] = '';
		}

		$data['kentongans'] = $this->general_model->get_list('TBL_KENTONGAN', "wk_rekam > DATE_SUB(NOW(), INTERVAL 1 HOUR)");

		$this->load->view('frontend/layout', $data);
	}

	
}
