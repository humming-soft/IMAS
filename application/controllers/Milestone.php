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
        if($data['type'] == 'milestone'){
            $task_color= '#35b712';
        }else {
            $task_color= '#12a3b7';
        }
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
                'task_color' => $task_color,
                'created_at'=> date('Y-m-d H:i:s'),
                'modified_at'=> date('Y-m-d H:i:s'),
                'created_by'=> 1,
                'modified_by'=> 1
            );
            if($this->milestonemodel->insertMilestone($data)>0){
                $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,$pjtId));
                echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
            }else{
                $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,$pjtId));
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
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,$pjtId));
            echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }else{
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,$pjtId));
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
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,$pjtId));
            echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }else{
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,$pjtId));
            echo json_encode( array('status'=>0,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }
    }
    public function update_task_info(){ //Update task details
                            $data[]=array();
                            $data=$this->input->post('data');
                            $splittedstring=explode("00",$data['start_date']);
                            $startdate = date('Y-m-d', strtotime( $splittedstring[0]));
                            $splittedstringEnd=explode("00",$data['end_date']);
                            $enddate = date('Y-m-d', strtotime( $splittedstringEnd[0]));
                            $pjtId=$this->input->post('id');
                            $task_id=$this->input->post('task_id');
                            $perentId = $data['parent'];
                            if($data['progress']){
                                $count=$this->milestonemodel->has_child($perentId, $pjtId);
                                if((int)$count > 0){
                                    $sumProgress = $this->milestonemodel->sum_child_progress($perentId,$pjtId,$task_id);
                                    $progres=((double)$sumProgress + (double)$data['progress'])/(double)$count;
                                    $dataProgress = array(
                                        'task_progress' => $progres,
                                        'modified_at'=> date('Y-m-d H:i:s'),
                                        'modified_by'=> 1
                                    );
                                    $this->milestonemodel->update_milestone($perentId,$pjtId,$dataProgress);
                                    $projectParent = $this->milestonemodel->get_project_parent_id($pjtId);
                                    $countAll=$this->milestonemodel->has_child($projectParent, $pjtId);
                                    $sumMilestoneProgress = $this->milestonemodel->sum_child_progress($projectParent,$pjtId,$perentId);
                                    $parentProgress = ((double)$sumMilestoneProgress + (double)$progres)/(double)$countAll;
                                    if($parentProgress){
                                        $dataAllProgress = array(
                                            'task_progress' => $parentProgress,
                                            'modified_at'=> date('Y-m-d H:i:s'),
                                            'modified_by'=> 1
                                        );
                                        $this->milestonemodel->update_milestone($projectParent,$pjtId,$dataAllProgress);
                                    }
                                }
                                $data1 = array(
                                    'task_name' => $data['text'],
                                    'task_start_date' => $startdate,
                                    'task_end_date' => $enddate,
                                    'task_duration' => $data['duration'],
                                    'task_progress'=>$data['progress'],
                                    'modified_at'=> date('Y-m-d H:i:s'),
                                    'modified_by'=> 1
                                );
                                $this->milestonemodel->update_milestone($task_id,$pjtId,$data1);
                            }else{
                                $data1 = array(
                                    'task_name' => $data['text'],
                                    'task_start_date' => $startdate,
                                    'task_end_date' => $enddate,
                                    'task_duration' => $data['duration'],
                                    'modified_at'=> date('Y-m-d H:i:s'),
                                    'modified_by'=> 1
                                );
                                $this->milestonemodel->update_milestone($task_id,$pjtId,$data1);
                                }
                                    if($data['type'] == 'task'){
                                        $projectParent = $this->milestonemodel->get_project_parent_id($pjtId);
                                        $maxDateArrayProjeect = $this->milestonemodel->calculate_milestone_duration($projectParent,$pjtId);
                                        foreach ($maxDateArrayProjeect as $row) {
                                            $enddateParentPr = date("d-m-Y", strtotime($row->edate));
                                            $startdateParentPr = date("d-m-Y", strtotime($row->sdate));
                                            $durationPr = $row->duration;
                                        }
                                        $dataParentproject = array(
                                            'task_start_date' => date("Y-m-d H:i:s", strtotime($startdateParentPr)) ,
                                            'task_end_date' => date("Y-m-d H:i:s", strtotime($enddateParentPr)) ,
                                            'task_duration' => $durationPr,
                                            'modified_at'=> date('Y-m-d H:i:s'),
                                            'modified_by'=> 1
                                        );
                                        $this->milestonemodel->update_milestone($projectParent,$pjtId,$dataParentproject);
                                        $maxDateArray = $this->milestonemodel->calculate_milestone_duration($perentId,$pjtId);
                                        foreach ($maxDateArray as $row) {
                                            $enddateParent = date("d-m-Y", strtotime($row->edate));
                                            $startdateParent = date("d-m-Y", strtotime($row->sdate));
                                            $duration = $row->duration;
                                        }
                                        $dataParent = array(
                                            'task_start_date' => date("Y-m-d H:i:s", strtotime($startdateParent)) ,
                                            'task_end_date' => date("Y-m-d H:i:s", strtotime($enddateParent)) ,
                                            'task_duration' => $duration,
                                            'modified_at'=> date('Y-m-d H:i:s'),
                                            'modified_by'=> 1
                                        );
                                        $this->milestonemodel->update_milestone($perentId,$pjtId,$dataParent);
                                    }
                                $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,$pjtId));
                                echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
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
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,$pjtId));
            echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }else{
            $data['milestone']=json_encode($this->milestonemodel->get_milestone(1,$pjtId));
            echo json_encode( array('status'=>0,'token'=>$this->security->get_csrf_hash(),'milestone'=> $data['milestone']));
        }
    }
}