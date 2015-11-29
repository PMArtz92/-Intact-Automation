<?php
class login_model extends CI_Model {

    var $first_name = '';
    var $password = '';
    function __construct(){
        parent::__construct();
    }

    function check_login(){
        $this->first_name = $_POST['First_name']; // please read the below note
        $this->password   = md5($_POST['Password']);
        $query_str = "SELECT User_ID, Type FROM userdetail WHERE First_name = ? and Password = ?";
        $result = $this->db->query($query_str, array($this->first_name, $this->password));

        if($result->num_rows() == 1){
            return $result->row(0);
        }
        else{
            return false;
        }
    }
}