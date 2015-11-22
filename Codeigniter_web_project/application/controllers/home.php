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
		
	
}
