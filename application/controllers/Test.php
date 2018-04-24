<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct() {
        parent::__construct();
		// isAuthorized();
		$this->load->library('google');
	}

	public function index() {
		echo $this->google->getLibraryVersion(); 
	}
		
}
