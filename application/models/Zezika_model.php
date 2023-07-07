<?php   if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Zezika_model extends CI_Model{
         
        public function __construct(){
		}

        public function get_liste_zezika(){
            $this->load->database('mysql');
			$query = $this->db->get('zezika');
			$result = $query->result();
            $this->db->close();
            return $result;
        }

        public function get_liste_zezika_parcelle(){
            $this->load->database('mysql');
			$query = $this->db->get('zezika_parcelle');
			$result = $query->result();
            $this->db->close();
            return $result;
        }

        public function get_liste_zezika_details(){
            $this->load->database('mysql');
			$query = $this->db->get('view_details_zezika');
			$result = $query->result();
            $this->db->close();
            return $result;
        }

        public function get_liste_zezika_additif(){
            $this->load->database('mysql');
			$query = $this->db->get('view_zezika_vokatra_additif');
			$result = $query->result();
            $this->db->close();
            return $result;
        }

        public function save($id_vokatra, $id_zezika, $lanja_zezika){
            $this->load->database('mysql');
            $sql = "INSERT INTO zezika_parcelle(id_vokatra, id_zezika, lanja_zezika) VALUES (?, ?, ?)";
            $result = $this->db->query($sql, array($id_vokatra, $id_zezika, $lanja_zezika));
            $this->db->close();
            return $result;
        }

        public function getListePourcentageZezikaVokatra(){
            $this->load->database('mysql');
			$query = $this->db->get('view_pourcentage_zezika');
			$result = $query->result();
            $this->db->close();
            return $result;
        }

        public function getProduitZezika(){
            $this->load->model('Vokatra_model');
            $liste_vokatra =  $this->Vokatra_model->get_liste_vokatra();
            $liste_pourcentage_zezika = $this->getListePourcentageZezikaVokatra();
            $result = [];
            foreach($liste_vokatra as $vokatra){
                foreach($liste_pourcentage_zezika as $pourcentage_zezika){
                    if($vokatra->id_vokatra == $pourcentage_zezika->id_vokatra){
                        $data = [];
                        $data["id_zezika"]  = $pourcentage_zezika->id_zezika;
                        $data["zezika"] = $pourcentage_zezika->zezika;
                        $data["lanja_zezika"] = $pourcentage_zezika->lanja_zezika;
                        $data["produit"] = ($pourcentage_zezika->pourcentage * $vokatra->lanja) / 100;
                        $result[] = $data;
                    }
                }
            }
            return $result;
        }

        

        public function getTotalProduitZezika(){
            $produit_zezika = $this->getProduitZezika();
            $distinctData = [];
            $sumProduit = [];
            $sumQte = [];

            foreach ($produit_zezika as $produit) {
                $id_zezika = $produit["id_zezika"];
                if (!isset($distinctData[$id_zezika])) {
                    $distinctData[$id_zezika] = [
                        "id_zezika" => $produit["id_zezika"],
                        "zezika" => $produit["zezika"]
                    ];
                }
                if (!isset($sumProduit[$id_zezika])) {
                    $sumProduit[$id_zezika] = 0;
                }
                if (!isset($sumQte[$id_zezika])) {
                    $sumQte[$id_zezika] = 0;
                }
                $sumProduit[$id_zezika] += $produit["produit"];
                $sumQte[$id_zezika] += $produit["lanja_zezika"];
            }

            $result = [];
            foreach ($distinctData as $id_zezika => $distinctItem) {
                $result[] = [
                    "id_zezika" => $distinctItem["id_zezika"],
                    "zezika" => $distinctItem["zezika"],
                    "total_produit" => $sumProduit[$id_zezika],
                    "total_quantite" => $sumQte[$id_zezika],
                    "efficacite" => $sumProduit[$id_zezika] / $sumQte[$id_zezika]
                ];
            }

            usort($result, function($a, $b) {
                if ($a['efficacite'] === $b['efficacite']) {
                    return 0;
                }
                return ($a['efficacite'] > $b['efficacite']) ? -1 : 1;
            });
            return $result;
        }

        public function get_rapport(){
            $this->load->model('Vokatra_model');
            $liste_vokatra =  $this->Vokatra_model->get_liste_vokatra();
            $result = [];
            foreach ($liste_vokatra as $vokatra) {
                $result[] = [
                    "id_vokatra" => $vokatra->id_vokatra,
                    "id_parcelle" => $vokatra->id_parcelle,
                    "tongony" => $vokatra->tongony,
                    "taolany" => $vokatra->taolany,
                    "lanja" => $vokatra->lanja,
                    "rapport" => $vokatra->lanja / $vokatra->tongony,
                    "combinaison" => ""
                ];
            }

            usort($result, function($a, $b) {
                if ($a['rapport'] === $b['rapport']) {
                    return 0;
                }
                return ($a['rapport'] > $b['rapport']) ? -1 : 1;
            });
            return $result;
        }

        public function get_efficacite_combinaison(){
            $rapports = $this->get_rapport();
            $liste_zezika = $this->get_liste_zezika_details();
            $result = [];
            foreach($rapports as $rapport){
                $data = [
                    "id_vokatra" => $rapport["id_vokatra"],
                    "id_parcelle" => $rapport["id_parcelle"],
                    "tongony" => $rapport["tongony"],
                    "taolany" => $rapport["taolany"],
                    "lanja" => $rapport["lanja"],
                    "rapport" => $rapport["rapport"],
                    "combinaison" => ""
                ];
                foreach($liste_zezika as $zezika){
                    if($rapport["id_vokatra"] == $zezika->id_vokatra){
                        $data["combinaison"] = $data["combinaison"]."-".$zezika->zezika;
                    }
                }
                $result[] = $data;
            }
            return $result;
        }
    }
?>
