<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class BenefitsModel extends CI_Model
{
	public function get_benefits_nkea(){
		$this->db->select('benefits_nkea_id, benefits_nkea_text');
		$this->db->from('tbl_benefits_nkea');
		$result = $this->db->get()->result();
		return $result;
	}
	public function get_benefits_focusingArea(){
		$this->db->select('benefits_focusing_area_id, benefits_focusing_area_text');
		$this->db->from('tbl_benefits_focusing_area');
		$result = $this->db->get()->result();
		return $result;
	}
    public function get_benefits_offsets(){
		$this->db->select('benefits_offset_id, benefits_offset_text');
		$this->db->from('tbl_benefits_offset');
		$result = $this->db->get()->result();
		return $result;
	}
	function add_project_benefits($data){
		return $this->db->insert('tbl_pjt_benefits', $data);
	}
	public function get_project_benefits($pjt_id){
		$this->db->select('benefits_nkea_id, benefits_focusing_area_id, benefits_offset_id');
		$this->db->from('tbl_pjt_benefits');
		$this->db->where('proj_id', $pjt_id);
		$this->db->where('benefit_status', 1);
		$result = $this->db->get()->result();
		return $result;
	}
}
?>