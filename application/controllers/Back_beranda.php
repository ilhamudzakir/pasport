<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Back_beranda extends CI_Controller {

    public function index() {
        $data["halaman"] = "Beranda";
        $data["subhalaman"] = "";
        $data["menu"] = "1";
        $data["submenu"] = "";
        $this->gotoView('page_back_beranda_view', $data);
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