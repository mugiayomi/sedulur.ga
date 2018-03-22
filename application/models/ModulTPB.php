<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModulTPB extends CI_Model {

    private $tpbdb;

    public function __construct() {
        parent::__construct();

        // Load MySQL database
        $this->tpbdb = $this->load->database('tpbdb', TRUE);
    }

    function get_list_dokumen_bc($kodeDok, $filter)
    {
        $this->tpbdb->where("kode_dokumen_pabean = '$kodeDok'");
        return $this->tpbdb->get('tpb_header')->result();    
    }

    function get_list_bc16($filter)
    {
        if (!empty($filter)) {
            $this->tpbdb->where($filter);
        }

        $this->tpbdb->where("kode_dokumen_pabean = '16'");
        $this->tpbdb->select("a.nomor_aju, b.nomor_dokumen as shipment_number, a.nomor_bc11, a.tanggal_bc11, c.uraian_status");
        $this->tpbdb->join("tpb_dokumen b", "a.ID = b.ID_HEADER and b.KODE_JENIS_DOKUMEN = '380'", 'LEFT');
        $this->tpbdb->join("referensi_status c", "a.KODE_DOKUMEN_PABEAN = c.KODE_DOKUMEN and  a.KODE_STATUS = c.KODE_STATUS", 'LEFT');
        $this->tpbdb->order_by('TANGGAL_AJU', 'DESC');
        return $this->tpbdb->get('tpb_header a')->result();    
    }

    function get_num_rows($table, $filter) {
        if (!empty($filter)) {
            $this->tpbdb->where($filter);
        }
        return $this->tpbdb->get($table)->num_rows();   
    }

    function get_list($dok, $filter)
    {
        $this->tpbdb->where("id_jenis_nhi = '$jenisNhi' and tanggal_nhi like '%$tahun%'");
        $this->tpbdb->join('tr_komoditi k', "k.id_komoditi = n.id_komoditi", 'LEFT');
        $this->tpbdb->group_by("komoditi");
        $this->tpbdb->order_by('jumlah', 'DESC');
        $this->tpbdb->limit(5);
        return $this->tpbdb->get('td_nhi n')->result();
        
    }
}
