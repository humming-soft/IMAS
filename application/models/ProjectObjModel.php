<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ProjectObjModel extends CI_Model
{
	
		function getObjectiveByProjectId($id){
			$this->db->select('proj_obj_id, proj_id, proj_obj, created_at, modified_at, created_by, modified_by');
			$this->db->from('tbl_project_obj');
			$this->db->where('proj_id',$id);
			return $this->db->get()->result();
		}

		function insertProjectObj($data){
			$this->db->insert('tbl_activity_log', $data);
			return $this->db->insert_id();
		}
	
}
?>