<?php

class username_edit extends CI_Controller {

    function index()
    {
        $this->load->helper(array('username_edit'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'Username', 'trim|required|min_length[5]|max_length[12]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('user/userprofile-edit');
        }
        else
        {
            $this->load->view('user/userprofile');
        }
    }
}
?>