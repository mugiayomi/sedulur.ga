<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('saveLog')) {

    function saveLog($action) {
        $CI = & get_instance();  //get instance, access the CI superobject
        $data['ip_address'] = $_SERVER['REMOTE_ADDR'];
        $data['action'] = $action;
        $data['id_user'] = $CI->session->userdata['logged_in']->id_user;

        $CI->db->insert('log', $data);
    }

}

if (!function_exists('isAuthorized')) {

    function isAuthorized() {
        $CI = & get_instance();  //get instance, access the CI superobject
        if ($CI->session->user_agent === $_SERVER['HTTP_USER_AGENT'] && $CI->session->ip_address === $_SERVER['REMOTE_ADDR'] && $CI->session->has_userdata('logged_in')) {
            return true;
        } else {
            redirect(base_url() . 'auth/doLogout');
            return false;
        }
    }

}

if (!function_exists('isAllowed')) {

    function isAllowed($groupUser, $url, $role) {
        $CI = & get_instance();  //get instance, access the CI superobject

        $CI->db->select("COUNT(group_user) data");
        $CI->db->where('group_user', $groupUser);
        $CI->db->where('url', $url);
        $CI->db->where('role', $role);
        $allowed = $CI->db->get('vw_menu_role')->row();

        if (!$allowed->data) {
            saveLog("Unauthorizes Access to $role $url!!");
            redirect(base_url() . 'unauthorized');
        }
    }

}

if (!function_exists('toIndoDate')) {

    function toIndoDate($datawaktu) {
        if ($datawaktu != null) {
            $tanggal = explode(' ', $datawaktu);
            $waktu = explode('-', $tanggal[0]);
            if ($waktu[1] == '01') { //jika 01 maka januari
                $bulan = 'Januari';
            } elseif ($waktu[1] == '02') {
                $bulan = 'Pebruari';
            } elseif ($waktu[1] == '03') {
                $bulan = 'Maret';
            } elseif ($waktu[1] == '04') {
                $bulan = 'April';
            } elseif ($waktu[1] == '05') {
                $bulan = 'Mei';
            } elseif ($waktu[1] == '06') {
                $bulan = 'Juni';
            } elseif ($waktu[1] == '07') {
                $bulan = 'Juli';
            } elseif ($waktu[1] == '08') {
                $bulan = 'Agustus';
            } elseif ($waktu[1] == '09') {
                $bulan = 'September';
            } elseif ($waktu[1] == '10') {
                $bulan = 'Oktober';
            } elseif ($waktu[1] == '11') {
                $bulan = 'Nopember';
            } elseif ($waktu[1] == '12') {
                $bulan = 'Desember';
            } else {
                $bulan = '00';
            }

            return "$waktu[2] $bulan $waktu[0]";
        }
        return "-";
    }

}

if (!function_exists('toNamaBulan')) {

    function toNamaBulan($waktu) {
      //  if ($angka != null) {
           // $tanggal = explode(' ', $datawaktu);
            //$angka = $waktu;
            if ($waktu == '01') { //jika 01 maka januari
                $bulan = 'Januari';
            } elseif ($waktu == '02') {
                $bulan = 'Februari';
            } elseif ($waktu == '03') {
                $bulan = 'Maret';
            } elseif ($waktu == '04') {
                $bulan = 'April';
            } elseif ($waktu == '05') {
                $bulan = 'Mei';
            } elseif ($waktu == '06') {
                $bulan = 'Juni';
            } elseif ($waktu == '07') {
                $bulan = 'Juli';
            } elseif ($waktu == '08') {
                $bulan = 'Agustus';
            } elseif ($waktu == '09') {
                $bulan = 'September';
            } elseif ($waktu == '10') {
                $bulan = 'Oktober';
            } elseif ($waktu == '11') {
                $bulan = 'November';
            } elseif ($waktu == '12') {
                $bulan = 'Desember';
            } else {
                $bulan = '00';
            }

            return "$bulan";
        }
       // return "-";
   // }

}

if (!function_exists('toMysqlDate')) { // dd-mm-yyyy to yyyy-mm-dd

    function toMysqlDate($dataTanggal) {
        if (!empty($dataTanggal)) {
            $tanggal = explode('-', $dataTanggal);

            return "$tanggal[2]-$tanggal[1]-$tanggal[0]";
        }
    }

}

if (!function_exists('mysqlToDDMMYYYY')) { // dd-mm-yyyy to yyyy-mm-dd

    function mysqlToDDMMYYYY($dataTanggal) {
        if ($dataTanggal != null) {
            $tanggal = explode('-', $dataTanggal);
            return "$tanggal[2]-$tanggal[1]-$tanggal[0]";
        }
    }

}

if (!function_exists('getDayFromDate')) {

    function getDayFromDate($tgl, $sep) {
        $sepparator = $sep; //separator. contoh: '-', '/'
        $parts = explode($sepparator, $tgl);
        $d = date("l", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));

        if ($d == 'Monday') {
            return 'Senin';
        } elseif ($d == 'Tuesday') {
            return 'Selasa';
        } elseif ($d == 'Wednesday') {
            return 'Rabu';
        } elseif ($d == 'Thursday') {
            return 'Kamis';
        } elseif ($d == 'Friday') {
            return 'Jumat';
        } elseif ($d == 'Saturday') {
            return 'Sabtu';
        } elseif ($d == 'Sunday') {
            return 'Minggu';
        } else {
            return 'ERROR!';
        }
    }

}

if (!function_exists('nvl')) {

    function nvl(&$var, $default = "") {
        return isset($var) ? $var : $default;
    }

}

if (!function_exists('terbilang')) {

    function terbilang($x) {
        $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        if ($x < 12)
            return " " . $abil[$x];
        elseif ($x < 20)
            return Terbilang($x - 10) . "belas";
        elseif ($x < 100)
            return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
        elseif ($x < 200)
            return " seratus" . Terbilang($x - 100);
        elseif ($x < 1000)
            return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
        elseif ($x < 2000)
            return " seribu" . Terbilang($x - 1000);
        elseif ($x < 1000000)
            return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
        elseif ($x < 1000000000)
            return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
    }

}

if (!function_exists('setFlashMessage')) {

    function setFlashMessage($type, $title, $message) {
        $CI = & get_instance();  //get instance, access the CI superobject

        $CI->session->set_flashdata('status', $type);
        $CI->session->set_flashdata('title', $title);
        $CI->session->set_flashdata('message', $message);
    }

}