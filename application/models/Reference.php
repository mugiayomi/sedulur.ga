<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reference extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function store($tableName, $data) {
        if ( ! $this->db->insert($tableName, $data)) {
            // $error = $this->db->error(); // Has keys 'code' and 'message'
            // print_r($error);exit;
            // $this->session->set_flashdata('dberror_code', $error);
            // $this->session->set_flashdata('dberror_message', 'Data Gagal Disimpan!');
            return false;
        } else {
            return true;
        }
    }

    function update($tableName, $field, $id, $data) {
        $this->db->where($field, $id);
        
        if ( ! $this->db->update($tableName, $data)) {
            return false;
        } else {
            return true;
        }
    }

    function delete($tableName, $field, $id) {
        $this->db->where($field, $id);
        
        if ( ! $this->db->delete($tableName)) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Get All Data With Order
     *
     * @param NamaTable $tableName
     * @return void
     */
    function get_all($tableName) {
        return $this->db->get($tableName)->result();
    }

    function get_filter($tableName, $field, $id, $limit, $offset) {
        return $this->db->get_where($tableName, array($field => $id), $limit, $offset)->result();
    }

}
