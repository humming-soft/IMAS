<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends HS_Controller {

    function __construct()
    {
        parent::__construct('login');
    }
    
    public function find_project($p_ref='',$projectId=''){
        // tda-pod-mot-54-2015-802
        // cgmr-90-ip2

        $this->load->view('core/projects/project');
    }
    public function icv_calculation($p_ref='',$projectId=''){
        // tda-pod-mot-54-2015-802
        // cgmr-90-ip2

        $this->load->view('core/projects/icv_calculation');
    }
    public function deliverables($p_ref='',$projectId=''){
        // tda-pod-mot-54-2015-802
        // cgmr-90-ip2

        $this->load->view('core/projects/deliverables');
    }
}