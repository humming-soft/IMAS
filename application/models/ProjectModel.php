<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ProjectModel extends CI_Model
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
		$this->db->select('t1.proj_id, t1.proj_name, t1.proj_desc, t1.proj_ref_no, t1.proj_type as proj_type_id, t3.proj_type, t1.proj_status, t1.proj_progress_status, t1.created_at, t1.modified_at, t1.created_by, t1.modified_by');
		$this->db->from('tbl_projects as t1');
		$this->db->join('tbl_programme_project as t2', 't1.proj_id = t2.proj_id', 'LEFT');
		$this->db->join('tbl_project_type as t3', 't1.proj_type = t3.proj_type_id', 'LEFT');
		$this->db->where('t1.proj_status', $status);
		$this->db->where('t2.prog_id', $id);
		$result = $this->db->get()->result();
		$CI =& get_instance();
		$CI->load->model('projectobjmodel');
		$CI->load->model('projectrecipientsmodel');
		$CI->load->library('imasencryption');
		foreach($result as &$row){
			$row->id_encoded = $CI->imasencryption->encode($row->proj_id);
			$row->proj_objs = $CI->projectobjmodel->getObjectiveByProjectId($row->proj_id);
			$row->proj_recs = $CI->projectrecipientsmodel->getRecipientsByProjectId($row->proj_id);
		}
		return $result;
		// echo '<pre>';
		// print_r($result);
		// echo '<pre>';
		// exit();
	}

	function getProjectsByProgramme2($id, $status){
		$this->db->select('t1.proj_id, t1.proj_name, t3.proj_type, t1.proj_progress_status');
		$this->db->from('tbl_projects as t1');
		$this->db->join('tbl_programme_project as t2', 't1.proj_id = t2.proj_id', 'LEFT');
		$this->db->join('tbl_project_type as t3', 't1.proj_type = t3.proj_type_id', 'LEFT');
		$this->db->where('t1.proj_status', $status);
		$this->db->where('t2.prog_id', $id);
		$result = $this->db->get()->result();
		$CI =& get_instance();
		$CI->load->model('projectobjmodel');
		$CI->load->model('projectrecipientsmodel');
		$CI->load->library('imasencryption');
		foreach($result as &$row){
			$row->id_encoded = $CI->imasencryption->encode($row->proj_id);
		}
		return $result;
	}

	function getProjectCountByProgramme($id, $status){
		$this->db->select('COUNT(*)');
		$this->db->from('tbl_projects as t1');
		$this->db->join('tbl_programme_project as t2', 't1.proj_id = t2.proj_id', 'LEFT');
		$this->db->where('t1.proj_status', $status);
		$this->db->where('t2.prog_id', $id);
		return $this->db->get()->result()[0]->count;
		
	}

	function getProjectCountGroupByStatus($id, $status){
		$this->db->select('proj_progress_status, COUNT(*) as count');
		$this->db->from('tbl_projects as t1');
		$this->db->join('tbl_programme_project as t2', 't1.proj_id = t2.proj_id', 'LEFT');
		$this->db->where('t1.proj_status', $status);
		$this->db->where('t2.prog_id', $id);
		$this->db->group_by('t1.proj_progress_status');
		return $this->db->get()->result();
		
	}

	function insertProject($data){
		$projectname =$data['proj_name'];
		$this->db->trans_begin();
		$pdata  = array(   
			'proj_name' =>  $data['proj_name'],
			'proj_desc' =>  $data['proj_desc'],
			'proj_ref_no' =>  $data['proj_ref_no'],
			'proj_type' =>  $data['proj_type'],
			'created_at'=> $data['created_at'],
			'modified_at'=> $data['modified_at'],
			'created_by'=> $data['created_by'],
			'modified_by'=> $data['modified_by']
		);
		$this->db->insert('tbl_projects', $pdata);
		$proj_id = $this->db->insert_id();
		if($proj_id > 0){
			// programme -> Project Relation Table
			$pgdata  = array(
				'prog_id' => $data['prog_id'],   
				'proj_id' => $proj_id, 
				'created_at'=> $data['created_at'],
				'modified_at'=> $data['modified_at'],
				'created_by'=> $data['created_by'],
				'modified_by'=> $data['modified_by']
			);
			$this->db->insert('tbl_programme_project', $pgdata);

			// Project Objective Relation Table
			$CI =& get_instance();
			$CI->load->model('objectivemodel');
			$odata = array();
			foreach($data['proj_obj'] as $proj_ob){
				$obj = array();
				$obj['proj_id'] = $proj_id;
				$obj['created_at'] = $data['created_at'];
				$obj['modified_at'] = $data['modified_at'];
				$obj['created_by'] = $data['created_by'];
				$obj['modified_by'] = $data['modified_by'];
				if($proj_ob !=0){
					$obj['proj_obj'] = $CI->objectivemodel->getObjectiveById($proj_ob)[0]->obj_name;
				}else{
					$obj['proj_obj'] =$data->proj_obj_other;
				}
				array_push($odata,$obj);
			}
			$this->db->insert_batch('tbl_project_obj', $odata);

			// Project Recipient Relation Table
			$rdata  = array(
				'proj_id' => $proj_id,      
				'proj_rec_name' =>  $data['proj_rec_name'],
				'proj_rec_addr_line1' =>  $data['proj_rec_addr_line1'],
				'proj_rec_addr_line2' =>  $data['proj_rec_addr_line2'],
				'proj_rec_addr_line3' =>  $data['proj_rec_addr_line3'],
				'proj_rec_cont_name' =>  $data['proj_rec_cont_name'],
				'proj_rec_cont_no' =>  $data['proj_rec_cont_no'],
				'proj_rec_cont_email' =>  $data['proj_rec_cont_email'],
				'created_at'=> $data['created_at'],
				'modified_at'=> $data['modified_at'],
				'created_by'=> $data['created_by'],
				'modified_by'=> $data['modified_by']
			);
			$this->db->insert('tbl_projects_recipients', $rdata);
			// project inserted as milestone parent is =0
			// Code added by ANCY MATHEW - 12-02- 2019
			$milestone = array(
					'proj_id' => $proj_id,
					'task_name' =>  $projectname,
					'task_type' => 'project',
					'task_parent_id' => 0,
					'task_status' => 1,
				    'task_color' => '#1220b7',
					'created_at'=> date('Y-m-d H:i:s'),
					'modified_at'=> date('Y-m-d H:i:s'),
					'created_by'=> 1,
					'modified_by'=> 1
			);
			$this->db->insert('tbl_task', $milestone);
			//Code END ANCY

		}else{
			$this->db->trans_rollback();
			return FALSE;
		}
		if ($this->db->trans_status() === FALSE) {
			$this->db->trans_rollback();
			return FALSE;
		} else {
			$this->db->trans_commit();
			return TRUE;
		}
	}

	function getProjectById($id,$uid,$status){
		$this->db->select('t1.proj_id, t1.proj_name, t1.proj_desc, t1.proj_ref_no, t1.proj_type as proj_type_id, t3.proj_type, t1.proj_status, t1.proj_progress_status, t1.created_at, t1.modified_at, t1.created_by, t1.modified_by');
		$this->db->from('tbl_projects as t1');
		$this->db->join('tbl_project_type as t3', 't1.proj_type = t3.proj_type_id', 'LEFT');
		$this->db->where('t1.proj_status', $status);
		$this->db->where('t1.proj_id', $id);
		$this->db->where('t1.created_by', $uid);
		$result = $this->db->get()->result();
		$CI =& get_instance();
		$CI->load->model('projectobjmodel');
		$CI->load->model('projectrecipientsmodel');
		$CI->load->library('imasencryption');
		foreach($result as &$row){
			$row->id_encoded = $CI->imasencryption->encode($row->proj_id);
			$row->proj_objs = $CI->projectobjmodel->getObjectiveByProjectId($row->proj_id);
			$row->proj_recs = $CI->projectrecipientsmodel->getRecipientsByProjectId($row->proj_id);
		}
		return $result;
	}
}
?>