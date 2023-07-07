<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseUser extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if(!$this->session->has_userdata("user_login")){
            $this->session->set_flashdata('error', 'You are not connected!');
            redirect(base_url("user/login"));
        }
    }
}
