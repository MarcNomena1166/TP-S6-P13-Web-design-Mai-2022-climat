<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
	 {
		 parent::__construct();
		 $this->load->model('Login');
		 $this->load->model('Gallery');
	 }
	public function index()
	{
		$data=array();	
		$this->load->view('login');
	}	

	public function login()
	{
		$login=$this->input->post('login');
		$mdp=$this->input->post('mdp');
		
		if($this->Login->verifyField($login,$mdp)==false)
		{
			$verify=$this->Login->verifyLogin($login,$mdp);		
			
			if($verify==true)
			{
				$data['listeAllImage']=$this->Gallery->getAllGallery();	
				$this->load->view('listeGallery',$data);
			}
			else {			
				$this->load->view('login');
			}
		}


	}
}
?>