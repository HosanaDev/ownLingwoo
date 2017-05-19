<?php

namespace DAO;

use Doctrine\DBAL\Connection;
use ownLingwoo\Entity\Message;

class MessagesDAO extends DAO
{

	public function find($idMessage){
		$requete = "SELECT * FROM messages WHERE idMessage = ?";
		$resultat = $this -> getDb() -> fetchAssoc($requete, array($idProfile));

		if($resultat){
			return $this -> buildEntityObject($resultat);
		}
		else{
			throw new \Exception("Aucun messages à l'id:$idProfile");
		}

	}

	public function findAllByUser($idUser){
		$requete = "SELECT * FROM messages WHERE idSender OR idReceiver = ? ORDER BY date DESC";
		$resultat = $this -> getDb() -> fetchAssoc($requete, array($idProfile));

		if($resultat){
			return $this -> buildEntityObject($resultat);
		}
		else{
			throw new \Exception("Aucun messages à l'id:$idUser");
		}

	}

	public function conversation($idUser1, $idUser2){
		$requete = " SELECT * FROM messages WHERE idSender = $idUser1 AND idReceiver = $idUser2 OR idReceiver = $idUser1 AND idSender = $idUser2 ORDER BY date ASC";
		$resultat = $this -> getDb() -> fetchAssoc($requete, array($idProfile));

		if($resultat){
			return $this -> buildEntityObject($resultat);
		}
		else{
			throw new \Exception("Aucun messages à l'id:$idUser");
		}

	}


	protected function buildEntityObject(array $value){
		$message = new Message; 
		
		$message -> setIdMessage($value['idMessage']); 
		$message -> setIdUser1($value['idUser1']); 
		$message -> setIdUser2($value['idUser2']);
		$message -> setDate($value['date']); 
		$message -> setContent($value['content']); 
	
		return $message;
	}
}