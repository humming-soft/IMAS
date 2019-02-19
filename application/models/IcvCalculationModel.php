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
		$this->db->select('task_id, proj_id, task_name, task_start_date, task_end_date, task_duration, task_type, task_progress,task_color, task_parent_id,task_status, created_by, modified_by');
		$this->db->from('tbl_task');
		$this->db->where('proj_id', $proj_id);
		$this->db->where('task_type', 'milestone');
		$this->db->where('task_status', $status);
		$this->db->order_by('task_id');
		$result = $this->db->get()->result();
		foreach($result as $key => $value)
		{
			$data['order'] =$key + 1;
			$data['milestone_id'] = $value->task_id;
			$data['milestone_text'] = $value->task_name;
			$data['milestone_start_date'] = date("d-M-Y", strtotime($value->task_start_date));
			$data['milestone_end_date'] = date("d-M-Y", strtotime($value->task_end_date));
			$data['milestone_progress'] = (double)$value->task_progress * 100;
			$count = $this->has_child($value->task_id, $proj_id);
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
				}
			array_push($milestone,$data);
		}
		/*print_r(json_encode($milestone));
		exit;*/
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

}
?>