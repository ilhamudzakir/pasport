<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    public function index() {
        $data["halaman"] = "Beranda";
        $data["menu"] = "1";
        $data["submenu"] = "";
        $data['kanim']=select_where('dc_list_kanim','MP_ID','7')->result();
        $this->gotoView('page_front_beranda_view', $data);
    }
    
    public function save_datadiri($id) {
       // debugCode($id);
       $table_field = $this->db->list_fields("dc_data_diri");
        $insert = array();
        foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
        }
        // debugCode($insert);
        // $insert['date_created']= date("Y-m-d H:i:s");
        // $insert['id_creator']=$this->session->userdata['admin']['id'];
        $query=update("dc_data_diri",$insert,'id',$id);
       
        redirect("data_pemohon/".$id);
    }

    public function save_riwayat_pendidikan($id) {
       // debugCode($id);
       $table_field = $this->db->list_fields("dc_riwayat_pendidikan");
        $insert = array();
        foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
        }
        //debugCode($insert);
        // $insert['date_created']= date("Y-m-d H:i:s");
        // $insert['id_creator']=$this->session->userdata['admin']['id'];
        if($_POST['id'] != "" ){
            $query=update("dc_riwayat_pendidikan",$insert,'id',$id);
        }else{
         $query=insert_all("dc_riwayat_pendidikan",$insert);
        
        }
       
        redirect("home/dataPemohon/".$id);
    } 

    public function save_riwayat_pekerjaan($id) {
       // debugCode($id);
       $table_field = $this->db->list_fields("dc_riwayat_pekerjaan");
        $insert = array();
        foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
        }
        //debugCode($insert);
        // $insert['date_created']= date("Y-m-d H:i:s");
        // $insert['id_creator']=$this->session->userdata['admin']['id'];
        if($_POST['id'] != "" ){
            $query=update("dc_riwayat_pekerjaan",$insert,'id',$id);
        }else{
          $query=insert_all("dc_riwayat_pekerjaan",$insert);
        
        }

       
        redirect("home/dataPemohon/".$id);
    }

    public function save_permohonan_paspor($id) {
       // debugCode($id);
       $table_field = $this->db->list_fields("dc_permohonan_paspor");
        $insert = array();
        foreach ($table_field as $field) {
            $insert[$field] = $this->input->post($field);
        }
        //debugCode($insert);
        // $insert['date_created']= date("Y-m-d H:i:s");
        // $insert['id_creator']=$this->session->userdata['admin']['id'];
        if($_POST['id'] != "" ){
            $query=update("dc_permohonan_paspor",$insert,'id',$id);
        }else{
          $query=insert_all("dc_permohonan_paspor",$insert);
        
        }

       
        redirect("home/dataPemohon/".$id);
    }
}
    
  