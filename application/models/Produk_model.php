<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {
    private $table = 'TBL_PRODUK';
    private $tableAlias = 'TBL_PRODUK a';
    private $id = 'id';
    
    public function __construct() {
        parent::__construct();
    }

    function get_list_produk() {
        // $this->db->select('a.nik, a.nama, a.alamat, b.nama_rt, c.is_active, username');
        $this->db->join('TBL_GAMBAR_PRODUK b', 'a.id = b.id_produk and is_primary = 1', 'LEFT');
        $this->db->join('TBL_USER c', 'a.id_user = c.id', 'LEFT');
        return $this->db->get($this->tableAlias)->result();
    }

    function get_list_produk_limit($limit) {
        // $this->db->select('a.nik, a.nama, a.alamat, b.nama_rt, c.is_active, username');
        $this->db->join('TBL_GAMBAR_PRODUK b', 'a.id = b.id_produk and is_primary = 1', 'LEFT');
        $this->db->join('TBL_USER c', 'a.id_user = c.id', 'LEFT');
        $this->db->limit($limit);
        return $this->db->get($this->tableAlias)->result();
    }

    function get_list_related_produk_limit($slug, $limit) {
        // $this->db->select('a.nik, a.nama, a.alamat, b.nama_rt, c.is_active, username');
        $this->db->join('TBL_GAMBAR_PRODUK b', 'a.id = b.id_produk and is_primary = 1', 'LEFT');
        $this->db->join('TBL_USER c', 'a.id_user = c.id', 'LEFT');
        $this->db->where("slug != '$slug'");
        $this->db->limit($limit);
        return $this->db->get($this->tableAlias)->result();
    }

    function get_single_produk($slug) {
        // $this->db->select('a.nik, a.nama, a.alamat, b.nama_rt, c.is_active, username');
        $this->db->join('TBL_GAMBAR_PRODUK b', 'a.id = b.id_produk and is_primary = 1', 'LEFT');
        $this->db->join('TBL_USER c', 'a.id_user = c.id', 'LEFT');
        $this->db->where("slug = '$slug'");
        $this->db->limit(1);
        return $this->db->get($this->tableAlias)->row();
    }
    
    function store($data) {
        try {
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
            // return true;
        } catch (Exception $exc) {
            return false;
        }
    }

    function storeGambar($data) {
        try {
            $this->db->insert('TBL_GAMBAR_PRODUK', $data);
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
            $this->db->where('id_produk', $id);
            $this->db->delete('TBL_GAMBAR_PRODUK');

            $this->db->where($this->id, $id);
            $this->db->delete($this->table);
            return true;
        } catch (Exception $exc) {
            return false;
        }
    }

}
