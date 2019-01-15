<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends HS_Controller {

    function __construct()
    {
        parent::__construct('login');
    }
	public function index()
	{
		$this->load->view('login');
	}
}