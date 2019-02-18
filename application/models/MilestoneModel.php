<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class MilestoneModel extends CI_Model
{
	function insertMilestone($data){
		$this->db->insert('tbl_task', $data);
		return $this->db->insert_id();
	}
	function insertMilestone_link($data){
		$this->db->insert('tbl_task_link', $data);
		return $this->db->insert_id();
	}
	public function get_milestone($status,$proj_id)
	{
		$data = array();
		$milestone = array();
		$milestones = array();
		$milestones_link = array();
		$data_link = array();
		$this->db->select('task_id, proj_id, task_name, task_start_date, task_end_date, task_duration, task_type, task_progress,task_color, task_parent_id,task_status, created_by, modified_by');
		$this->db->from('tbl_task');
		$this->db->where('proj_id', $proj_id);
		$this->db->where('task_status', $status);
		$this->db->order_by('task_id');
		$result = $this->db->get()->result();
		foreach($result as $key => $value)
		{
			$data['id'] = $value->task_id;
			$data['text'] = $value->task_name;
			$data['type'] = $value->task_type;
			if($value->task_type == 'milestone' || $value->task_type == 'project' ) {
				$count = $this->has_child($value->task_id, $proj_id);
				if($count > 0){
					$result2 = $this->calculate_milestone_duration($value->task_id, $proj_id);
					foreach ($result2 as $row) {
						$data['duration'] = $row->duration;
						$data['start_date'] = date("d-m-Y", strtotime($row->sdate));
					}
				}else{
					$data['duration'] = $value->task_duration;
					$data['start_date'] = date("d-m-Y", strtotime($value->task_start_date));
				}

			}
			else{
				$data['duration'] = $value->task_duration;
				$data['start_date'] = date("d-m-Y", strtotime($value->task_start_date));
			}
			$data['progress'] = $value->task_progress;
			$data['parent'] = $value->task_parent_id;
			$data['color'] = $value->task_color;
			array_push($milestone,$data);
		}
		$links = $this->get_milestone_link($proj_id);
		foreach($links as $key => $value)
		{
			$data_link['id'] = $value->task_link_id;
			$data_link['source'] = $value->sourse_id;
			$data_link['target'] = $value->target_id;
			$data_link['type'] = $value->task_link_type;
			array_push($milestones_link,$data_link);
		}
		$milestones['data'] = $milestone;
		$milestones['links'] = $milestones_link;
		return $milestones;
	}
	function delete_milestone($id,$pjt_id,$data){
		$this->db->where('task_id', $id);
		$this->db->where('proj_id', $pjt_id);
		$this->db->update('tbl_task',$data);
		$updated_status = $this->db->affected_rows();
		if($updated_status){
			return $id;
		}else{
			return 0;
		}
	}
	function delete_link($id,$pjt_id,$data){
		$this->db->where('task_link_id', $id);
		$this->db->where('proj_id', $pjt_id);
		$this->db->update('tbl_task_link',$data);
		$updated_status = $this->db->affected_rows();
		if($updated_status){
			return $id;
		}else{
			return 0;
		}
	}
	function update_milestone($id,$pjt_id,$data){
		$this->db->where('task_id', $id);
		$this->db->where('proj_id', $pjt_id);
		$this->db->update('tbl_task',$data);
		$updated_status = $this->db->affected_rows();
		if($updated_status){
			return $id;
		}else{
			return 0;
		}
	}
	function calculate_milestone_duration($taskid,$pjt_id){
		$this->db->select('max(task_end_date) as eDate, min(task_start_date) as sdate, DATE_PART(\'day\', max(task_end_date) - min(task_start_date)) as duration');
		$this->db->from('tbl_task');
		$this->db->where('proj_id', $pjt_id);
		$this->db->where('task_status', 1);
		$this->db->where('task_parent_id', $taskid);
		$result2 = $this->db->get()->result();
		return $result2;
	}
	function get_milestone_link($pjt_id){
		$this->db->select('task_link_id, proj_id, sourse_id, target_id, task_link_type');
		$this->db->from('tbl_task_link');
		$this->db->where('proj_id', $pjt_id);
		$this->db->where('task_link_status', 1);
		$result1 = $this->db->get()->result();
		return $result1;
	}
	function get_parent_id($pjtId,$task_id){
		$this->db->select('task_parent_id');
		$this->db->from('tbl_task');
		$this->db->where('proj_id', $pjtId);
		$this->db->where('task_id', $task_id);
		$result1 = $this->db->get()->result();
		foreach($result1 as $key => $value)
		{
			$parentId = $value->task_parent_id;
		}
		return $parentId;
	}
	function has_child($taskId,$pjt_id){
		$this->db->select('count(*) as count');
		$this->db->from('tbl_task');
		$this->db->where('proj_id', $pjt_id);
		$this->db->where('task_parent_id', $taskId);
		$result1 = $this->db->get()->result();
		foreach($result1 as $key => $value)
		{
			$count = $value->count;
		}
		return $count;
	}
	function sum_child_progress($taskId,$pjt_id,$currentTask){
		$sumProgress=0.0;
		$this->db->select('sum(task_progress) as progs');
		$this->db->from('tbl_task');
		$this->db->where('proj_id', $pjt_id);
		$this->db->where('task_parent_id', $taskId);
		$this->db->where('task_status', 1);
		$this->db->where_not_in('task_id', $currentTask);
		$result1 = $this->db->get()->result();
		foreach($result1 as $key => $value)
		{
			$sumProgress = $value->progs;
		}
		return $sumProgress;
	}
	function get_project_parent_id($pjt_id){
		
		$this->db->select('task_id');
		$this->db->from('tbl_task');
		$this->db->where('proj_id', $pjt_id);
		$this->db->where('task_type', 'project');
		$this->db->where('task_status', 1);
		$this->db->where('task_parent_id', 0);
		$result1 = $this->db->get()->result();
		foreach($result1 as $key => $value)
		{
			$projectParent = $value->task_id;
		}
		return $projectParent;
	}

}
?>