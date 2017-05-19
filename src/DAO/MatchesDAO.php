<?php

namespace DAO;

use Doctrine\DBAL\Connection;
use ownLingwoo\Entity\Matches;

class MatchesDAO extends DAO
{

	public function findAll(){
		$requete = "SELECT * FROM matches";
		$resultat = $this -> getDb() -> fetchAll($requete);
		// Execute la requete puis fait un fetchassoc en meme temps.
		
		// Convertir l'array multi composé d'array, en un array multi composé d'objets
		
		$matches = array();
		foreach($resultat as $value){
			$idMatch = $value['idMatch'];
			
			$matches[$idMatch] = $this -> buildEntityObject($value);
			//BuildProduit me permet de créer un objet de la class Produit
		}
		return $matches; 
	}

	public function findAllByUser($user){ // Affiche les matchs d'un user
		$requete = "SELECT profile.*, matches.idMatch FROM profile, matches WHERE profile.idUser = matches.idUser1 AND matches.idUser2 = ?
			OR profile.idUser = matches.idUser2 AND matches.idUser2 = ? AND profile.idProfile = ? IS NULL
			OR profile.idUser = matches.idUser2 AND matches.idUser1 = ? AND profile.idProfile = ? IS NULL
			OR profile.idUser = matches.idUser1 AND matches.idUser1 = ? AND profile.idProfile = ? IS NULL;";
		$resultat = $this -> getDb() -> fetchAll($requete);
		// Execute la requete puis fait un fetchassoc en meme temps.
		
		// Convertir l'array multi composé d'array, en un array multi composé d'objets
		
		$matches = array();
		foreach($resultat as $value){
			$idMatch = $value['idMatch'];
			
			$matches[$idMatch] = $this -> buildEntityObject($value);
			//BuildProduit me permet de créer un objet de la class Produit
		}
		return $matches; 
	}

	public function find($idMatch){
		$requete = "SELECT * FROM matches WHERE idMatch = ?";
		$resultat = $this -> getDb() -> fetchAssoc($requete, array($idMatch));

		if($resultat){
			return $this -> buildEntityObject($resultat);
		}
		else{
			throw new \Exception("Aucun match à l'id:$idMatch");
		}

	}

	
	
	protected function buildEntityObject(array $value){
		$match = new Matches; 
		
		$match -> setIdMatch($value['idMatch']); 
		$match -> setDateMatch($value['dateMatch']); 
		$match -> setIdUser1($value['idUser1']); 
		$match -> setIdUser2($value['idUser2']);
		$match -> setIdLog($value['idLog']);
		$match -> setStatusMatch($value['statusMatch']);

		
		return $match;
	}
}
		
		