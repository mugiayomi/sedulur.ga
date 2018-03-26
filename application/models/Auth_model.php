<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
    
    public $view_user = 'vw_user';
    
    public function __construct() {
        parent::__construct();
    }
    
    function cek_username($user_login) {
        $this->db->where('user_login', $user_login);
        $this->db->where('active', 'Y');
        return $this->db->get($this->view_user)->row();
    }

}
