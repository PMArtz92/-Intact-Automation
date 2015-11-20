<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view("pages/index");
		
	}
	//http://localhost/WebProject/index.php/welcome/mynew
	public function about(){
		$this->load->view("pages/indexabout.html");
	}
	
	public function cars()
	{
		$this->load->view("pages/indexcars.html");
	}
	
		
	
}
