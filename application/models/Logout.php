<?php
class Logout extends CI_Model {
    function index(){
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

}