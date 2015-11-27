<?php

class Search_system_module extends CI_Model{

    var $First_name   = '';
    var $Last_name = '';
    var $Address_no    = '';
    var $Address_city = '';
    var $Address_street= '';
    var $Contact='';
    var $Email_address='';
    var $Password = '';
    var $Type = '';

    public function __construct() {

        parent::__construct();


    }


    function search_manager_detail(){
        $this->First_name   = $_POST['FirstName']; // please read the below note
        $this->Last_name  = $_POST['LastName'];

        $where = "First_name = '$this->First_name' AND Last_name = '$this->Last_name' AND Type = 'Manager'";
        $this->db->where($where);
        $this->db->from('userdetail');
        $query=$this->db->get();
        return $query->result();

    }

        function view_manager_detail(){
            $this->Type ="Manager";

           // $this->db->select("First_name","Last_name","Address_no","Address_street","Address_city","Contact","Email_address");
            $where = "Type = 'Manager'";
            $this->db->where($where);
            $this->db->from('userdetail');
            $query=$this->db->get();
            return $query->result();
    }

    function delete_manager_detail($user_id){

        $where = "User_ID = '$user_id'";
        $this->db->delete('userdetail',$where);
        // $this->db->select("First_name","Last_name","Address_no","Address_street","Address_city","Contact","Email_address");
        $where = "Type = 'Manager'";
        $this->db->where($where);
        $this->db->from('userdetail');
        $query=$this->db->get();
        return $query->result();
    }

    function search_employee_detail(){
        $this->First_name   = $_POST['FirstName']; // please read the below note
        $this->Last_name  = $_POST['LastName'];

        $where = "First_name = '$this->First_name' AND Last_name = '$this->Last_name' AND Type = 'Employee'";
        $this->db->where($where);
        $this->db->from('userdetail');
        $query=$this->db->get();
        return $query->result();

    }

    function view_employee_detail(){
        $this->Type ="Manager";

        // $this->db->select("First_name","Last_name","Address_no","Address_street","Address_city","Contact","Email_address");
        $where = "Type = 'Employee'";
        $this->db->where($where);
        $this->db->from('userdetail');
        $query=$this->db->get();
        return $query->result();
    }

    function delete_employee_detail($user_id){

        $where = "User_ID = '$user_id'";
        $this->db->delete('userdetail',$where);
        // $this->db->select("First_name","Last_name","Address_no","Address_street","Address_city","Contact","Email_address");
        $where = "Type = 'Employee'";
        $this->db->where($where);
        $this->db->from('userdetail');
        $query=$this->db->get();
        return $query->result();
    }

}