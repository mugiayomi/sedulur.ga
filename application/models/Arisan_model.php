<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Arisan_model extends CI_Model {
    private $table = 'TBL_ARISAN';
    private $tableAlias = 'TBL_ARISAN a';
    private $id = 'id';
    
    public function __construct() {
        parent::__construct();
    }

    function get_list_arisan() {
        // $this->db->select('a.nik, a.nama, a.alamat, b.nama_rt, c.is_active, username');
        // $this->db->join('TBL_RT b', 'a.id_rt = b.id', 'LEFT');
        // $this->db->join('TBL_USER c', 'a.nik = c.nik', 'LEFT');
        return $this->db->get($this->tableAlias)->result();
    }

    function get_list_arisan_user($id_user = null) {
        $this->db->select('a.*, b.id as id_peserta_arisan');
        $this->db->join('TBL_PESERTA_ARISAN b', "b.id_arisan = a.id and b.id_user = '$id_user'", 'LEFT');
        return $this->db->get($this->tableAlias)->result();
    }

    function get_list_peserta_arisan($id_arisan = null) {
        // $this->db->select('a.*, b.id as id_peserta_arisan');
        $this->db->join('TBL_USER b', "b.id = a.id_user", 'LEFT');
        $this->db->join('TBL_WARGA c', "b.nik = c.nik", 'LEFT');
        $this->db->join('TBL_PERIODE_ARISAN d', "d.id_arisan= a.id_arisan and d.id_peserta_arisan = b.id", 'LEFT');
        $this->db->where("a.id_arisan = '$id_arisan'");
        return $this->db->get('TBL_PESERTA_ARISAN a')->result();
    }
    
    function store($data) {
        try {
            $this->db->insert($this->table, $data);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

    function storePeserta($data) {
        try {
            $this->db->insert('TBL_PESERTA_ARISAN', $data);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

    function storeBayar($data) {
        try {
            $this->db->insert('TBL_PERIODE_ARISAN', $data);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

    function update($data) {
        try {
            $id = $data['id'];

            $this->db->where($this->id, $id);
            $this->db->update($this->table, $data);
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
