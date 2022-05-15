<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Gallery extends CI_Model
{
	 public function InsertGallery($idtype,$nomfichier,$descri)
	{
		
        $requete="insert into causerechauffementclimat values('','%s','%s','%s')";
		$requete=sprintf($requete,$idtype,$nomfichier,$descri);
		$query=$this->db->query($requete);
	} 
	public function getGallery($idcategorie)
	{
			$requete="select * from causerechauffementclimat where idtype='%s'";
			$requete=sprintf($requete,$idcategorie);
			$query=$this->db->query($requete);
			
			$result=array();
			foreach($query->result_array() as $row)
			{
				$result[]=$row;
			}	
			return $result;
	}

	public function getAllGallery()
	{
			$requete="select * from causerechauffementclimat ";
			$query=$this->db->query($requete);
			
			$result=array();
			foreach($query->result_array() as $row)
			{
				$result[]=$row;
			}	
			return $result;
	}
	public function deleteImageGallery($id)
	{
		$requete="delete from causerechauffementclimat where id='%d'";
		$requete=sprintf($requete,$id);
		$query=$this->db->query($requete);
	}
}
?>