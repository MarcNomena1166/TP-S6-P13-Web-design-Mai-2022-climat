<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryController extends CI_Controller {

	public function __construct()
	 {
		 parent::__construct();
/* 		 $this->load->model('Annonce');
		 $this->load->model('CV'); */
		 $this->load->model('Gallery');
		 $this->load->helper(array('form', 'url'));
	 }
	public function index($idtype)
	{
		
		$data=array();
		$data['listeImage']=$this->Gallery->getGallery($idtype);
		$this->load->view('gallery',$data);
	}	
	public function insert()
	{
		$this->load->view('insertGallery');
	}

/* 	public function insertFile()
	{
		$image=$this->input->post('image');
		$description=$this->input->post('description');
		
		echo $description;

		$nomOrigine = $_FILES['image']['name'];
		$elementsChemin = pathinfo($nomOrigine);
		$extensionFichier = $elementsChemin['extension'];
		$extensionsAutorisees = array("jpeg", "jpg", "gif","png");
		if (!(in_array($extensionFichier, $extensionsAutorisees))) {
			echo "Le fichier n'a pas l'extension attendue";
		} else {    
			// Copie dans le repertoire du script avec un nom
			// incluant l'heure a la seconde pres 
			$repertoireDestination = dirname(_)."/";
			$nomDestination = "fichier_du_.".$extensionFichier;

			if (move_uploaded_file($_FILES["image"]["tmp_name"], 
											$repertoireDestination.$nomDestination)) {
				echo "Le fichier temporaire ".$_FILES["image"]["tmp_name"].
						" a été déplacé vers ".$repertoireDestination.$nomDestination;
			} else {
				echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
						"Le déplacement du fichier temporaire a échoué".
						" vérifiez l'existence du répertoire ".$repertoireDestination;
			}
		}
	} */
	public function do_upload()
	{
			$config['upload_path']          = './assets/images/demo/gallery';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			/* $config['max_size']             = 100;
			$config['max_width']            = 1024;
			$config['max_height']           = 768; */

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image'))
			{
					$error = array('error' => $this->upload->display_errors());

					$this->load->view('insertGallery', $error);
			}
			else
			{
					$data = array('upload_data' => $this->upload->data());

					$this->load->view('insertGallery', $data);
			}

		$description=$this->input->post('description');
		$idtype=$this->input->post('typerechauffementclimat');
		$nomfichier=$this->upload->data('file_name'); 
		$this->Gallery->InsertGallery($idtype,$nomfichier,$description);
		
	}

	public function deleteGallery($id)
	{
		$this->Gallery->deleteImageGallery($id);
		$data=array();
		$data['listeAllImage']=$this->Gallery->getAllGallery();	
		$this->load->view('listeGallery',$data);

	}

	public function listeGallery()
	{
		$data['listeAllImage']=$this->Gallery->getAllGallery();	
		$this->load->view('listeGallery',$data);
	}
}
