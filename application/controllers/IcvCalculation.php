<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IcvCalculation extends HS_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('icvcalculationmodel','',TRUE);
    }
    public function get_multiplier_items()
    {
        $mulId=$this->input->post('mulId');
        if($mulId != null){
            $data['status'] = 1;
            $data['multiplier'] = $this->icvcalculationmodel->get_multiplier_items($mulId);
            $data['token']=$this->security->get_csrf_hash();
        }else{
            $data['status'] = 0;
            $data['token']=$this->security->get_csrf_hash();
        }
        echo json_encode($data);


    }
    public function add_mu()
    {
        $taskId=$this->input->post('id');
        $nkeaID=$this->input->post('nkeaID');
        $focusID=$this->input->post('focusID');
        $offfsetID=$this->input->post('offfsetID');
        if($taskId != null){
            $data = array(
                'task_id'=> $taskId,
                'benefits_nkea_id' => $nkeaID,
                'benefits_focusing_area_id' => $focusID,
                'benefits_offset_id' => $offfsetID,
                'benefit_status' => 1,
                'created_at'=> date('Y-m-d H:i:s'),
                'modified_at'=> date('Y-m-d H:i:s'),
                'created_by'=> 1,
                'modified_by'=> 1
            );
            if($this->icvcalculationmodel->insertBenefits($data)>0){
                echo json_encode( array('status'=>1,'token'=>$this->security->get_csrf_hash(),'benefits'=> "done"));
            }else{
                echo json_encode( array('status'=>0,'token'=>$this->security->get_csrf_hash(),'benefits'=> "done"));
            }
        }else{
            $data['status'] = 0;
            $data['token']=$this->security->get_csrf_hash();
        }
        echo json_encode($data);

    }
}