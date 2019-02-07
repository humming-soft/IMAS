<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmes extends HS_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('programmemodel','',TRUE);
        $this->load->model('agencymodel','',TRUE);
        $this->load->model('sectormodel','',TRUE);
        $this->load->model('currencymodel','',TRUE);
        $this->load->model('commonmodel','',TRUE);
    }
	public function index()
	{
        $this->load->helper('form');
        if ($this->session->userdata('message')) {
            $messagehrecord = $this->session->userdata('message');
            $data['message'] = $messagehrecord['message'];
            $data['type'] = $messagehrecord['type'];
            $this->session->unset_userdata('message');
        }
        $data['programmes'] = $this->programmemodel->getAllProgrammes(1,1);
        $data['currency'] = $this->currencymodel->getCurrencyById(1);
        $data['cscale'] = $this->currencymodel->getAllCurrencyScale();
        $data['agencies'] = $this->agencymodel->getAllAgencies();
        $data['page_js'] = 'dashboard';
		$this->load->view('core/dashboard',$data);
    }

    public function create(){
        $this->load->library('form_validation');
		$this->form_validation->set_rules('prog_name', 'Programme Name', 'trim|required|xss_clean|callback_project_name_exists');
		$this->form_validation->set_rules('prog_desc', 'Programme Description', 'trim|required|xss_clean');
		$this->form_validation->set_rules('currency_code', 'Currency Code', 'trim|required|xss_clean');
		$this->form_validation->set_rules('proc_value', 'Procurement Value', 'trim|required|xss_clean');
        $this->form_validation->set_rules('currency_scale', 'Currency Scale', 'trim|required|xss_clean');

        $this->form_validation->set_rules('proc_agency', 'Agency', 'trim|required|xss_clean');
		$this->form_validation->set_rules('proc_sector', 'Sector', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prog_start_date', 'Start Date(Planned)', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prog_end_date', 'End Date(Planned)', 'trim|required|xss_clean');
        if($this->form_validation->run() != FALSE)
		{
            $data = array(
                'prog_name' => $this->input->post('prog_name'),
                'prog_desc' => $this->input->post('prog_desc'),
                'currency_code_id' => $this->input->post('currency_code'),
                'proc_value' => $this->input->post('proc_value'),
                'currency_scale_id' => $this->input->post('currency_scale'),
                'proc_agency_id' => $this->input->post('proc_agency'),
                'proc_sector_id' => $this->input->post('proc_sector'),
                'prog_start_date' => date('Y-m-d', strtotime($this->input->post('prog_start_date'))),
                'prog_end_date'=> date('Y-m-d', strtotime($this->input->post('prog_end_date'))),
                'created_at'=> date('Y-m-d H:i:s'),
                'modified_at'=> date('Y-m-d H:i:s'),
                'created_by'=> 1,
                'modified_by'=> 1
            );
            if($this->programmemodel->insertProgramme($data)>0){
                $sess_array = array('message' =>  "Programme <strong>".$this->input->post('prog_name')."</strong> created successfully","type" => 1);
				$this->session->set_userdata('message', $sess_array);
                echo json_encode( array('status'=>1));
            }
        } else {
            echo json_encode(
                array(
                    'status'=>0,
                    'cname'=>$this->security->get_csrf_token_name(),
                    'cvalue'=>$this->security->get_csrf_hash(),
                    'msg_1'=>form_error('prog_name'),
                    'msg_2'=>form_error('prog_desc'),
                    'msg_3'=>form_error('proc_value'),
                    'msg_4'=>form_error('proc_agency'),
                    'msg_5'=>form_error('proc_sector'),
                    'msg_6'=>form_error('prog_start_date'),
                    'msg_7'=>form_error('prog_end_date')
                ));
        }
    }

    public function update(){
        $this->load->library('form_validation');
		$this->form_validation->set_rules('prog_name', 'Programme Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('prog_desc', 'Programme Description', 'trim|required|xss_clean');
		$this->form_validation->set_rules('currency_code', 'Currency Code', 'trim|required|xss_clean');
		$this->form_validation->set_rules('proc_value', 'Procurement Value', 'trim|required|xss_clean');
        $this->form_validation->set_rules('currency_scale', 'Currency Scale', 'trim|required|xss_clean');

        $this->form_validation->set_rules('proc_agency', 'Agency', 'trim|required|xss_clean');
		$this->form_validation->set_rules('proc_sector', 'Sector', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prog_start_date', 'Start Date(Planned)', 'trim|required|xss_clean');
        $this->form_validation->set_rules('prog_end_date', 'End Date(Planned)', 'trim|required|xss_clean');
        if($this->form_validation->run() != FALSE)
		{
            $id = $this->input->post('prog_id');
            $data = array(
                'prog_name' => $this->input->post('prog_name'),
                'prog_desc' => $this->input->post('prog_desc'),
                'currency_code_id' => $this->input->post('currency_code'),
                'proc_value' => $this->input->post('proc_value'),
                'currency_scale_id' => $this->input->post('currency_scale'),
                'proc_agency_id' => $this->input->post('proc_agency'),
                'proc_sector_id' => $this->input->post('proc_sector'),
                'prog_start_date' => date('Y-m-d', strtotime($this->input->post('prog_start_date'))),
                'prog_end_date'=> date('Y-m-d', strtotime($this->input->post('prog_end_date'))),
                'modified_at'=> date('Y-m-d H:i:s'),
                'modified_by'=> 1
            );
            if($this->programmemodel->updateProgramme($id, $data)>0){
                $sess_array = array('message' =>  "Programme <strong>".$this->input->post('prog_name')."</strong> updated successfully","type" => 1);
				$this->session->set_userdata('message', $sess_array);
                echo json_encode( array('status'=>1));
            }else{
                $sess_array = array('message' =>  "Operation failed. Please try again later or contact Administrator","type" => 0);
				$this->session->set_userdata('message', $sess_array);
                echo json_encode( array('status'=>1));
            }
        } else {
            echo json_encode(
                array(
                    'status'=>0,
                    'cname'=>$this->security->get_csrf_token_name(),
                    'cvalue'=>$this->security->get_csrf_hash(),
                    'msg_1'=>form_error('prog_name'),
                    'msg_2'=>form_error('prog_desc'),
                    'msg_3'=>form_error('proc_value'),
                    'msg_4'=>form_error('proc_agency'),
                    'msg_5'=>form_error('proc_sector'),
                    'msg_6'=>form_error('prog_start_date'),
                    'msg_7'=>form_error('prog_end_date')
                ));
        }
    }

    public function delete(){
        $id = $this->input->post('prog_id');
        $data = array(
            'prog_status' => 0,
            'modified_at'=> date('Y-m-d H:i:s'),
            'modified_by'=> 1
        );
        if($this->programmemodel->updateProgramme($id, $data)>0){
            $sess_array = array('message' =>  "Programme <strong>".$this->input->post('prog_name')."</strong> deleted successfully.","type" => 1);
            $this->session->set_userdata('message', $sess_array);
            echo json_encode( array('status'=>1));
        }else{
            $sess_array = array('message' =>  "Operation failed. Please try again later or contact administrator.","type" => 0);
            $this->session->set_userdata('message', $sess_array);
            echo json_encode( array('status'=>1));
        }
    }

    public function project_name_exists($v)
    {
        if (count($this->programmemodel->getProgrammeByName($v,1,1)) > 0) {
                $this->form_validation->set_message('project_name_exists', 'The {field} already exists');
                return FALSE;
        } else {
                return TRUE;
        }
    }

    public function get_sector($aid = null){
        if($aid != null){
            $data['status'] = 1;
            $data['sectors'] = $this->sectormodel->getSectorByAgency($aid);
        }else{
            $data['status'] = 0;
        }
        echo json_encode($data);
    }
    
    public function find_programme($p_ref=''){
        // tda-pod-mot-54-2015-802
        if(!empty($p_ref)){
            $prog_id = $this->commonmodel->getProgrammeIdFromRef($p_ref);
            if($prog_id != null){
                $data['programme'] = $this->programmemodel->getProgrammeById($prog_id,1,1);
                if (count($data['programme']) > 0) {
                    $this->load->helper('form');
                    if ($this->session->userdata('message')) {
                        $messagehrecord = $this->session->userdata('message');
                        $data['message'] = $messagehrecord['message'];
                        $data['type'] = $messagehrecord['type'];
                        $this->session->unset_userdata('message');
                    }
                    $data['programmes'] = $this->programmemodel->getAllProgrammes(1,1);
                    $data['currency'] = $this->currencymodel->getCurrencyById(1);
                    $data['sectors'] = $this->sectormodel->getSectorByAgency($data['programme'][0]->proc_agency_id);
                    $data['cscale'] = $this->currencymodel->getAllCurrencyScale();
                    $data['agencies'] = $this->agencymodel->getAllAgencies();
                    $data['page_js'] = 'programme';
                    $this->load->view('core/programmes/programme', $data);
                }else{
                    show_404();
                }
            }else{
                show_404();
            }
        }
    }
}