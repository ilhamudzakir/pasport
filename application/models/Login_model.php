<?php

class Login_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }
    
    function updateLastLogin($empID, $empName) {
        $this->db->trans_start();
        $this->db->set('last_login', 'now()', false);
        $this->db->where('emp_id', $empID)->update('m_user_login');
        if($this->db->affected_rows() == 0) {
            $this->db->set('emp_id', $empID);
            $this->db->set('emp_name', $empName);
            $this->db->set('last_login', 'now()', false);
            $this->db->insert('m_user_login');
        }
        $this->db->trans_complete();
    }
    
}