<?php

namespace DAO;

use Doctrine\DBAL\Connection;

abstract class DAO
{

	/**
	* Database connexion
	*
	* @var \Doctrine\DBAL\Connection
	*/
	private $db;

	/**
	* Constructor
	*
	* @param \Doctrine\DBAL\Connection (objet de connexion à la BDD)
	*/
	public function __construct(Connection $db){
		$this -> db = $db;
	}

	/**
	* Donne acces à l'objet connection pour nos héritiers (car private)
	*
	* @param \Doctrine\DBAL\Connection The database connection object
	*/
	public function getDb(){
		return $this -> db;
	}

	/**
	* créer un objet de l'Entity à partir d'un array (enregistrement)
	* Doit OBLIGATOIREMENT être redéfinie chez les héritiers
	*
	*/
	protected abstract function buildEntityObject(array $row);

	







}