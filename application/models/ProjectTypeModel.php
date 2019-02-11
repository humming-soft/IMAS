<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ProjectTypeModel extends CI_Model
{

	    //Project Types
		function getAllProjectTypes(){
			$this->db->select('proj_type_id, proj_type, proj_type_desc, created_at, modified_at, created_by, modified_by');
			$this->db->from('tbl_project_type');
			$this->db->order_by('proj_type');
			return $this->db->get()->result();
		}
	
		function getProjectTypeById($id){
			$this->db->select('proj_type_id, proj_type, proj_type_desc, created_at, modified_at, created_by, modified_by');
			$this->db->from('tbl_project_type');
			$this->db->where('proj_type_id', $id);
			return $this->db->get()->result();
		}
	
}
?>