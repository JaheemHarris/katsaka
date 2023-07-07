<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseAdmin.php');

class Place extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('placeModel');	
		$this->load->model('heureModel');
	}

	public function liste(){
		$data = [];
		
		$heure = $this->heureModel->get_now();
		$places = $this->placeModel->list($heure);
		if(!is_array($places))
			$places = [];
		// forEach($places as $place){
		// 	$place['amende'] = 0;
		// 	$h1 = 0;
		// 	$h2 = strtotime($heure);
		// 	var_dump($h2-$h1);
		// 	// $diff = date_diff($d2,$d1);
		// 	// var_dump($d1);
		// 	// var_dump($diff->days,$diff->h);
		// 	// if($reste < 0){
		// 	// 	$place['est_occupe'] = 2;
		// 	// 	$reste = 0;
		// 	// 	$place['amende'] = 150000;
		// 	// }
		// 	// $place['reste'] = $reste/60;
		// }
		// // var_dump($heure);
		$data['places'] = $places;
		$data['page'] = 'place-list.php';
		$this->load->view('user-template',$data);
	}
}
