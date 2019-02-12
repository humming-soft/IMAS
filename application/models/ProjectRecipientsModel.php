<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ProjectRecipientsModel extends CI_Model
{
	
		function getRecipientsByProjectId($id){
			$this->db->select('proj_rec_id, proj_id, proj_rec_name, proj_rec_addr_line1, proj_rec_addr_line2, proj_rec_addr_line3, proj_rec_cont_name, proj_rec_cont_no, proj_rec_cont_email, created_at, modified_at, created_by, modified_by');
			$this->db->from('tbl_projects_recipients');
			$this->db->where('proj_id',$id);
			return $this->db->get()->result();
		}

		function insertRecipients($data){
			$this->db->insert('tbl_projects_recipients', $data);
			return $this->db->insert_id();
		}
	
}
?>