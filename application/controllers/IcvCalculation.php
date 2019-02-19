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
}