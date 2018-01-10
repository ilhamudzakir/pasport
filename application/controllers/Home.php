<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data["halaman"] = "Beranda";
        $data["menu"] = "1";
        $data["submenu"] = "";
        $data['kanim']=select_where('dc_list_kanim','MP_ID','7')->result();
        $this->gotoView('page_front_beranda_view', $data);
    }
    
    public function jadwalPengajuan() {
        $data["halaman"] = "Jadwal";
        $data["menu"] = "1";
        $data["submenu"] = "";
        $data['kanim']=select_where('dc_list_kanim','MP_ID','7')->result();
        $this->gotoView('page_front_jadwalpengajuan_view', $data);
    }
    
    public function daftarPengajuan() {
        $data["halaman"] = "Daftar Pengajuan";
        $data["menu"] = "1";
        $data["submenu"] = "";
        $this->gotoView('page_front_daftarpengajuan_view', $data);
    }
    
    public function dataPemohon() {
        $data["halaman"] = "Lengkapi Data Pemohon";
        $data["subhalaman"] = "";
        $data["menu"] = "3";
        $data["submenu"] = "";
        $this->gotoView('page_front_datapemohon_view', $data);
    }
    public function check_quota(){
        $provinsi=$this->input->post('provinsi');
        $kanim=$this->input->post('kanim');
        $jml=$this->input->post('jml');
        //syntax api check quota
        redirect("jadwal/".$provinsi."/".$kanim."/".$jml);
    }

    public function download(){
        $data=login_api();
        print_r($data->Tokeny);
        
    }
    private function gotoView($pageview, $data) {
        force_ssl();
        if ($this->session->userdata('logged_in') != NULL || $this->session->userdata('logged_in') === TRUE) {
            redirect('/');
            exit();
        }
        $data['page'] = 'frontend/'.$pageview;
        $this->load->view('frontend/page_front_header_view', $data);
    }

}