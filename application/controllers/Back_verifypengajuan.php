<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Back_verifypengajuan extends CI_Controller {

    public function index() {
        $data["halaman"] = "Verifikasi Data Pemohon";
        $data["subhalaman"] = "";
        $data["menu"] = "7";
        $data["submenu"] = "";
        $this->gotoView('page_back_verifypengajuan_view', $data);
    }
    
    public function dataPemohon() {
        $data["halaman"] = "Lengkapi Data Pemohon";
        $data["subhalaman"] = "";
        $data["menu"] = "3";
        $data["submenu"] = "";
        $this->gotoView('page_back_datapemohon_view', $data);
    }
    
    private function gotoView($pageview, $data) {
        force_ssl();
        if ($this->session->userdata('logged_in') != NULL || $this->session->userdata('logged_in') === TRUE) {
            redirect('/');
            exit();
        }
        $data['page'] = 'backend/'.$pageview;
        $this->load->view('backend/page_back_header_view', $data);
    }

}