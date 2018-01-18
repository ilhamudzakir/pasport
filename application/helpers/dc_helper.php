<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function debugCode($r=array(),$f=TRUE){
	echo "<pre>";
	print_r($r);
	echo "</pre>";
	
	if($f==TRUE)
		die;
}
function get_client_ip_server() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
	}

	function get_bln($date){
		$bln=substr($date, 5,2);
		$tgl=substr($date, 8,2);
		$thn=substr($date, 0,4);
		$monthNum = $bln;
 		$monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
 		$date=$monthName." ".$tgl.", ".$thn;
 		return $date;
	}

	function get_date($date){
		$yrdata= strtotime($date);
    	return date('D, d M Y ', $yrdata);
	}
	function get_name_admin($id){
		$CI =& get_instance();
   		$CI->load->database(); 
		$query=$CI->db->query("select * from ".$this->tbl_user." where id='".$id."'")->row();
		$name=$query->username;
		return $name;
	}
	function idr($angka){
		$angka ="IDR. ".number_format($angka,2,',','.');
		$duitnya=str_replace(",00", "", $angka);
		return $duitnya;
	
	}
	function toMoney($arg) {
         return number_format($arg,2,",",".");
   }
	function persen($data1,$data2){
		$data=$data2*100/$data1;
		return $data;
	}

	function get_days_left($day){
		$date1 = new DateTime(substr($day,0,10)); 
  		$date2 = new DateTime(date('Y-m-d')); 
  		$diff = $date2->diff($date1)->format("%a"); 
  		$days = intval($diff);  
  		return $days;
	}

	function url($val){
		$a=str_replace(' ','-', $val);
		$b=str_replace(',','', $a);
		$c=str_replace('.','', $b);
		return $c;

	}
	function get_count($table){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->from($table);
		return $ci->db->get()->num_rows();
	}
	function select_all($table){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->from($table);
		$data = $ci->db->get();
		return $data->result();
	}

	function select_all_order_row($table,$order,$order_type){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->from($table);
		$ci->db->order_by($order,$order_type);
		$data = $ci->db->get();
		return $data;
	}
	function select_where($table,$column,$where){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->from($table);
		$ci->db->where($column,$where);
		$data = $ci->db->get();
		return $data;
	}
	function select_where_order($table,$column,$where,$order_by,$order_type){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->from($table);
		$ci->db->where($column,$where);
                $ci->db->order_by($order_by, $order_type);
		$data = $ci->db->get();
		return $data;
	}
    function select_where_limit_order($table,$column,$where,$limit,$order_by,$order_type){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->where($column,$where);
                $ci->db->order_by($order_by, $order_type);
		$data = $ci->db->get($table,$limit);
		return $data;
	}

	function select_where_array_limit_order($table,$array,$limit,$order_by,$order_type){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->where($array);
        $ci->db->order_by($order_by, $order_type);
		$data = $ci->db->get($table,$limit);
		return $data;
	}

	function select_where_offset_limit_order($table,$column,$where,$offset,$limit,$order_by,$order_type){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->where($column,$where);
        $ci->db->order_by($order_by, $order_type);
		$ci->db->limit($offset, $limit);
		$data = $ci->db->get($table);
		return $data;
	}
	function select_where_array($table,$where){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->from($table);
		$ci->db->where($where);
		$data = $ci->db->get();
		return $data;
	}
	function select_where_array_group($table,$where,$group){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->from($table);
		$ci->db->where($where);
		$ci->db->group_by($group);
		$data = $ci->db->get();
		return $data;
	}
	function select_where_array_order($table,$where,$order_by,$order_type){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->from($table);
		$ci->db->where($where);
		$ci->db->order_by($order_by, $order_type);
		$data = $ci->db->get();
		return $data;
	}

	function insert_all($table,$data) {
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		if(!$ci->db->insert($table,$data))
			return FALSE;
		$data["id"] = $ci->db->insert_id();
		return (object)$data;
	}
	function insert_all_batch($table,$data) {
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		if(!$ci->db->insert_batch($table,$data))
			return FALSE;
		$data["id"] = $ci->db->insert_id();
		return (object)$data;
	}
	function update($table,$data,$column,$where){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->where($column,$where);
		return $ci->db->update($table,$data); 
	}
	function update_where_array($table,$data,$where){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->where($where);
		return $ci->db->update($table,$data); 
	}
	function update_one($table,$column,$where,$target,$action){
		$ci->db->set($target, $target.$action, FALSE);
		$ci->db->where($column, $where);
		return $ci->db->update($table);
	}
	function delete($table,$column,$where){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->where($column,$where);
		return $ci->db->delete($table);
	}
	function delete_where_array($table,$where){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->where($where);
		return $ci->db->delete($table);
	}
    function select_all_limit($table, $limit){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$data = $ci->db->get($table, $limit);
		return $data;
	}
        function select_all_limit_order($table, $limit, $order_by, $order){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
                $ci->db->order_by($order_by, $order);
		$data = $ci->db->get($table, $limit);
		return $data;
	}

    function select_all_order($table, $order_by, $order){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->from($table);
        $ci->db->order_by($order_by, $order);
		$data = $ci->db->get();
		return $data->result();
	}
	function get_paging($table,$limit,$from,$order,$type) {
		$ci->db->select('*');
		$ci->db->from($table);
		$ci->db->limit($limit,$from);
		$ci->db->order_by($order,$type);
		return $ci->db->get()->result();
	}
        
        function get_paging_where($table,$column,$where,$limit,$from,$order,$type) {
		$ci->db->select('*');
		$ci->db->from($table);
		$ci->db->limit($limit,$from);
                $ci->db->where($column,$where);
		$ci->db->order_by($order,$type);
		return $ci->db->get()->result();
	}
        
        function select_all_limit_random($table, $limit){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
                $ci->db->order_by('id', 'RANDOM');
                $ci->db->limit($limit);
		$ci->db->from($table);
		$data = $ci->db->get();
		return $data->result();
	}
        
        function select_where_double_order($table,$column,$where,$column2,$where2,$order_by,$order_type){
		$ci=& get_instance();
		$ci->load->database('default',TRUE);
		$ci->db->select('*');
		$ci->db->from($table);
		$ci->db->where($column,$where);
                $ci->db->where($column2,$where2);
                $ci->db->order_by($order_by, $order_type);
		$data = $ci->db->get();
		return $data;
	}
function tanggal_indo($tanggal)
{
	$bulan = array (

		0 =>   '0',
				'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}

if (!function_exists('get_api_key'))
	{
		function get_api_key()
		{
			$ci =&get_instance();
			$ci->config->load('rest');
			$valid_login = $ci->config->item('rest_valid_logins');
			foreach ($valid_login as $key => $value) {
				$user_api = $key;
				$user_password = $value;
			}
			return 'http://'.$user_api.':'.$user_password.'@'.str_replace('http://','',base_url()).'api/';
		}
	}

if (!function_exists('curl_get_contents'))
{
	function curl_get_contents($url)
	{
	  $ch = curl_init($url);
	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	  $data = curl_exec($ch);
	  curl_close($ch);
	  return $data;
	}
}

if (!function_exists('_request'))
{
function _request($url,$param,$type)
    {
        //call requesst API
        $ci =&get_instance();
        $ci->load->library('rest');
        $config = array('server' => get_api_key());

        $ci->rest->initialize($config);

        if($type == "get")
        {
            $req = $ci->rest->get($url,$param);
        }
        elseif($type == "post")
        {
            $req = $ci->rest->post($url,$param);
        }else
        {
        	$req = $ci->rest->put($url,$param);
        }

        return $req;

    }
   }

if (!function_exists('_request_exp'))
{
function _request_exp($url,$param,$type,$mimetype='json')
    {
        //call requesst API
        $ci =&get_instance();
        $ci->load->library('rest');
        $config = array('server' => get_api_key());

        $ci->rest->initialize($config);

        if($type == "get")
        {
            $req = $ci->rest->get($url,$param,$mimetype);
        }
        elseif($type == "post")
        {
            $req = $ci->rest->post($url,$param);
        }else
        {
        	$req = $ci->rest->put($url,$param);
        }

        return $req;

    }
   }
function _bctrim($str) {
      if( preg_match('/.([^.]*$)/',$str)) {
         $tmp_str = rtrim($str,"0");
         $tmp_str = rtrim($tmp_str,".");
      } else {
         $tmp_str = $str;
      }
      return $tmp_str;
   }

function proficiency_level_name($str){
	if($str==0){
		return "Unskilled";
	}
	if($str==1){
		return "Semiskilled";
	}
	if($str==2){
		return "Skilled";
	}
	if($str==3){
		return "Very Skilled";
	}
	if($str==4){
		return "Expert";
	}
}

function login_api(){
	$url=file_get_contents('https://antrian.imigrasi.go.id/Antrian/api/login.jsp?Username=audie.dev&Password=1234');
    $js=utf8_encode($url);
    $data=json_decode($js);
    
    return $data;
}