<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ObjectiveModel extends CI_Model
{

	    //Project Types
		function getAllObjectives($status){
			$this->db->select('obj_id, obj_name, obj_status, created_at, modified_at, created_by, modified_by');
			$this->db->from('tbl_objectives');
			$this->db->where('obj_status',$status);
			$this->db->order_by('obj_name');
			return $this->db->get()->result();
		}
	
		function getObjectiveById($id){
			$this->db->select('obj_id, obj_name, obj_status, created_at, modified_at, created_by, modified_by');
			$this->db->from('tbl_objectives');
			$this->db->where('obj_id', $id);
			return $this->db->get()->result();
		}
	
}
?>