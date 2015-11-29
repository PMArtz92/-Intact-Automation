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

    public function signup(){
        $this->load->view("template/header");
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
        $this->load->model('search_system_module');
        $this->data['posts']=$this->search_system_module->view_manager_detail();
        $this->load->view("template/headeradmin");
        $this->load->view('admin/manager_operation',$this->data);
    }

    public function manager_signup(){
        $this->load->view("template/headeradmin");
        $this->load->view("admin/managersignup");
        $this->load->view("template/footer");
    }

    public function employee_operation(){
        $this->load->model('search_system_module');
        $this->data['posts']=$this->search_system_module->view_employee_detail();
        $this->load->view("template/headeradmin");
        $this->load->view('admin/employee_operation',$this->data);
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

    public  function search_manager(){

        $this->load->model('search_system_module');
        $this->data['posts']=$this->search_system_module->search_manager_detail();
        $this->load->view("template/headeradmin");
        $this->load->view('admin/manager_operation',$this->data);
        $this->load->view("template/footer");
    }

    public  function search_employee(){

        $this->load->model('search_system_module');
        $this->data['posts']=$this->search_system_module->search_employee_detail();
        $this->load->view("template/headeradmin");
        $this->load->view('admin/employee_operation',$this->data);
        $this->load->view("template/footer");
    }

    public function delete_manager($user_id){
        $this->load->model('search_system_module');
        $this->data['posts']=$this->search_system_module->delete_Manager_detail($user_id);
        $this->load->view("template/headeradmin");
        $this->load->view('admin/employee_operation',$this->data);
        $this->load->view("template/footer");
    }

    public function delete_employee($user_id){
        $this->load->model('search_system_module');
        $this->data['posts']=$this->search_system_module->delete_Employee_detail($user_id);
        $this->load->view("template/headeradmin");
        $this->load->view('admin/employee_operation',$this->data);
        $this->load->view("template/footer");
    }


    public function invoice(){
        $this->load->view("template/headeruser");
        $this->load->view("user/invoice");
        $this->load->library('someclass');
        $this->load->library('someclass');
        //$this->load->view("template/footer");
    }

    /*-------User dashboard----------*/


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

    public function orders(){
        $this->load->view("template/headeruser");
        $this->load->view("user/orders");
    }

    public function userprofile(){
        $this->load->view("template/headeruser");
        $this->load->view("user/userprofile");
    }

    public function userprofileedit(){
        $this->load->view("template/headeruser");
        $this->load->view("user/userprofile-edit");
    }

    public function login(){
        $this->load->model('login_model');
        if($query= $this->login_model->check_login()){
            $user_id = $query->User_ID;
            $user_type = $query->Type;
            if($query->Type == "Manager") {
                $this->session->set_userdata(array('logged_in' => TRUE, 'user_id' => $user_id, 'user_type' => $user_type));

            }
            elseif($query->Type == "customer" or " "){
                $this->session->set_userdata(array('logged_in' => TRUE, 'user_id' => $user_id, 'user_type' => $user_type));
                $this->load->view("template/headeruser");
                $this->load->view("user/online");

            }
            elseif($query->Type == "admin"){
                $this->session->set_userdata(array('logged_in' => TRUE, 'user_id' => $user_id, 'user_type' => $user_type));
                $this->load->view("template/headeradmin");
                $this->load->view("admin/adminHome");
            }
        }
        else{
            $this->session->set_userdata('login_error',TRUE);
            $this->load->view("template/headeradmin");
            $this->load->view("admin/managersignup");
            $this->load->view("template/footer");
        }
    }

    public function logout(){
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

    //registration
    public function add_details(){
        $data = array(
            'First_name' => $_POST['first_name'] ,
            'Last_name' => $_POST['last_name'] ,
            'Address_no' => $_POST['address_no'] ,
            'Address_street' => $_POST['address_street'] ,
            'Address_city' => $_POST['address_city'] ,
            'Contact' => $_POST['contact'] ,
            'Email_address' => $_POST['email_address'] ,
            'Password' => md5($_POST['password']) ,
        );
        $this->form_model->create($data);
        $this->index();
    }

    public function add_mobile_assistance(){
        $data = array(
            'First_name' => $_POST['first_name'] ,
            'Last_name' => $_POST['last_name'] ,
            'Address_no' => $_POST['address_no'] ,
            'Address_street' => $_POST['address_street'] ,
            'Address_city' => $_POST['address_city'] ,
            'Contact' => $_POST['contact'] ,
            'Email_address' => $_POST['email_address'] ,
            'description' => $_POST['desc'] ,
        );
        $this->form_model->create_mob($data);
    }

}