<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {

	public function __construct()
	 {
		 parent::__construct();
/* 		 $this->load->model('Annonce');
		 $this->load->model('CV');
		 $this->load->model('Contrainte'); */
	 }
	public function index()
	{
		
		$data=array();
	//	$data['listeAnnonce']=$this->Annonce->getListeAnnonce();
		$this->load->view('home');
	}	
}
