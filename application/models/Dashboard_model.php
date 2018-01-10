<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function getBoxCount($type, $status = "", $year = "")
    {   
        if($year == ""){ $year = date("Y"); }
        $arrWhere = array(date("Ym"),$year);
        if($type == 1) { // based on prospect_date
            $q = "select count(mp.prospect_id) qty_year, ifnull(sum(if(date_format(mp.".($status=="= 1"?"prospect_date":"last_update_status").",'%Y%m') = ?,1,0)),0) qty_month, 
                    ifnull(sum(if(date_format(mp.prospect_date,'%Y%m') = date_format(mp.created_date,'%Y%m'),if(date_format(mp.prospect_date,'%Y%m') = '".date("Ym")."',1,0),if(date_format(mp.created_date,'%Y%m') = '".date("Ym")."',1,0))),0) qty_month_diff
                    from m_prospect mp where (date_format(mp.prospect_date,'%Y') = ? or date_format(mp.created_date,'%Y') = ? or date_format(mp.last_update_status,'%Y') = ?) and mp.prospect_status $status";
            $arrWhere = array(date("Ym"),$year,$year,$year);
        } else if($type == 2) { // based on last_update_status
            $q = "select count(mp.prospect_id) qty_year, ifnull(sum(if(date_format(mp.last_update_status,'%Y%m') = ?,1,0)),0) qty_month
                    from m_prospect mp where date_format(mp.last_update_status,'%Y') = ? and mp.prospect_status $status";
        } else if($type == 3) { // get new client data
            $q = "select count(a.client_id) qty_year, ifnull(sum(if(a.month_desc = ?,1,0)),0) qty_month 
                    from (select mc.client_id, mc.client_name, date_format(mp.last_update_status,'%m') month_desc
                    from m_prospect mp, m_client mc where mp.client_id = mc.client_id and mp.prospect_status = 2 
                    and date_format(mp.last_update_status,'%Y') = ? and mc.client_status = 1 
                    group by mc.client_id order by mp.last_update_status desc) a";
        }
        $query = $this->db->query($q, $arrWhere);
        return $query->row_array();        
    }
    
    public function getGoalGaugeData($year)
    {
        $q = "select format(sum(if(mp.prospect_status = 2,1,0))/count(mp.prospect_id)*100,2) goal, format(sum(if(mp.prospect_status = 3,1,0))/count(mp.prospect_id)*100,2) reject, format(sum(if(mp.prospect_status = 1,1,0))/count(mp.prospect_id)*100,2) ongoing, format(sum(if(mp.prospect_status = 5,1,0))/count(mp.prospect_id)*100,2) failed
              from m_prospect mp where mp.prospect_status in (2,3,1,5) and (date_format(mp.prospect_date,'%Y') = ? or date_format(mp.created_date,'%Y') = ? or date_format(mp.last_update_status,'%Y') = ?)";
        $query = $this->db->query($q, array($year,$year,$year));
        return json_encode($query->row_array());        
    }
    
    public function getSalesinYearData($year)
    {
        $q = "select ifnull(sum(if(ms.id = 1,if(mpd.unit_price=1,(mpd.price*mpd.participant*mpd.batch),mpd.price*mpd.batch),0)),0) ast,
                ifnull(sum(if(ms.id = 2,if(mpd.unit_price=1,(mpd.price*mpd.participant*mpd.batch),mpd.price*mpd.batch),0)),0) est,
                ifnull(sum(if(ms.id = 3,if(mpd.unit_price=1,(mpd.price*mpd.participant*mpd.batch),mpd.price*mpd.batch),0)),0) odt,
                ifnull(sum(if(ms.id = 4,if(mpd.unit_price=1,(mpd.price*mpd.participant*mpd.batch),mpd.price*mpd.batch),0)),0) pmt
                from m_services ms left join m_prospect mp on mp.prospect_service = ms.id and mp.prospect_status = 2 
                and date_format(mp.last_update_status,'%Y') = ? and mp.exponen_data = 0
                left join m_prospect_dtl mpd on mp.prospect_id = mpd.prospect_id";
        $query = $this->db->query($q, array($year));
        return json_encode($query->row_array());        
    }
    
    public function getProspectFiveYearsData()
    {
        $curyear = date("Y");
        $q = "select date_format(mp.last_update_status,'%Y') yr, sum(if(mp.prospect_status=2,1,0)) goal, sum(if(mp.prospect_status=3,1,0)) reject, 
                sum(if(mp.prospect_status=4,1,0)) pending, sum(if(mp.prospect_status=5,1,0)) failed
                from m_prospect mp where mp.last_update_status is not null 
                and date_format(mp.last_update_status,'%Y') between ".($curyear-4)." and ".$curyear."
                group by yr order by yr";
        $query = $this->db->query($q);
        return json_encode($query->result_array());        
    }
    
    public function getActivityUpdateData()
    {
        $q = "select mp.prospect_id, mp.prospect_title, if(mpa.activity_type=1,'Meeting',if(mpa.activity_type=2,'Call','Others')) activity, mpa.created_by, mpa.activity_pic, ifnull(concat(date_format(mpa.activity_when,'%b %d, %Y'),' ',time_format(mpa.activity_time,'%H:%i')),'') cdate, mpa.activity_subject, mpa.activity_followup, mpa.exponen_data
                from m_prospect mp, m_prospect_activity mpa where mp.prospect_id = mpa.prospect_id order by mpa.activity_when desc, mpa.activity_time desc limit 10";
        $query = $this->db->query($q);
        return json_encode($query->result_array());        
    }
    
    public function getListDetailProspectView($param)
    {
        if($param["typeView"] != "5") {
            if($param["typeView"] == "1") { $status = "> 0"; }
            else if($param["typeView"] == "2") { $status = "= 2"; }
            else if($param["typeView"] == "3") { $status = "= 1"; }
            else if($param["typeView"] == "4") { $status = "= 5"; }
            $q = "select mp.prospect_id, mc.client_name, mp.prospect_title, ifnull(ms.description,ifnull(mp.prospect_service,'-')) prospect_service, ifnull(mc.client_sales,'-') prospect_pic_sales, mps.description pstatus, ifnull(date_format(mp.prospect_date,'%b %d, %Y'),'-') prospect_date, ifnull(date_format(mp.last_update_status,'%b %d, %Y'),'-') last_update_status, 
                    ifnull((select date_format(activity_when,'%b %d, %Y') from m_prospect_activity mpa where mpa.prospect_id = mp.prospect_id order by activity_when desc limit 1),'-') last_activity, mp.exponen_data, mc.client_id, mc.exponen_data cexpo 
                    from m_prospect mp left join m_services ms on mp.prospect_service = ms.id, m_client mc, m_prospect_status mps where mp.client_id = mc.client_id and mp.prospect_status = mps.id and mps.id $status and (date_format(mp.prospect_date,'%Y') = ? or date_format(mp.created_date,'%Y') = ? or date_format(mp.last_update_status,'%Y') = ?) order by mp.prospect_date";
        }
        $query = $this->db->query($q, array($param["yearView"], $param["yearView"], $param["yearView"]));
        return json_encode($query->result_array());        
    }
    
    public function getListDetailNewClientView($data, $isRaw = FALSE)
    {
        $wheredate = "";
        if($data['daterange'] != "") {
            $arrDate = explode("-", $data['daterange']);
            $wheredate = "and mp.prospect_date between str_to_date('".trim($arrDate[0])."','%b %d, %Y') and str_to_date('".trim($arrDate[1])."','%b %d, %Y')";
        }
        $q = "select mc.client_id, mc.client_name, ifnull(ml.lob_name,'-') lob_name, ifnull(mc.client_address,'-') addr, 
            ifnull(mc.client_phone,'-') phone, ifnull(mc.client_fax,'-') fax, ifnull(mc.client_website,'-') web, 
            ifnull(mc.client_sales,'-') pic, if(ifnull(mc.client_status,0)=1,'Active','Not Active') status,
            ifnull((select GROUP_CONCAT(b.description separator ',') serv from m_prospect a, m_services b where a.prospect_service = b.id and a.client_id = mc.client_id and year(a.last_update_status) = '2017' group by a.client_id order by a.prospect_service),'') service
            from m_prospect mp, m_client mc left join m_lob ml on mc.lob_id = ml.lob_id 
            where mp.client_id = mc.client_id and mp.prospect_status = 2 and date_format(mp.last_update_status,'%Y') = ? 
            $wheredate
            and mc.client_status = 1 group by mc.client_id order by 2";
        $query = $this->db->query($q, array(date("Y")));
        return ($isRaw ? $query->result_array() : json_encode($query->result_array()));        
    }
}
