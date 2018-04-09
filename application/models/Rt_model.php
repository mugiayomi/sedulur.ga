<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rt_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function get_list_rw() {
        $this->db->join('TBL_WARGA b', 'a.ketua_rw = b.nik', 'LEFT');
        return $this->db->get('TBL_RW a')->result();
    }

    function get_list_rt() {
        $this->db->select('a.id, a.nama_rt, c.nama_rw, b.nama');
        $this->db->join('TBL_WARGA b', 'a.ketua_rt = b.nik', 'LEFT');
        $this->db->join('TBL_RW c', 'a.id_rw = c.id', 'LEFT');
        return $this->db->get('TBL_RT a')->result();
    }

    function store($table, $data) {
        try {
            $this->db->insert($table, $data);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

    function update($table, $data) {
        try {
            $this->db->where('id', $data['id']);
            $this->db->update($table, $data);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

    function delete($table, $id) {
        try {
            $this->db->where('id', $id);
            $this->db->delete($table);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

}
