<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends HS_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('projectmodel','',TRUE);
        $this->load->model('commonmodel','',TRUE);
        $this->load->library('upload');
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
            $this->load->model('benefitsmodel','',TRUE);
            if ($this->session->userdata('message')) {
                $messagehrecord = $this->session->userdata('message');
                $data['message'] = $messagehrecord['message'];
                $data['type'] = $messagehrecord['type'];
                $this->session->unset_userdata('message');                              
            }
            $nav['project'] = $data['project'];
            $nav['projects'] = $this->projectmodel->getProjectsByProgramme2($data['prog_id'],1);
            $data['benefitsNkea']=$this->benefitsmodel->get_benefits_nkea();
            $data['benefitsFocusArea']=$this->benefitsmodel->get_benefits_focusingArea();
            $data['benefitsOffsets']=$this->benefitsmodel->get_benefits_offsets();
            $data['projectBenefits']=$this->benefitsmodel->get_project_benefits($data['project'][0]->proj_id);
            $data['p_ref']=$p_ref;
            $data['projectId']=$projectId;
            $_header['support'] = array("repeater");
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
    public function add_benefits($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0) {
            $this->load->helper('form');
            $this->load->model('benefitsmodel','',TRUE);
            $arr['benefits'] = $this->input->post('benefits');
            for($i=0;$i<sizeof($arr['benefits']);$i++)
            {
                $benefitdata = array(
                    'proj_id' => $data['project'][0]->proj_id,
                    'benefits_nkea_id' => $arr['benefits'][$i]['nkea'],
                    'benefits_focusing_area_id' => $arr['benefits'][$i]['focusArea'],
                    'benefits_offset_id' => $arr['benefits'][$i]['offstes'],
                    'benefit_status' => 1,
                    'created_at'=> date('Y-m-d H:i:s'),
                    'modified_at'=> date('Y-m-d H:i:s'),
                    'created_by'=> 1,
                    'modified_by'=> 1
                );
             $this->benefitsmodel->add_project_benefits($benefitdata);
            }
            redirect('programmes/' . $p_ref . '/' . $projectId . '/benefits', 'id="pjt_benefit"');
        }
    }
    public function milestones($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0){
            $this->load->helper('form');
            $this->load->model('milestonemodel','',TRUE);
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
            $data['milestone']=json_encode( $this->milestonemodel->get_milestone(1,$data['project'][0]->proj_id));
            $this->load->view('core/projects/fragments/_header.php',$_header);
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php',$nav);
            $this->load->view('core/projects/milestones_new',$data);
            $this->load->view('core/projects/fragments/_footer.php',$_footer);
        }else{
            show_404();
        }
    }
    public function icv_calculation($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0){
            $this->load->helper('form');
            $this->load->model('icvcalculationmodel','',TRUE);
            $this->load->model('benefitsmodel','',TRUE);
            if ($this->session->userdata('message')) {
                $messagehrecord = $this->session->userdata('message');
                $data['message'] = $messagehrecord['message'];
                $data['type'] = $messagehrecord['type'];
                $this->session->unset_userdata('message');                              
            }
            $data['icv_milestone']=$this->icvcalculationmodel->get_icv_milestone($data['project'][0]->proj_id,1);
            if(sizeof( $data['icv_milestone']) == 0){
                          $sess_array = array('message' =>  "<strong>Please complete your gantt chart first!</strong>","type" => 1);
                          $this->session->set_userdata('message', $sess_array);
                          redirect(site_url('programmes/'.$p_ref.'/'.$projectId.'/milestones'));
            }
            $nav['project'] = $data['project'];
            $nav['projects'] = $this->projectmodel->getProjectsByProgramme2($data['prog_id'],1);
            $data['icv_project']=$this->icvcalculationmodel->get_icv_project($data['project'][0]->proj_id,1);
            $data['icv_multiplier_MLC']=$this->icvcalculationmodel->get_icv_multiplier();
            $data['icv_multiplier_nonMLC']=$this->icvcalculationmodel->get_icv_multiplier_non();
            $data['benefitsNkea']=$this->benefitsmodel->get_benefits_nkea();
            $data['benefitsFocusArea']=$this->benefitsmodel->get_benefits_focusingArea();
            $data['benefitsOffsets']=$this->benefitsmodel->get_benefits_offsets();
            $data['p_ref']=$p_ref;
            $data['projectId']=$projectId;
            $_header['support'] = array("slick","scrollbar");
            $_footer["page_js"] = "icvcalc";
            $this->load->view('core/projects/fragments/_header.php',$_header);
            $this->load->view('core/projects/fragments/_side_nav.php');
            $this->load->view('core/projects/fragments/_top_nav.php',$nav);
            if($this->projectmodel->getProjectByType($data['project'][0]->proj_id,1) == 1){
                $this->load->view('core/projects/icv_calculation',$data);
            }else{
                $this->load->view('core/projects/icv_calculation_indirect',$data);
            }
            $this->load->view('core/projects/fragments/_footer.php',$_footer);
        }else{
            show_404();
        }
    }
    public function delivarables($p_ref='',$projectId=''){
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0){
            $this->load->helper('form');
            $this->load->model('icvcalculationmodel','',TRUE);
            if ($this->session->userdata('message')) {
                $messagehrecord = $this->session->userdata('message');
                $data['message'] = $messagehrecord['message'];
                $data['type'] = $messagehrecord['type'];
                $this->session->unset_userdata('message');                              
            }
            $nav['project'] = $data['project'];
            $data['icv_milestone']=$this->icvcalculationmodel->get_icv_milestone($data['project'][0]->proj_id,1);
            if(sizeof( $data['icv_milestone']) == 0){
                $sess_array = array('message' =>  "<strong>Please complete your gantt chart first!</strong>","type" => 1);
                $this->session->set_userdata('message', $sess_array);
                redirect(site_url('programmes/'.$p_ref.'/'.$projectId.'/milestones'));
            }
            $data['icv_project']=$this->icvcalculationmodel->get_icv_project($data['project'][0]->proj_id,1);
            $data['p_ref']=$p_ref;
            $data['projectId']=$projectId;
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
    function add_icv($p_ref='',$projectId='')
    {
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0) {
            $this->load->helper('form');
            $this->load->model('icvcalculationmodel','',TRUE);
            $countProject=$this->icvcalculationmodel->get_count_project_icv($data['project'][0]->proj_id);
            if($countProject > 0){
                $dataproject = array(
                    'icv_nonmlc'=> $this->input->post('sumNonMLC'),
                    'icv_mlc'=> $this->input->post('sumMLC'),
                    'icv_total'=> $this->input->post('totalICV'),
                    'created_at'=> date('Y-m-d H:i:s'),
                    'modified_at'=> date('Y-m-d H:i:s'),
                    'created_by'=> 1,
                    'modified_by'=> 1
                );
                $status=$this->icvcalculationmodel->update_project_icv($dataproject,$data['project'][0]->proj_id);
                if($status==1){
                    $arr['icv']=$this->input->post('milestoneID[]');
                    $arr['nonmlc']=$this->input->post('nonMlC[]');
                    $arr['nonmlcmul']=$this->input->post('nonMlCMUL[]');
                    $arr['nonmlcmu']=$this->input->post('nonMlCMU[]');
                    $arr['mlc']=$this->input->post('MlC[]');
                    $arr['mlcmul']=$this->input->post('MlCMUL[]');
                    $arr['mlcmu']=$this->input->post('MlCMU[]');
                    $arr['total']=$this->input->post('totalRow[]');
                    $arr['files']=$this->input->post('files[]');

                    for($i=0;$i<sizeof($arr['icv']);$i++)
                    {
                        $taskId=$arr['icv'][$i];
                       /*print_r($arr['files'][(int)$taskId]);
                        echo sizeof($arr['files'][(int)$taskId]);*/
                       /*$filesCount = sizeof($arr['files'][(int)$taskId]);
                        for($i = 0; $i < $filesCount; $i++){ }*/
                        $countMilestone=$this->icvcalculationmodel->get_count_milestone_icv($taskId);
                        if($countMilestone > 0){
                            $dataicv = array(
                                'nonmlc_value'=>   $arr['nonmlc'][$i],
                                'nonmlc_multiplier'=>  $arr['nonmlcmul'][$i],
                                'nonmlc_mu'=>  $arr['nonmlcmu'][$i],
                                'mlc_value'=>  $arr['mlc'][$i],
                                'mlc_multiplier'=> $arr['mlcmul'][$i],
                                'mlc_mu'=>   $arr['mlcmu'][$i],
                                'row_total'=>  $arr['total'][$i],
                                'row_status'=>  1,
                                'created_at'=> date('Y-m-d H:i:s'),
                                'modified_at'=> date('Y-m-d H:i:s'),
                                'created_by'=> 1,
                                'modified_by'=> 1
                            );
                            $status=$this->icvcalculationmodel->update_milestone_icv($taskId,$dataicv);
                        }else{
                            for($i=0;$i<sizeof($arr['icv']);$i++)
                            {
                                $dataicv = array(
                                    'task_id'=> $arr['icv'][$i],
                                    'nonmlc_value'=>   $arr['nonmlc'][$i],
                                    'nonmlc_multiplier'=>  $arr['nonmlcmul'][$i],
                                    'nonmlc_mu'=>  $arr['nonmlcmu'][$i],
                                    'mlc_value'=>  $arr['mlc'][$i],
                                    'mlc_multiplier'=> $arr['mlcmul'][$i],
                                    'mlc_mu'=>   $arr['mlcmu'][$i],
                                    'row_total'=>  $arr['total'][$i],
                                    'row_status'=>  1,
                                    'created_at'=> date('Y-m-d H:i:s'),
                                    'modified_at'=> date('Y-m-d H:i:s'),
                                    'created_by'=> 1,
                                    'modified_by'=> 1
                                );
                               $milestoneid=$this->icvcalculationmodel->insertICV_milestone($dataicv);
                            }
                        }
                    }
                }
                redirect('programmes/' . $p_ref . '/' . $projectId . '/icv_calculation', 'id="icv_cal_1"');
            }else{
                $datamilestonenew = array(
                    'proj_id'=> $data['project'][0]->proj_id,
                    'icv_nonmlc'=> $this->input->post('sumNonMLC'),
                    'icv_mlc'=> $this->input->post('sumMLC'),
                    'icv_total'=> $this->input->post('totalICV'),
                    'created_at'=> date('Y-m-d H:i:s'),
                    'modified_at'=> date('Y-m-d H:i:s'),
                    'created_by'=> 1,
                    'modified_by'=> 1
                );
                $id=$this->icvcalculationmodel->insertICV_project($datamilestonenew);
                if($id){
                    $arr['icv']=$this->input->post('milestoneID[]');
                    $arr['nonmlc']=$this->input->post('nonMlC[]');
                    $arr['nonmlcmul']=$this->input->post('nonMlCMUL[]');
                    $arr['nonmlcmu']=$this->input->post('nonMlCMU[]');
                    $arr['mlc']=$this->input->post('MlC[]');
                    $arr['mlcmul']=$this->input->post('MlCMUL[]');
                    $arr['mlcmu']=$this->input->post('MlCMU[]');
                    $arr['total']=$this->input->post('totalRow[]');
                    for($i=0;$i<sizeof($arr['icv']);$i++)
                    {
                        $dataicv = array(
                            'task_id'=> $arr['icv'][$i],
                            'nonmlc_value'=>   $arr['nonmlc'][$i],
                            'nonmlc_multiplier'=>  $arr['nonmlcmul'][$i],
                            'nonmlc_mu'=>  $arr['nonmlcmu'][$i],
                            'mlc_value'=>  $arr['mlc'][$i],
                            'mlc_multiplier'=> $arr['mlcmul'][$i],
                            'mlc_mu'=>   $arr['mlcmu'][$i],
                            'row_total'=>  $arr['total'][$i],
                            'row_status'=>  1,
                            'created_at'=> date('Y-m-d H:i:s'),
                            'modified_at'=> date('Y-m-d H:i:s'),
                            'created_by'=> 1,
                            'modified_by'=> 1
                        );
                        $milestoneid=$this->icvcalculationmodel->insertICV_milestone($dataicv);
                    }

                }
                redirect('programmes/' . $p_ref . '/' . $projectId . '/icv_calculation', 'id="icv_cal_1"');
            }
         
        }
    }
    function claim_icv($p_ref='',$projectId='')
    {
        $data=$this->validate_url($p_ref,$projectId);
        if(count($data)>0) {
          /*  echo $data['project'][0]->proj_id;
            exit;*/
            $this->load->helper('form');
            $this->load->model('icvcalculationmodel','',TRUE);
            $arr['milestone']=$this->input->post('mileID[]');
            $arr['remark']=$this->input->post('icvRemark[]');
            $arr['checked']=$this->input->post('icvClamed[]');
            $dataproject = array(
                'icv_claimed'=> $this->input->post('totalClamedV'),
                'created_at'=> date('Y-m-d H:i:s'),
                'modified_at'=> date('Y-m-d H:i:s'),
                'created_by'=> 1,
                'modified_by'=> 1
            );
            $status=$this->icvcalculationmodel->update_project_icv($dataproject,$data['project'][0]->proj_id);
           if($status == 1){
               for($i=0;$i<sizeof($arr['milestone']);$i++)
               {
                   $taskID=$arr['milestone'][$i];
                   $countMilestone=$this->icvcalculationmodel->get_count_milestone_icvclaim($taskID);
                   if($countMilestone > 0){
                       $dataicvClaimUpV = array(
                           'milestone_claim_remarks'=>   $arr['remark'][$i],
                           'milestone_claim_status'=> 0,
                           'created_at'=> date('Y-m-d H:i:s'),
                           'modified_at'=> date('Y-m-d H:i:s'),
                           'created_by'=> 1,
                           'modified_by'=> 1
                       );
                       $milestoneUpid=$this->icvcalculationmodel->updateICV_claim($taskID,$dataicvClaimUpV);
                   }else{
                       $dataicvClaim = array(
                           'task_id'=> $arr['milestone'][$i],
                           'milestone_claim_remarks'=>   $arr['remark'][$i],
                           'milestone_claim_status'=> 0,
                           'created_at'=> date('Y-m-d H:i:s'),
                           'modified_at'=> date('Y-m-d H:i:s'),
                           'created_by'=> 1,
                           'modified_by'=> 1
                       );
                       $milestoneid=$this->icvcalculationmodel->insertICV_claim($dataicvClaim);
                   }

               }
               foreach ($this->input->post('icvClamed') as $id)
               {
                   $dataicvClaimUp = array(
                       'milestone_claim_status'=> 1,
                       'created_at'=> date('Y-m-d H:i:s'),
                       'modified_at'=> date('Y-m-d H:i:s'),
                       'created_by'=> 1,
                       'modified_by'=> 1
                   );
                   $milestoneUpid=$this->icvcalculationmodel->updateICV_claim($id,$dataicvClaimUp);
               }
           }

        }
        redirect('programmes/' . $p_ref . '/' . $projectId . '/delivarables', 'id="icv_cal_claim"');
    }
}