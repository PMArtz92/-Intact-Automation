<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function index()
    {
        $this->load->view("template/header");
        $this->load->view("pages/index");
        $this->load->view("template/footer");

    }
    //http://localhost/WebProject/index.php/welcome/mynew
    public function about(){
        $this->load->view("template/header");
        $this->load->view("pages/about");
        $this->load->view("template/footer");
    }

    public function service()
    {
        $this->load->view("template/header");
        $this->load->view("pages/service");
        $this->load->view("template/footer");
    }
    public function contact(){
        $this->load->view("template/header");
        $this->load->view("pages/contact");
        $this->load->view("template/footer");
    }
    public function service_form(){
        $this->load->view("template/header");
        $this->load->view("pages/service_form");
        $this->load->view("template/footer");
    }
    public function userprofile(){
        $this->load->view("template/headeruser");
        $this->load->view("user/userprofile");
        $this->load->view("template/footer");
    }
    public function orders(){
        $this->load->view("template/headeruser");
        $this->load->view("user/orders");
        $this->load->view("template/footer");
    }
    public function signup(){
        $this->load->view("template/headeruser");
        $this->load->view("user/signup");
        $this->load->view("template/footer");
    }
    public function booking(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/booking");
        $this->load->view("template/footer");
    }
    public function employee(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/employee");
        $this->load->view("template/footer");
    }
    public function manager(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/manager");
        $this->load->view("template/footer");
    }
    public function report(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/report");
        $this->load->view("template/footer");
    }
    public function mobile_assit(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/mobile_assit");
        $this->load->view("template/footer");
    }

    public function manager_add_remove(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/manager_operation");
        $this->load->view("template/footer");
    }

}