<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'controllers/BaseUser.php');

class Archive extends BaseUser {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Archive_model');
    }

    public function index(){
        var_dump($_SESSION);
        $this->load->view('user_template');
    }

    public function new(){
        $data = [];
        $liste_nature = $this->Archive_model->get_liste_nature_dossiers();
        $data['liste_nature_dossiers'] = $liste_nature;
        $this->load->view('archive_enregistrement', $data);
    }

    public function complete(){
        if($this->input->server('REQUEST_METHOD') == 'GET'){
            $text = $this->input->get('q');
            $suggestions = $this->Archive_model->search_completion($text);
            echo json_encode($suggestions);
        }
    }

    public function save(){
        if($this->input->server('REQUEST_METHOD') !== 'POST'){
            $this->session->set_flashdata('error', 'Please complete this form!');
            redirect(base_url('archive/new'));
        }

        if($this->form_validation->run() === FALSE){

        }

        $num_arrivee = trim($this->input->post('numero_arrivee'));
        $nature_dossier = trim($this->input->post('nature_dossier'));
        $date_arrivee = trim($this->input->post('date_arrivee'));
        $agent = trim($this->input->post('agent'));
        $observation = trim($this->input->post('observation'));
        $num_visa_cf = trim($this->input->post('numero_visa'));


        $num_sce_archive = 1;
        $enregistreur = $this->session->user_id;

        $archive = [];
        $archive[] = $num_arrivee;
        $archive[] = $nature_dossier;
        $archive[] = $num_sce_archive;
        $archive[] = $date_arrivee;
        $archive[] = $agent;
        $archive[] = $observation;
        $archive[] = $num_visa_cf;
        $archive[] = $enregistreur;
        $result = $this->Archive_model->save($archive);
        if(!$result){
            redirect(base_url('archive/new?error'));
        }
        redirect(base_url('archive/new?success'));
    }

    public function search(){
        $this->load->view('archive_recherche');
    }
}
