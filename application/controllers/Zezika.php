<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'controllers/BaseUser.php');

class Zezika extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Zezika_model');
    }

    public function index(){
        $this->load->model('Vokatra_model');
        $vokatras = $this->Vokatra_model->get_liste_vokatra();
        $zezikas = $this->Zezika_model->get_liste_zezika();
        $data = [];
        $data['vokatras'] = $vokatras;
        $data['zezikas'] = $zezikas;
        $this->load->view('enregistrer-zezika-parcelle', $data);
    }

    public function enregistrer(){
        $id_vokatra = $this->input->post('vokatra');
        $id_zezika = $this->input->post('zezika');
        $lanja_zezika = $this->input->post('lanja_zezika');
        $this->Zezika_model->save($id_vokatra, $id_zezika, $lanja_zezika);
        redirect(base_url('zezika?success'));
    }

    public function efficacite(){
        $efficacite_zezika = $this->Zezika_model->getTotalProduitZezika();
        $data = [];
        $data["liste_zezika"] = $efficacite_zezika;
        $this->load->view('efficacite-zezika', $data);
    }

    public function combinaison(){
        $combinaison_efficacite = $this->Zezika_model->get_efficacite_combinaison();
        $data = [];
        $data["liste_combinaison"] = $combinaison_efficacite;
        $this->load->view('efficacite-combinaison', $data);
    }
}
