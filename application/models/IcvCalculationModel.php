<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class IcvCalculationModel extends CI_Model
{
	function insertMilestone($data){
		$this->db->insert('tbl_task', $data);
		return $this->db->insert_id();
	}
	public function get_icv_milestone($proj_id,$status)
	{
		$data = array();
		$milestone = array();
		$activity = array();
		$this->db->select('t.task_id,t.proj_id, t.task_name, t.task_start_date, t.task_end_date, t.task_duration, t.task_type, t.task_progress, t.task_parent_id,coalesce(m.nonmlc_value,0) as nonmlc_value, coalesce(m.nonmlc_multiplier,0) as nonmlc_multiplier, 
coalesce(m.nonmlc_mu,0) as nonmlc_mu,coalesce(m.mlc_value,0) as mlc_value,coalesce( m.mlc_multiplier,0) as mlc_multiplier,coalesce(m. mlc_mu,0) as mlc_mu, coalesce(m.row_total,0) as row_total');
		$this->db->from('tbl_milestone_icv as m');
		$this->db->where('t.proj_id', $proj_id);
		$this->db->where('t.task_type', 'milestone');
		$this->db->where('t.task_status', $status);
		$this->db->join('tbl_task as t', 'm.task_id=t.task_id', 'RIGHT');
		$result = $this->db->get()->result();
		foreach($result as $key => $value)
		{
			$data['order'] =$key + 1;
			$data['milestone_id'] = $value->task_id;
			$data['milestone_text'] = $value->task_name;
			$data['milestone_start_date'] = date("d-M-Y", strtotime($value->task_start_date));
			$data['milestone_end_date'] = date("d-M-Y", strtotime($value->task_end_date));
			$data['nonmlc'] = $value->nonmlc_value;
			$data['nonmlcMul'] = $value->nonmlc_multiplier;
			$data['nonmlcMu'] = $value->nonmlc_mu;
			$data['mlc'] = $value->mlc_value;
			$data['mlcMul'] = $value->mlc_multiplier;
			$data['mlcMu'] = $value->mlc_mu;
			$data['total'] = $value->row_total;
			$data['milestone_progress'] = (double)$value->task_progress * 100;
			/*$count = $this->has_child($value->task_id, $proj_id);
			$data['activity_count'] = $count;
				if($count > 0){
					$activities = $this->get_activities($value->task_id,$proj_id,1);
					$data['activities']=array();
					foreach($activities as $key1 => $value1)
					{
						$activity['activity_id'] = $value1->task_id;
						$activity['activity_text'] = $value1->task_name;
						$activity['activity_start_date'] = date("d-M-Y", strtotime($value1->task_start_date));
						$activity['activity_end_date'] = date("d-M-Y", strtotime($value1->task_end_date));
						$activity['activity_progress'] = (double)$value1->task_progress * 100;
						array_push($data['activities'],$activity);
					}
				}*/
			array_push($milestone,$data);
		}
		return $milestone;
	}
	public function get_icv_project($proj_id,$status)
	{
		$data = array();
		$milestone = array();
		$this->db->select('icv_projects_id, proj_id, icv_nonmlc, icv_mlc, icv_total');
		$this->db->from('tbl_icv_projects ');
		$this->db->where('proj_id', $proj_id);
		$result = $this->db->get()->result();
		foreach($result as $key => $value)
		{
			$data['p_nonmlc'] = $value->icv_nonmlc;
			$data['p_mlc'] = $value->icv_mlc;
			$data['p_total'] = $value->icv_total;
			array_push($milestone,$data);
		}
		return $milestone;
	}
	public function get_icv_multiplier_non()
	{
		$this->db->select('mul_id, mul_type_id, mul_text');
		$this->db->from('tbl_multiplier');
		$this->db->order_by('mul_id');
		$this->db->where('mul_type_id', 1);
		$result = $this->db->get()->result();
		return $result;
	}
	public function get_icv_multiplier()
	{
		$this->db->select('mul_id, mul_type_id, mul_text');
		$this->db->from('tbl_multiplier');
		$this->db->order_by('mul_id');
		$this->db->where('mul_type_id', 2);
		$result = $this->db->get()->result();
		return $result;
	}
	function has_child($taskId,$pjt_id){
		$this->db->select('count(*) as count');
		$this->db->from('tbl_task');
		$this->db->where('proj_id', $pjt_id);
		$this->db->where('task_status', 1);
		$this->db->where('task_parent_id', $taskId);
		$result1 = $this->db->get()->result();
		foreach($result1 as $key => $value)
		{
			$count = $value->count;
		}
		return $count;
	}
	function get_activities($parentId,$pjt_id,$status){
		$this->db->select('task_id, proj_id, task_name, task_start_date, task_end_date, task_duration, task_type, task_progress,task_color, task_parent_id,task_status, created_by, modified_by');
		$this->db->from('tbl_task');
		$this->db->where('proj_id', $pjt_id);
		$this->db->where('task_parent_id', $parentId);
		$this->db->where('task_status', $status);
		$result1 = $this->db->get()->result();
		return $result1;
	}
	function get_multiplier_items($MulId){
		$this->db->select(' mul_item_value,mul_item_text');
		$this->db->from('tbl_multiplier_items');
		$this->db->where('mul_id', $MulId);
		return array_column($this->db->get()->result_array(),'mul_item_text','mul_item_value');
	}
	function insertICV_project($data){
		$this->db->insert('tbl_icv_projects', $data);
		return $this->db->insert_id();
	}
	function insertICV_milestone($data){
		$this->db->insert('tbl_milestone_icv', $data);
		return $this->db->insert_id();
	}
	function update_project_icv($data,$pjt_id){
		$this->db->where('proj_id', $pjt_id);
		$this->db->update('tbl_icv_projects',$data);
		$updated_status = $this->db->affected_rows();
		if($updated_status){
			return 1;
		}else{
			return 0;
		}
	}
	function update_milestone_icv($pjt_id,$data){
		$this->db->where('task_id', $pjt_id);
		$this->db->update('tbl_milestone_icv',$data);
		$updated_status = $this->db->affected_rows();
		if($updated_status){
			return 1;
		}else{
			return 0;
		}
	}
	function get_count_project_icv($pjt_id){
		$this->db->select('count(*) as count');
		$this->db->from('tbl_icv_projects');
		$this->db->where('proj_id', $pjt_id);
		$result1 = $this->db->get()->result();
		foreach($result1 as $key => $value)
		{
			$count = $value->count;
		}
		return $count;
	}
	function get_count_milestone_icv($task_id){
		$this->db->select('count(*) as count');
		$this->db->from('tbl_milestone_icv');
		$this->db->where('task_id', $task_id);
		$result1 = $this->db->get()->result();
		foreach($result1 as $key => $value)
		{
			$count = $value->count;
		}
		return $count;
	}
	function insertBenefits($data){
		$this->db->insert('tbl_indirect_task_benefits', $data);
		return $this->db->insert_id();
	}
}
?>