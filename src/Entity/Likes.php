<?php

namespace Entity;

class Likes 
{   


// PROPERTIES \\
    /**
    * Likes idLikes.
    *
    * @var integer
    */
    private $idLike;

    /**
    * Likes idUserLike.
    *
    * @var integer
    */
    private $idUserLike;

    /**
    * Likes idUserTarget.
    *
    * @var integer
    */
    private $idUserTarget;

    /**
    * Likes idStatusLike
    *
    * @var integer
    */
    private $statusLike;





// GETTERS \\


    /**
    * Retrieve the id of the idLike property
    *
    * @param void
    *
    * @return int 
    */

    public function getIdLike(){
        
        return $this -> idLike;
    }


    /**
    * Retrieve the id of the userIdLike property
    *
    * @param void
    *
    * @return int 
    */

    public function getIdUserLike(){
        
        return $this -> idUserLike;
    }


    /**
    * Retrieve the id of the idUsertTarget property
    *
    * @param void
    *
    * @return int 
    */

    public function getIdUserTrget(){
        
        return $this -> idUserTarget;
    }


    /**
    * Retrieve the id of the statusLike property
    *
    * @param void
    *
    * @return int 
    */

    public function getStatusLike(){
        
        return $this -> statusLike;
    }





// SETTERS \\


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setIdLike($idLike){

        if(is_numeric($idLike)){

            return $this -> idLike = $idLike;
        }
       
    }


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setIdUserLike($idUserLike){

        if(is_numeric($idUserLike)){

            return $this -> idUserLike = $idUserLike;
        }
        
    }


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setIdUserTarget($idUserTarget){

        if(is_numeric($idUserTarget)){

            return $this -> idUserTarget = $idUserTarget;
        }
        
    }


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setStatusLike($statusLike){

        if(is_numeric($statusLike)){

            return $this -> statusLike = $statusLike;
        }      
    }












}