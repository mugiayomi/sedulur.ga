<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Model {

    public $table = 'TBL_SHIPMENT';
	public $table_detail = 'TBL_SHIPMENT_DETAIL';
    public $id = 'shipment_number';


    public function __construct() {
        parent::__construct();
    }

    function store($data) {
        try {
            $this->db->insert($this->table, $data['shipment']);
        
            foreach ($data['shipment_detail'] as $v) {
                $this->db->insert($this->table_detail, $v);
            }

            return true;
        } catch (exception $e) {
            return false;
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

    function get_all() {
        return $this->db->get($this->table)->result();
    }

    function get_shipment($id) {
        return $this->db->get_where($this->table, array($this->id => $id), 1, 0)->result()[0];
    }

    function get_shipment_details($id) {
        return $this->db->get_where($this->table_detail, array($this->id => $id))->result();
    }

    function get_filter($tableName, $field, $id, $limit, $offset) {
        return $this->db->get_where($tableName, array($field => $id), $limit, $offset)->result();
    }

    function is_shipment_exist($shipmentNumber) {
        return $this->db->get_where($this->table, array('shipment_number' => $shipmentNumber))->num_rows();
    }

}
