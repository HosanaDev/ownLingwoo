<?php

namespace Entity;

class Message
{


// PROPERTIES \\


    /**
    * User idUser1.
    *
    * @var int
    */
    private $idUser1;


    /**
    * User idUser2.
    *
    * @var int
    */
    private $idUser2;


    /**
    * User date.
    *
    * @var string
    */
    private $date;


    /**
    * User content.
    *
    * @var string
    */
    private $content;


    /**
    * Retrieve the user of the user1 property
    *
    * @param void
    *
    * @return int 
    */

    public function getIdUser1(){
        
        return $this -> idUser1;
    }


    /**
    * Retrieve the user of the user2 property
    *
    * @param void
    *
    * @return int 
    */

    public function getIdUser2(){
        
        return $this -> idUser2;
    }


    /**
    * Retrieve the date of the date property
    *
    * @param void
    *
    * @return string 
    */

    public function getDate(){
        
        return $this -> date;
    }



    /**
    * Retrieve the content of the content property
    *
    * @param void
    *
    * @return string 
    */

    public function getContent(){
        
        return $this -> content;
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
    * @param string
    *
    * @return void 
    */

    public function setDate($date){

        if(is_string($date)){

            return $this -> date = $date;
        }

    }


    /**
    * 
    *
    * @param string
    *
    * @return void 
    */

    public function setContent($content){

        if(is_string($content)){

            return $this -> content = $content;
        }

    }




}