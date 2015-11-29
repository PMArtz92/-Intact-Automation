<?php
class form_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    function create($arr){

        $this->db->insert('userdetail', $arr);

    }
    function create_mob($arr){
        $this->db->insert('mobile_assit', $arr);
    }
}