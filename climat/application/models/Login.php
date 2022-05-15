<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Model
{
	public function verifyLogin($login,$mdp)
	{
	//	var_dump($statuts) ;
        $requete="select * from administrateur where login='%s' and mdp='%s'";
		$requete=sprintf($requete,$login,$mdp);
	//	echo $requete;
		$query=$this->db->query($requete);
		
		$result=array();
		foreach($query->result_array() as $row)
		{
			return true;
		}	
		return false;
	}
	public function verifyField($login,$mdp)
	{
		if(empty($login) || empty($mdp)) return true;
		return false;
	}


}
?>