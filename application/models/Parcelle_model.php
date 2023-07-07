<?php   if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Parcelle_model extends CI_Model{
         
        public function __construct(){
		}

		public function get_liste_parcelle(){
            $this->load->database('default');
			$query = $this->db->get('view_parcelle');
			$result = $query->result();
            $this->db->close();
            return $result;
		}
    }
?>
