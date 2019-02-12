<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Milestone extends HS_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('milestonemodel','',TRUE);
    }
    public function add(){
        $data[]=array();
        $data=$this->input->post('data');
        $splittedstring=explode("00",$data['start_date']);
        $startdate = date('Y-m-d', strtotime( $splittedstring[0]));
        $splittedstringEnd=explode("00",$data['end_date']);
        $enddate = date('Y-m-d', strtotime( $splittedstringEnd[0]));
        $pjtId=$this->input->post('id');
            $data = array(
                'proj_id' => $pjtId,
                'task_name' => $data['text'],
                'task_start_date' => $startdate,
                'task_end_date' => $enddate,
                'task_duration' => $data['duration'],
                'task_type' => $data['type'],
                'task_parent_id' => $data['parent'],
                'task_status' => 1,
                'created_at'=> date('Y-m-d H:i:s'),
                'modified_at'=> date('Y-m-d H:i:s'),
                'created_by'=> 1,
                'modified_by'=> 1
            );
            if($this->milestonemodel->insertMilestone($data)>0){
                $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,123));
                echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
            }else{
                $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,123));
                echo json_encode( array('status'=>0,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
            }
    }
    public function add_link(){
        $data[]=array();
        $data=$this->input->post('data');
        $pjtId=$this->input->post('id');
        $source=$data['source'];
        $target=$data['target'];
        $type=$data['type'];
        $data = array(
            'proj_id'=>$pjtId,
            'sourse_id'=>$source,
            'target_id'=>$target,
            'task_link_type'=>$type,
            'task_link_status'=>1,
            'created_at'=> date('Y-m-d H:i:s'),
            'modified_at'=> date('Y-m-d H:i:s'),
            'created_by'=> 1,
            'modified_by'=> 1
        );
        if($this->milestonemodel->insertMilestone_link($data)>0){
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,123));
            echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }else{
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,123));
            echo json_encode( array('status'=>0,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }
    }
    public function delete_task(){
        $task_link_id=$this->input->post('task_id');
        $pjtId=$this->input->post('id');
        $data = array(
            'task_status' => 0,
            'modified_at'=> date('Y-m-d H:i:s'),
            'modified_by'=> 1
        );
        if($this->milestonemodel->delete_milestone($task_link_id,$pjtId,$data)>0){
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,123));
            echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }else{
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,123));
            echo json_encode( array('status'=>0,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }
    }
    public function update_task_info(){ //Update task details
        $data[]=array();
        $data=$this->input->post('data');
        $splittedstring=explode("00",$data['start_date']);
        $startdate = date('Y-m-d', strtotime( $splittedstring[0]));
        $pjtId=$this->input->post('id');
        $task_id=$this->input->post('task_id');
        if($data['progress']){
            $data = array(
                'task_name' => $data['text'],
                'task_start_date' => $startdate,
                'task_duration' => $data['duration'],
                'task_progress'=>$data['progress'],
                'modified_at'=> date('Y-m-d H:i:s'),
                'modified_by'=> 1
            );
        }else{
            $data = array(
                'task_name' => $data['text'],
                'task_start_date' => $startdate,
                'task_duration' => $data['duration'],
                'modified_at'=> date('Y-m-d H:i:s'),
                'modified_by'=> 1
            );
        }

        if($this->milestonemodel->update_milestone($task_id,$pjtId,$data)>0){
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,123));
            echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }else{
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,123));
            echo json_encode( array('status'=>0,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }
    }
    public function link_delete(){
        $link_id=$this->input->post('link_id');
        $pjtId=$this->input->post('id');
        $data = array(
            'task_link_status' => 0,
            'modified_at'=> date('Y-m-d H:i:s'),
            'modified_by'=> 1
        );
        if($this->milestonemodel->delete_link($link_id,$pjtId,$data)>0){
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,123));
            echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }else{
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,123));
            echo json_encode( array('status'=>0,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }
    }
}