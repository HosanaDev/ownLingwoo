<?php

namespace Entity;

class Matches 
{


// PROPERTIES \\

    /**
    * Matches idMatch.
    *
    * @var integer
    */
    private $idMatch;


    /**
    * Matches dateMatch.
    *
    * @var string
    */
    private $dateMatch;


    /**
    * Matches idUser1.
    *
    * @var int
    */
    private $idUser1;


    /**
    * Matches idUser2.
    *
    * @var int
    */
    private $idUser2;


    /**
    * Matches idLog.
    *
    * @var int
    */
    private $idLog;


    /**
    * Matches statusMatch.
    *
    * @var int
    */
    private $statusMatch;





// GETTERS \\


    /**
    * Retrieve the id match of the idMatches property
    *
    * @param void
    *
    * @return int 
    */

    public function getIdMatch(){
        
        return $this -> idMatch;
    }


    /**
    * Retrieve the date match of the dateMatch property
    *
    * @param void
    *
    * @return string 
    */

    public function getDateMatch(){
        
        return $this -> dateMatch;
    }


    /**
    * Retrieve the idUser1 of the idUser1 property
    *
    * @param void
    *
    * @return int
    */

    public function getIdUser1(){
        
        return $this -> idUser1;
    }


    /**
    * Retrieve the idUser2 of the idUser2 property
    *
    * @param void
    *
    * @return int
    */

    public function getIdUser2(){
        
        return $this -> idUser2;
    }


    /**
    * Retrieve the idLog of the idLog property
    *
    * @param void
    *
    * @return int
    */

    public function getIdLog(){
        
        return $this -> idLog;
    }




// SETTERS \\



    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setIdMatch($idMatch){

        if(is_numeric($idMatch)){

            return $this -> idMatch = $idMatch;
        }
    }


    /**
    * 
    *
    * @param string
    *
    * @return void 
    */

    public function setdateMatch($dateMatch){

        if(is_numeric($dateMatch)){

            return $this -> dateMatch = $dateMatch;
        }

    }


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setIdUser1($idUser1){

        if(is_numeric($idUser1)){

            return $this -> idUser1 = $idUser1;
        }

    }


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setIdUser2($idUser2){

        if(is_numeric($idUser2)){

            return $this -> idUser2 = $idUser2;
        }

    }


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setIdLog($idLog){

        if(is_numeric($idLog)){

            return $this -> idLog = $idLog;
        }

    }


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setStatusMatch($statusMatch){

        if(is_numeric($statusMatch)){

            return $this -> statusMatch = $statusMatch;
        }

    }



}