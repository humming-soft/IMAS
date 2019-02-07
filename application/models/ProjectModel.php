<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ProgrammeModel extends CI_Model
{

	function getAllProjects($uid,$status){
		$this->db->select('t1.prog_id, t1.prog_name, t1.prog_desc, t1.proc_value, t2.cur_code_name, t3.cur_scale_name, t4.proc_agcy_name, t5.proc_agcy_sec_name, t1.prog_progress_status, t1.proc_agnecy_id, t1.proc_sector_id, t1.created_at, t1.prog_start_date, t1.prog_end_date');
		$this->db->from('tbl_programmes as t1');
		$this->db->where('t1.created_by', $uid);
		$this->db->where('t1.prog_status', $status);
		$this->db->join('tbl_currency as t2', 't1.currency_code_id = t2.cur_code_id', 'LEFT');
		$this->db->join('tbl_currency_scale as t3', 't1.currency_scale_id = t3.cur_scale_id', 'LEFT');
		$this->db->join('tbl_proc_agency as t4', 't1.proc_agnecy_id = t4.proc_agcy_id', 'LEFT');
		$this->db->join('tbl_proc_agency_sector as t5', 't1.proc_sector_id = t5.proc_agcy_sec_id', 'LEFT');
		$this->db->order_by('t1.created_at', 'desc');
		return $this->db->get()->result();
	}

	function getProjectsByProgramme($id, $status){
		$this->db->select('t1.proj_id, t1.proj_name, t1.proj_desc, t1.proj_ref_no, t1.proj_type, t1.proj_status, t1.created_at, t1.modified_at, t1.created_by, t1.modified_by');
		$this->db->from('tbl_projects as t1');
		$this->db->where('t1.proj_status', $status);
		$this->db->join('tbl_programme_project as t2', 't1.prog_id = t2.prog_id', 'LEFT');
	}


	function insertProject($data){
		$this->db->insert('tbl_programmes', $data);
		return $this->db->insert_id();
	}

	function getProjectById($id,$uid,$status){
		$this->db->select('t1.prog_id, t1.prog_name, t1.prog_desc, t1.proc_value, t2.cur_code_name, t3.cur_scale_name, t4.proc_agcy_name, t5.proc_agcy_sec_name, t1.prog_progress_status, t1.proc_agnecy_id, t1.proc_sector_id, t1.created_at, t1.prog_start_date, t1.prog_end_date');
		$this->db->from('tbl_programmes as t1');
		$this->db->where('t1.prog_id', $id);
		$this->db->where('t1.created_by', $uid);
		$this->db->where('t1.prog_status', $status);
		$this->db->join('tbl_currency as t2', 't1.currency_code_id = t2.cur_code_id', 'LEFT');
		$this->db->join('tbl_currency_scale as t3', 't1.currency_scale_id = t3.cur_scale_id', 'LEFT');
		$this->db->join('tbl_proc_agency as t4', 't1.proc_agnecy_id = t4.proc_agcy_id', 'LEFT');
		$this->db->join('tbl_proc_agency_sector as t5', 't1.proc_sector_id = t5.proc_agcy_sec_id', 'LEFT');
		return $this->db->get()->result();
	}

	function getProjectByName($name,$uid,$status){
		$this->db->select('prog_id, prog_name, prog_desc, proc_value, currency_code_id, currency_scale_id, proc_agnecy_id, proc_sector_id, prog_start_date, prog_end_date');
		$this->db->from('tbl_programmes');
		$this->db->where('prog_name', $name);
		$this->db->where('created_by', $uid);
		$this->db->where('prog_status', $status);
		return $this->db->get()->result();
	}
}
?>