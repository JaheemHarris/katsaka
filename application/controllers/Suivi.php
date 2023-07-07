<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'controllers/BaseUser.php');

class Suivi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Suivi_model');
    }

    public function index(){
        $this->load->view('enregistrer-suivi');
    }
}
