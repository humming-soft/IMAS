<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class CommonModel extends CI_Model
{
    public function getProgrammeIdFromRef($ref){
        $refv = explode("-", $ref);
        if(count($refv)<6){
            return null;
        }else{
            if(isset($refv[4])){
                if(is_numeric($refv[4])){
                    return $refv[4];
                }else{
                    return null;
                }
            }else{
                return null;
            }
        }
    }
}