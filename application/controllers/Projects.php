<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends HS_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('projectmodel','',TRUE);
        $this->load->model('commonmodel','',TRUE);
        $this->load->model('milestonemodel','',TRUE);
    }
    public function validate_url($p_ref='',$projectId=''){
        if(!empty($p_ref)){
            $data['prog_id'] = $this->commonmodel->getProgrammeIdFromRef($p_ref);
            if($data['prog_id'] != null){
                $this->load->model('programmemodel','',TRUE);
                $data['programme'] = $this->programmemodel->getProgrammeById($data['prog_id'],1,1);
                if (count($data['programme']) > 0) {
                    if($projectId !=''){
                        $this->load->library('imasencryption');
                        $projectId = $this->imasencryption->decode($projectId);
                        $data['project'] = $this->projectmodel->getProjectById($projectId,1,1);
                        if (count($data['project']) > 0) {
                            return $data;
                        }else{
                            return [];
                        }
                    }else{
                        return [];
                    }
                }else{
                    return [];
                }
            }else{
                return [];
            }
        }
    }
    
    public function find_project($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0){
            $this->load->helper('form');
            if ($this->session->userdata('message')) {
                $messagehrecord = $this->session->userdata('message');
                $data['message'] = $messagehrecord['message'];
                $data['type'] = $messagehrecord['type'];
                $this->session->unset_userdata('message');                              
            }
            $nav['project'] = $data['project'];
            $nav['projects'] = $this->projectmodel->getProjectsByProgramme2($data['prog_id'],1);
            // $data['prog_ref'] = $p_ref;
            // $data['proj_id'] = $projectId;
            $_header["page_js"] = "project";
            $this->load->view('core/projects/fragments/_header.php',$_header);
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php',$nav);
            $this->load->view('core/projects/project',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_header);

            //$this->load->view('core/projects/project_new');
        }else{
            show_404();
        }
    }

    public function create($p_ref=''){
        $this->load->library('form_validation');
		$this->form_validation->set_rules('proj_name', 'Project Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('proj_desc', 'Project Description', 'trim|required|xss_clean');
		$this->form_validation->set_rules('proj_ref_no', 'Project Refernce No.', 'trim|required|xss_clean');
        $this->form_validation->set_rules('proj_type', 'Project Type', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prog_id', 'Project Reference', 'trim|required|xss_clean');
        
        
        $this->form_validation->set_rules('proj_obj[]', 'Project Objective', 'trim|required|xss_clean');
        $this->form_validation->set_rules('proj_obj_other', 'Other Objective(s)', 'trim|xss_clean');

		$this->form_validation->set_rules('proj_rec_name', 'Recipient Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('proj_rec_addr_line1', 'Recipient Address Line 1', 'trim|required|xss_clean');
        $this->form_validation->set_rules('proj_rec_addr_line2', 'Recipient Address Line 2', 'trim|required|xss_clean');
        $this->form_validation->set_rules('proj_rec_addr_line3', 'Recipient Address Line 3', 'trim|xss_clean');
        $this->form_validation->set_rules('proj_rec_cont_name', 'Recipient Contact Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('proj_rec_cont_no', 'Recipient Contact No.', 'trim|required|xss_clean');
        $this->form_validation->set_rules('proj_rec_cont_email', 'Recipient Contact Email', 'trim|required|xss_clean');

        if($this->form_validation->run() != FALSE)
		{
            $data = array(
                'prog_id' => $this->input->post('prog_id'),      
                'proj_name' => $this->input->post('proj_name'),
                'proj_desc' => $this->input->post('proj_desc'),
                'proj_ref_no' => $this->input->post('proj_ref_no'),
                'proj_type' => $this->input->post('proj_type'),
                'proj_obj' =>  $this->input->post('proj_obj[]'),    
                'proj_obj_other' =>  $this->input->post('proj_obj_other'), 
                'proj_rec_name' => $this->input->post('proj_rec_name'),      
                'proj_rec_addr_line1' => $this->input->post('proj_rec_addr_line1'),
                'proj_rec_addr_line2' => $this->input->post('proj_rec_addr_line2'),
                'proj_rec_addr_line3' => $this->input->post('proj_rec_addr_line3'),
                'proj_rec_cont_name' => $this->input->post('proj_rec_cont_name'),
                'proj_rec_cont_no' =>  $this->input->post('proj_rec_cont_no'),    
                'proj_rec_cont_email' =>  $this->input->post('proj_rec_cont_email'), 
                'created_at'=> date('Y-m-d H:i:s'),
                'modified_at'=> date('Y-m-d H:i:s'),
                'created_by'=> 1,
                'modified_by'=> 1
            );
            if($this->projectmodel->insertProject($data)){
                $sess_array = array('message' =>  "Project <strong>".$this->input->post('proj_name')."</strong> created successfully","type" => 1);
				$this->session->set_userdata('message', $sess_array);
                echo json_encode( array('status'=>1));
            }
        } else {
            echo json_encode(
                array(
                    'status'=>0,
                    'cname'=>$this->security->get_csrf_token_name(),
                    'cvalue'=>$this->security->get_csrf_hash(),
                    'msg_1'=>form_error('proj_name'),
                    'msg_2'=>form_error('proj_desc'),
                    'msg_3'=>form_error('proj_ref_no'),
                    'msg_4'=>form_error('proj_type'),
                    'msg_5'=>form_error('proj_obj'),
                    'msg_6'=>form_error('proj_obj_other'),
                    'msg_7'=>form_error('proj_rec_name'),
                    'msg_8'=>form_error('proj_rec_addr_line1'),
                    'msg_9'=>form_error('proj_rec_addr_line2'),
                    'msg_10'=>form_error('proj_rec_cont_name'),
                    'msg_11'=>form_error('proj_rec_cont_no'),
                    'msg_12'=>form_error('proj_rec_cont_email'),
                ));
        }
    }

    public function project_benefits($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0){
            $this->load->helper('form');
            if ($this->session->userdata('message')) {
                $messagehrecord = $this->session->userdata('message');
                $data['message'] = $messagehrecord['message'];
                $data['type'] = $messagehrecord['type'];
                $this->session->unset_userdata('message');                              
            }
            $nav['project'] = $data['project'];
            $nav['projects'] = $this->projectmodel->getProjectsByProgramme2($data['prog_id'],1);
            $_header["page_js"] = "benefits";
            $this->load->view('core/projects/fragments/_header.php',$_header);
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php',$nav);
            $this->load->view('core/projects/benefits',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_header);
        }else{
            show_404();
        }
    }

    public function milestones($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0){
            $this->load->helper('form');
            if ($this->session->userdata('message')) {
                $messagehrecord = $this->session->userdata('message');
                $data['message'] = $messagehrecord['message'];
                $data['type'] = $messagehrecord['type'];
                $this->session->unset_userdata('message');                              
            }
            $nav['project'] = $data['project'];
            $nav['projects'] = $this->projectmodel->getProjectsByProgramme2($data['prog_id'],1);
            $_header['support'] = array("gantt");
            $_footer["page_js"] = "milestones_new";
            $data['milestone']=json_encode( $this->milestonemodel->get_milestone(1,123));
            $this->load->view('core/projects/fragments/_header.php',$_header);
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php',$nav);
            $this->load->view('core/projects/milestones_new',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_footer);
        }else{
            show_404();
        }
        // if($projectId == "cgmr-90-ip2"){
        //     $_header['support'] = array("gantt");
        //     $_footer["page_js"] = "milestones";
        //     $data['prog_ref'] = $p_ref;
        //     $data['proj_id'] = $projectId;
        //     $this->load->view('core/projects/fragments/_header.php',$_header);
        //     $this->load->view('core/projects/fragments/_side_nav.php');
        //     $this->load->view('core/projects/fragments/_top_nav.php');
        //     $this->load->view('core/projects/milestones',$data);
        //     $this->load->view('core/projects/fragments/_footer.php',$_footer);
        // }else{
        //     $_header['support'] = array("gantt");
        //     $_footer["page_js"] = "milestones_new";
        //     $data['prog_ref'] = $p_ref;
        //     $data['proj_id'] = $projectId;
        //     $this->load->view('core/projects/fragments/_header.php',$_header);
        //     $this->load->view('core/projects/fragments/_side_nav.php');
        //     $this->load->view('core/projects/fragments/_top_nav.php');
        //     $this->load->view('core/projects/milestones_new',$data);
        //     $this->load->view('core/projects/fragments/_footer.php',$_footer);
        // }
    }

    public function icv_calculation($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0){
            $this->load->helper('form');
            if ($this->session->userdata('message')) {
                $messagehrecord = $this->session->userdata('message');
                $data['message'] = $messagehrecord['message'];
                $data['type'] = $messagehrecord['type'];
                $this->session->unset_userdata('message');                              
            }
            $nav['project'] = $data['project'];
            $nav['projects'] = $this->projectmodel->getProjectsByProgramme2($data['prog_id'],1);
            $_header['support'] = array("slick","scrollbar");
            $_footer["page_js"] = "icvcalc";
            $this->load->view('core/projects/fragments/_header.php',$_header);
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php',$nav);
            $this->load->view('core/projects/icv_calculation',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_footer);
        }else{
            show_404();
        }
    }
    public function delivarables($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0){
            $this->load->helper('form');
            if ($this->session->userdata('message')) {
                $messagehrecord = $this->session->userdata('message');
                $data['message'] = $messagehrecord['message'];
                $data['type'] = $messagehrecord['type'];
                $this->session->unset_userdata('message');                              
            }
            $nav['project'] = $data['project'];
            $nav['projects'] = $this->projectmodel->getProjectsByProgramme2($data['prog_id'],1);
            $_footer["page_js"] = "delivarables";
            $this->load->view('core/projects/fragments/_header.php');
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php',$nav);
            $this->load->view('core/projects/delivarables',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_footer);
        }else{
            show_404();
        }
    }

    public function activities($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0){
            $this->load->helper('form');
            if ($this->session->userdata('message')) {
                $messagehrecord = $this->session->userdata('message');
                $data['message'] = $messagehrecord['message'];
                $data['type'] = $messagehrecord['type'];
                $this->session->unset_userdata('message');                              
            }
            $nav['project'] = $data['project'];
            $nav['projects'] = $this->projectmodel->getProjectsByProgramme2($data['prog_id'],1);
            $_footer["page_js"] = "activities";
            $this->load->view('core/projects/fragments/_header.php');
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php',$nav);
            $this->load->view('core/projects/activities',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_footer);
        }else{
            show_404();
        }
    }

    public function collaboration($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0){
            $this->load->helper('form');
            if ($this->session->userdata('message')) {
                $messagehrecord = $this->session->userdata('message');
                $data['message'] = $messagehrecord['message'];
                $data['type'] = $messagehrecord['type'];
                $this->session->unset_userdata('message');                              
            }
            $nav['project'] = $data['project'];
            $nav['projects'] = $this->projectmodel->getProjectsByProgramme2($data['prog_id'],1);
            $_footer["page_js"] = "collaboration";
            $this->load->view('core/projects/fragments/_header.php');
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php',$nav);
            $this->load->view('core/projects/collaboration',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_footer);
        }else{
            show_404();
        }
    }
}