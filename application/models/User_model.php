<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    private $table = 'TBL_USER';
    private $tableAlias = 'TBL_USER a';
    
    public function __construct() {
        parent::__construct();
    }

    function get_user_by_username($username) {
        $this->db->where('username', $username);
        $this->db->join('TBL_WARGA b', 'a.nik=b.nik', 'LEFT');
        return $this->db->get($this->tableAlias)->row();
    }
    
    function store($data_user, $data_warga) {
        try {
            $this->db->insert('TBL_WARGA', $data_warga);
            $this->db->insert('TBL_USER', $data_user);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

    function update($data) {
        try {
            $id = $data['nik'];

            $this->db->where('nik', $id);
            $this->db->update($this->table, $data);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

}
