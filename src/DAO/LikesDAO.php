<?php

namespace DAO;

use Doctrine\DBAL\Connection;
use ownLingwoo\Entity\Likes;

class LikesDAO extends DAO
{

	public function findAll(){
		$requete = "SELECT * FROM likes";
		$resultat = $this -> getDb() -> fetchAll($requete);
		// Execute la requete puis fait un fetchassoc en meme temps.
		
		// Convertir l'array multi composé d'array, en un array multi composé d'objets
		
		$likes = array();
		foreach($resultat as $value){
			$idLike = $value['idLike'];
			
			$likes[$idLike] = $this -> buildEntityObject($value);
			//BuildProduit me permet de créer un objet de la class Produit
		}
		return $likes; 
	}

	public function find($idLike){
		$requete = "SELECT * FROM likes WHERE idLike = ?";
		$resultat = $this -> getDb() -> fetchAssoc($requete, array($idLike));

		if($resultat){
			return $this -> buildEntityObject($resultat);
		}
		else{
			throw new \Exception("Aucun like à l'id:$idLike");
		}

	}
	
	protected function buildEntityObject(array $value){
		$like = new Like; 
		
		$like -> setIdLike($value['idLike']); 
		$like -> setidUserLike($value['idUserLike']); 
		$like -> setIdUserTarget($value['idUserTarget']); 
		$like -> setStatusLike($value['statusLike']);

		
		return $like;
	}
}
		
		