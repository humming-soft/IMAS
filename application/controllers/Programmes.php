<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmes extends HS_Controller {

    function __construct()
    {
        parent::__construct('login');
    }
	public function index()
	{
		$this->load->view('core/dashboard');
    }
    
    public function find_programme($p_ref=''){
        // tda-pod-mot-54-2015-802

        $this->load->view('core/programmes/programme');
    }
}