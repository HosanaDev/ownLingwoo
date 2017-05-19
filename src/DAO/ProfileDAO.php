<?php

namespace DAO;

use Doctrine\DBAL\Connection;
use Entity\Profile;

class ProfileDAO extends DAO
{

	public function find($idProfile){
		$requete = "SELECT * FROM profile WHERE idProfile = ?";
		$resultat = $this -> getDb() -> fetchAssoc($requete, array($idProfile));

		if($resultat){
			return $this -> buildEntityObject($resultat);
		}
		else{
			throw new \Exception("Aucun profile à l'id:$idProfile");
		}

	}

	public function findAllProfile(){ // Affiche les profile
		$requete = "SELECT * FROM profile";
		$resultat = $this -> getDb() -> fetchAll($requete);
		// Execute la requete puis fait un fetchassoc en meme temps.
		
		// Convertir l'array multi composé d'array, en un array multi composé d'objets
		
		$profile = array();
		foreach($resultat as $value){
			$idProfile = $value['idProfile'];
			
			$profile[$idProfile] = $this -> buildEntityObject($value);
			//BuildProduit me permet de créer un objet de la class Produit
		}
		return $profile; 
	}

	protected function buildEntityObject(array $value){
		$profile = new Profile; 
		
		$profile -> setIdProfile($value['idProfile']); 
		$profile -> setIdUser($value['idUser']); 
		$profile -> setUsername($value['username']); 
		$profile -> setPic($value['pic']); 
		$profile -> setBio($value['bio']); 
		$profile -> setGender($value['gender']); 
		$profile -> setLang($value['lang']);
		$profile -> setAge($value['age']);  
		
		return $profile;
	}
}