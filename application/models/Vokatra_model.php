<?php   if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Vokatra_model extends CI_Model{
         
        public function __construct(){
		}

        public function get_liste_vokatra(){
            $this->load->database('default');
			$query = $this->db->get('vokatra');
			$result = $query->result();
            $this->db->close();
            return $result;
        }

        public function save($id_parcelle, $tongony, $taolany, $lanja, $additif){
            $this->load->database('default');
            $sql = "INSERT INTO vokatra(id_parcelle, tongony, taolany, lanja, additif) VALUES (?, ?, ?, ?, ?)";
            $result = $this->db->query($sql, array($id_parcelle, $tongony, $taolany, $lanja));
            $this->db->close();
            return $result;
        }

        public function get_lanja_vokatra(){
            $liste_vokatra = $this->get_liste_vokatra();
            $this->load->model("Zezika_model");
            $liste_zezika_additif = $this->Zezika_model->get_liste_zezika_additif();
            $result = [];
            foreach($liste_vokatra as $vokatra){
                $data = [];
                $data["id_vokatra"] = $vokatra->id_vokatra;
                $data["id_parcelle"] = $vokatra->id_parcelle;
                $data["lanja"] = $vokatra->lanja;
                $data["additif"] = $vokatra->additif;
                $data["lanja_finale"] = $vokatra->lanja;
                if($vokatra->additif == "t"){
                    foreach($liste_zezika_additif as $zezika_additif){
                        if($vokatra->id_vokatra == $zezika_additif->id_vokatra){
                            // $data["lanja_finale"] = $data
                            $temp = ($data["lanja"] *  $zezika_additif->consequence) / 100;
                            $data["lanja_finale"] = $data["lanja_finale"] + $temp;
                        }
                    }
                }
                $result[] = $data;
            }
            return $result;
        }
    }
?>
