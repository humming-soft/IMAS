<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class ActivityLogModel extends CI_Model
{
    //const PROGRMME = 'constant value';
    // private static $activities = array("Created New");
    // private static $def = array(
    //     array(
    //         "name" => "programme",
    //         "table" => '',
    //     ),
    //     array(
    //         "name" => "project",
    //         "table" => '',
    //     ),
    // );

    function log_activity(){
        $this->db->insert('tbl_activity_log', $data);
		return $this->db->insert_id();
    }

}