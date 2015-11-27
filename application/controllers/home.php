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
        $this->load->view("admin/calender/index");
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

    public function manager_operation(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/manager_operation");
        $this->load->view("template/footer");
    }

    public function manager_signup(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/managersignup");
        $this->load->view("template/footer");
    }

    public function employee_operation(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/employee_operation");
        $this->load->view("template/footer");
    }

    public function employee_signup(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/employeesignup");
        $this->load->view("template/footer");
    }

    public function manager_create(){
        $this->load->model('registration_module');
        if($query= $this->registration_module->create_manager()){
            $this->load->view("template/headeradmin");
            $this->load->view("admin/manager");
            $this->load->view("template/footer");
        }
        else{
            $this->load->view("template/headeradmin");
            $this->load->view("admin/managersignup");
            $this->load->view("template/footer");
        }
    }

    public function employee_create(){
        $this->load->model('registration_module');
        if($query= $this->registration_module->create_employee()){
            $this->load->view("template/headeradmin");
            $this->load->view("admin/manager");
            $this->load->view("template/footer");
        }
        else{
            $this->load->view("template/headeradmin");
            $this->load->view("admin/managersignup");
            $this->load->view("template/footer");
        }
    }

    public function online(){
        $this->load->view("template/headeruser");
        $this->load->view("user/online");
        //$this->load->view("template/footer");
    }

    public function mobile(){
        $this->load->view("template/headeruser");
        $this->load->view("user/mobile");
        //$this->load->view("template/footer");
    }

}