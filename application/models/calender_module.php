<?php

class Calender_module extends CI_Model{

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


    function create_manager(){
        //$this->load->library('Form_validation');
        //$FirstName=$this->input->post('FirstName');
        $this->Type = "Manager";
        $this->First_name   = $_POST['FirstName']; // please read the below note
        $this->Last_name  = $_POST['LastName'];
        $this->Address_no   = $_POST['AddressNo'];
        $this->Address_street   = $_POST['AddressStreet'];
        $this->Address_city   = $_POST['AddressCity'];
        $this->Contact   = $_POST['Contact'];
        $this->Email_address   = $_POST['EmailAddress'];
        $this->Password   = md5($_POST['Password']);

        /*     $new_manager_insert_data=array(
                 'FirstName'=>$this->input->post('FirstName'),
                 'LastName'=>$this->input->post('LastName'),
                 'AddressNo'=>$this->input->post('AddressNo'),
                 'AddressStreet'=>$this->input->post('AddressStreet'),
                 'AddressCity'=>$this->input->post('AddressCity'),
                 'Contact'=>$this->input->post('Contact'),
                 'EmailAddress'=>$this->input->post('EmailAddress'),
                 'Password'=>$this->input->post('Password'),
             ); */
        $insert=$this->db->insert('userdetail', $this);
        //$insert = $this->db->insert('userdetail',$new_manager_insert_data);
        return $insert;
    }


}