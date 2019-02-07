<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class CurrencyModel extends CI_Model
{

    function getAllCurrency(){
        $this->db->select('cur_code_id, cur_name, cur_code_name');
		$this->db->from('tbl_currency');
		$this->db->order_by('cur_name');
		return $this->db->get()->result();
    }

    function getCurrencyById($id){
        $this->db->select('cur_code_id, cur_name, cur_code_name');
		$this->db->from('tbl_currency');
        $this->db->where('cur_code_id', $id);
		return $this->db->get()->result();
    }

    function getAllCurrencyScale(){
        $this->db->select('cur_scale_id, cur_scale_name');
		$this->db->from('tbl_currency_scale');
		$this->db->order_by('cur_scale_name');
		return $this->db->get()->result();
    }

    function getCurrencyScaleById($id){
        $this->db->select('cur_scale_id, cur_scale_name');
		$this->db->from('tbl_currency_scale');
        $this->db->where('cur_scale_id', $id);
		return $this->db->get()->result();
    }

   

}