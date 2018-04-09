<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Warga_model extends CI_Model {
    private $table = 'TBL_WARGA';
    private $tableAlias = 'TBL_WARGA a';
    private $id = 'nik';
    
    public function __construct() {
        parent::__construct();
    }

    function get_list_warga() {
        $this->db->select('a.nik, a.nama, a.alamat, b.nama_rt, c.is_active, username');
        $this->db->join('TBL_RT b', 'a.id_rt = b.id', 'LEFT');
        $this->db->join('TBL_USER c', 'a.nik = c.nik', 'LEFT');
        return $this->db->get($this->tableAlias)->result();
    }
    
    function store($data) {
        try {
            $this->db->insert($this->table, $data);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

    function update($data) {
        try {
            $id = $data['old_nik'];
            unset($data['old_nik']);

            $this->db->where($this->id, $id);
            $this->db->update($this->table, $data);

            $this->db->where($this->id, $id);
            $this->db->update('TBL_USER', $data);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

    function delete($id) {
        try {
            $this->db->where($this->id, $id);
            $this->db->delete($this->table);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

}
