<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'controllers/BaseUser.php');

class Vokatra extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Vokatra_model');
    }

    public function index(){
        $this->load->model('Parcelle_model');
        $parcelles = $this->Parcelle_model->get_liste_parcelle();
        $data = [];
        $data['parcelles'] = $parcelles;
        $this->load->view('enregistrer-vokatra', $data);
    }

    public function enregistrer(){
        $id_parcelle = $this->input->post('parcelle');
        $tongony = $this->input->post('tongony');
        $taolany = $this->input->post('taolany');
        $lanja = $this->input->post('lanja');
        $additif = $this->input->post('additif');
        if($additif == 0){
            $additif = TRUE;
        }else{
            $additif = FALSE;
        }
        var_dump($additif);
        die;
        $this->Vokatra_model->save($id_parcelle, $tongony, $taolany, $lanja, $additif);
        redirect(base_url('vokatra?success'));
    }

    public function parcelle_vokatra(){
        $data = [];
        $liste_parcelle_vokatra = $this->Vokatra_model->get_lanja_vokatra();
        $data['liste_parcelle_vokatra'] = $liste_parcelle_vokatra;
        $this->load->view('parcelle-additif', $data);
    }
}
