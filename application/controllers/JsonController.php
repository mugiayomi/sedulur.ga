<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JsonController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this->load->model('general_model');
	}
	
	public function getRtByRw($rw)
	{
		echo json_encode($this->general_model->get_list('TBL_RT', "id_rw ='$rw'"));
	}

	
}
