<?php   if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Archive_model extends CI_Model{
         
        public function __construct(){
		}

		public function get_liste_nature_dossiers(){
			$query = $this->db->get('nature_dossier');
			return $query->result();
		}

		public function save($archive){
			$sql = 'INSERT INTO archive (num_arrivee, nature_dossier, num_sce_archive, date_arrivee, agent, observation, num_visa_cf, enregistreur, date_enregistrement) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())';
			$query = $this->db->query($sql, $archive);
			return $query;
		}

		public function search_completion($text){
			// $sql = "SELECT * FROM nature_dossier WHERE nomenclature LIKE %?%";
			// $query = $this->db->query($sql, array($text));
			return null;
		}
    }
?>
