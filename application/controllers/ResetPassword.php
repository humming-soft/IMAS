<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ResetPassword extends HS_Controller {

    function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('reset-password');
	}
}