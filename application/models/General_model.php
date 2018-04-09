<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class General_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    function get_single($table, $filter) {
        if (!empty($filter)) {
            $this->db->where($filter); 
        }
        
        return $this->db->get($table)->row();
    }

    function get_list($table, $filter) {
        if (!empty($filter)) {
            $this->db->where($filter); 
        }
        
        return $this->db->get($table)->result();
    }

    function count_table($table, $filter) {
        if (!empty($filter)) {
            $this->db->where($filter); 
        }
        
        return $this->db->get($table)->num_rows();
    }

}
