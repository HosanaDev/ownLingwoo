<?php

namespace DAO;

use Doctrine\DBAL\Connection;
use Entity\User;

class UserDAO extends DAO
{

	public function loadUserByUsername($username){
		$requete = "SELECT user.*, profile.* FROM user, profile WHERE user.idUser = profile.idUser AND profile.username = ?";
		$resultat = $this -> getDb() -> fetchAssoc($requete, array($username));
		
		if($resultat){
			return $this -> buildEntityObject($resultat);
		}
		else{
			throw new UsernameNotFoundException("L'utilisateur n'existe pas :" . $username);
		}
	}
	
	/**
	*
	*@inheritDoc
	*/
	public function supportsClass($class){
		return 'Entity\User' === $class;
	}
	
	/**
	*
	*@inheritDoc
	*/
	public function refreshUser(UserInterface $user){
		$class = get_class($user);
		if(!$this -> supportsClass($class)){
			throw new UnsupportedUserException('La classe instanciée n\'est pas supportée : ' . $class);
		}
		return $this -> loadUserByUsername($user -> getUsername());
	}

	public function find($idUser){
		$requete = "SELECT * FROM user WHERE idUser = ?";
		$resultat = $this -> getDb() -> fetchAssoc($requete, array($idUser));

		if($resultat){
			return $this -> buildEntityObject($resultat);
		}
		else{
			throw new \Exception("Aucun user à l'id:$idUser");
		}

	}

	public function findAllUser(){ // Affiche les matchs d'un user
		$requete = "SELECT * FROM user";
		$resultat = $this -> getDb() -> fetchAll($requete);
		// Execute la requete puis fait un fetchassoc en meme temps.
		
		// Convertir l'array multi composé d'array, en un array multi composé d'objets
		
		$users = array();
		foreach($resultat as $value){
			$idUser = $value['idUser'];
			
			$users[$idUser] = $this -> buildEntityObject($value);
			//BuildProduit me permet de créer un objet de la class Produit
		}
		return $users; 
	}

	protected function buildEntityObject(array $value){
		$user = new User; 
		
		$user -> setIdUser($value['idUser']); 
		$user -> setSessions($value['sessions']); 
		$user -> setDateSignIn($value['dateSignIn']); 
		$user -> setStatus($value['status']); 
		$user -> setPassword($value['password']);
		$user -> setEmail($value['email']);  
		$user -> setRole($value['role']); 
		$user -> setSalt($value['salt']);   
		
		return $user;
	}
}