<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Log the user out
 */
class Logout extends HS_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
    }

	public function index()
	{
        $this->data['title'] = "Logout";

		// log the user out
		$this->ion_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('login', 'refresh');
    }
}