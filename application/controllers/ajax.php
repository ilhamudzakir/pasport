<?php

class ajax extends CI_Controller{

	function __construct()  
	{
		parent::__construct(); 	
	}
	
	function index()  
	{
		redirect(site_url());
	}
	function getProvince($id){
		// debugCode($id);
		$hsl = array();
		if($id == 1){
			$a = select_all("propinsi");
		}else{
			$a ="";
		}
		
		// debugCode($a);
		echo json_encode(array('rows'=>$a));
	}
	function getCity($id){
		
		// debugCode($id);
		
		$a = select_where('kabupaten','propinsi_id',$id)->result();
		// debugCode($a);
		echo json_encode(array('rows'=>$a));
	}
	function getKecamatan($id){
		
		
		$a = select_where('kecamatan','kabupaten_id',$id)->result();
		
		echo json_encode(array('rows'=>$a));
	}
	
}
