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

    public function save_riwayat_pendidikan($param,$id) {
       //debugCode($id);
       print_r($id);
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
       
        redirect("data_pemohon/".$param);
    }  

    public function save_data_alamat($id) {
       //debugCode($id);
       // print_r($id);
        // debugCode(count($_POST['type_alamat']));
        if (isset($_POST['ktp'])) {
            $ktp = 1;
        }else{
            $ktp = 0;
        }
        for($i=0; $i<2; $i++){
            $arrayAddress = array(
                'id_data_diri' => $id, 
                'type_alamat' => $_POST['type_alamat'][$i], 
                'id_negara' => $_POST['id_negara'][$i], 
                'id_provinsi' =>$_POST['id_provinsi'][$i], 
                'id_kota' =>$_POST['id_kota'][$i], 
                'id_kecamatan' => $_POST['id_kecamatan'][$i], 
                'alamat' => $_POST['alamat'][$i], 
                'telepon' => $_POST['telepon'][$i], 
                'hp' => $_POST['hp'][$i], 
                'nomer_pos' => $_POST['nomer_pos'][$i], 
                'ktp' => $ktp, 
                'email' =>$_POST['email'][$i], 
            );

            if($_POST['id'][$i] != "" ){
                $query=update("dc_alamat_pengaju_paspor",$arrayAddress,'id',$_POST['id'][$i]);
            }else{
                $query=insert_all("dc_alamat_pengaju_paspor",$arrayAddress);
            
            }
            // insert_all('dc_alamat_pengaju_paspor',$arrayAddress);
        }
     
       
        redirect("data_pemohon/".$id);
    } 

    public function save_riwayat_pekerjaan($param,$id) {
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

       
       redirect("data_pemohon/".$param);
    }

    public function save_permohonan_paspor($param,$id) {
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

       
        redirect("data_pemohon/".$param);
    }
}
    
  