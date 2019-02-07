<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class SectorModel extends CI_Model
{

    function getAllSectors(){
        $this->db->select('proc_agcy_sec_id, proc_agcy_id, proc_agcy_sec_name,');
		$this->db->from('tbl_proc_agency_sector');
		$this->db->order_by('proc_agcy_sec_name');
		return $this->db->get()->result();
    }

    function getSectorById($id){
        $this->db->select('proc_agcy_sec_id, proc_agcy_id, proc_agcy_sec_name,');
		$this->db->from('tbl_proc_agency_sector');
        $this->db->where('proc_agcy_sec_id', $id);
		return $this->db->get()->result();
    }

    function getSectorByAgency($id){
        $this->db->select('proc_agcy_sec_id, proc_agcy_sec_name');
		$this->db->from('tbl_proc_agency_sector');
        $this->db->where('proc_agcy_id', $id);
		return array_column($this->db->get()->result_array(),'proc_agcy_sec_name','proc_agcy_sec_id');
    }

}