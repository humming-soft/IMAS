<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class AgencyModel extends CI_Model
{
    //Procurement Agencies
    function getAllAgencies(){
        $this->db->select('proc_agcy_id, proc_agcy_name');
		$this->db->from('tbl_proc_agency');
		$this->db->order_by('proc_agcy_name');
		return $this->db->get()->result();
    }

    function getAgencyById($id){
        $this->db->select('proc_agcy_id, proc_agcy_name');
        $this->db->from('tbl_proc_agency');
        $this->db->where('prog_id', $id);
		return $this->db->get()->result();
    }

}