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

        $_header["page_js"] = "project";

        if($projectId == "cgmr-90-ip2"){
            $data['prog_ref'] = $p_ref;
            $data['proj_id'] = $projectId;
            $this->load->view('core/projects/fragments/_header.php',$_header);
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php');
            $this->load->view('core/projects/project',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_header);
        }else{
            $this->load->view('core/projects/project_new');
        }
    }

    public function project_benefits($p_ref='',$projectId=''){
        // tda-pod-mot-54-2015-802
        // cgmr-90-ip2
        $_header["page_js"] = "benefits";
        $data['prog_ref'] = $p_ref;
        $data['proj_id'] = $projectId;
        $this->load->view('core/projects/fragments/_header.php',$_header);
        $this->load->view('core/projects/fragments/_side_nav.php');
        $this->load->view('core/projects/fragments/_top_nav.php');
        $this->load->view('core/projects/benefits',$data);
        $this->load->view('core/projects/fragments/_footer.php',$_header);
    }

    public function milestones($p_ref='',$projectId=''){
        // tda-pod-mot-54-2015-802
        // cgmr-90-ip2
        if($projectId == "cgmr-90-ip2"){
            $_header['support'] = array("gantt");
            $_footer["page_js"] = "milestones";
            $data['prog_ref'] = $p_ref;
            $data['proj_id'] = $projectId;
            $this->load->view('core/projects/fragments/_header.php',$_header);
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php');
            $this->load->view('core/projects/milestones',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_footer);
        }else{
            $_header['support'] = array("gantt");
            $_footer["page_js"] = "milestones_new";
            $data['prog_ref'] = $p_ref;
            $data['proj_id'] = $projectId;
            $this->load->view('core/projects/fragments/_header.php',$_header);
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php');
            $this->load->view('core/projects/milestones_new',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_footer);
        }
    }

    public function icv_calculation($p_ref='',$projectId=''){
        // tda-pod-mot-54-2015-802
        // cgmr-90-ip2
        $_header['support'] = array("slick");
        $_footer["page_js"] = "icvcalc";
        $data['prog_ref'] = $p_ref;
        $data['proj_id'] = $projectId;
        $this->load->view('core/projects/fragments/_header.php',$_header);
        $this->load->view('core/projects/fragments/_side_nav.php');
        $this->load->view('core/projects/fragments/_top_nav.php');
        $this->load->view('core/projects/icv_calculation',$data);
        $this->load->view('core/projects/fragments/_footer.php',$_footer);
    }
    public function delivarables($p_ref='',$projectId=''){
        // tda-pod-mot-54-2015-802
        // cgmr-90-ip2
        $_header["page_js"] = "delivarables";
        $data['prog_ref'] = $p_ref;
        $data['proj_id'] = $projectId;
        $this->load->view('core/projects/fragments/_header.php',$_header);
        $this->load->view('core/projects/fragments/_side_nav.php');
        $this->load->view('core/projects/fragments/_top_nav.php');
        $this->load->view('core/projects/delivarables',$data);
        $this->load->view('core/projects/fragments/_footer.php',$_header);
    }
    public function activities($p_ref='',$projectId=''){
        // tda-pod-mot-54-2015-802
        // cgmr-90-ip2
        $_header["page_js"] = "activities";
        $data['prog_ref'] = $p_ref;
        $data['proj_id'] = $projectId;
        $this->load->view('core/projects/fragments/_header.php',$_header);
        $this->load->view('core/projects/fragments/_side_nav.php');
        $this->load->view('core/projects/fragments/_top_nav.php');
        $this->load->view('core/projects/activities',$data);
        $this->load->view('core/projects/fragments/_footer.php',$_header);
    }
}