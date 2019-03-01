<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_old extends HS_Controller {

    function __construct()
    {
        parent::__construct('login');
        $this->load->helper('form');
    }
	public function index()
	{
		$this->load->view('login');
    }
    
    public function auth(){
        
        redirect("programmes");
    }
}