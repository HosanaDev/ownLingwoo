<?php

namespace  Entity;

class User
{
    /**
    * User idUser.
    *
    * @var int
    */

    private $idUser;


    /**
    * User sessions.
    *
    * @var int
    */

    private $sessions;

    /**
    * User dateSignIn.
    *
    * @var string
    */

    private $dateSignIn;


    /**
    * User status.
    *
    * @var int
    */

    private $status;


    /**
    * User password.
    *
    * @var string
    */

    private $password;


    /**
    * User email.
    *
    * @var string
    */

    private $email;


    /**
    * User role.
    *
    * @var string
    */

    private $role;


    /**
    * User salt
    *
    * @var string
    */
    private $salt;


    /**
    * Retrieve the userId of the userId property
    *
    * @param void
    *
    * @return int
    */

    public function getIdUser(){
        
        return $this -> idUser;
    }


    /**
    * Retrieve the session of the sessions property
    *
    * @param void
    *
    * @return int
    */

    public function getSessions(){
        
        return $this -> sessions;
    }


    /**
    * Retrieve the dateSignIn of the dateSignIn property
    *
    * @param void
    *
    * @return strin
    */

    public function getDateSignIn(){
        
        return $this -> dateSignIn;
    }


    /**
    * Retrieve the status of the status property
    *
    * @param void
    *
    * @return int
    */

    public function getStatus(){
        
        return $this -> status;
    }


    /**
    * Retrieve the password of the password property
    *
    * @param void
    *
    * @return string
    */

    public function getPassword(){
        
        return $this -> password;
    }


    /**
    * Retrieve the email of the email property
    *
    * @param void
    *
    * @return string
    */

    public function getEmail(){
        
        return $this -> email;
    }

    /* Retrieve the role of the role property
    *
    * @param void
    *
    * @return string
    */

    public function getRoles () {

      return array ($this -> getRole ());

    }


    /* Retrieve the salt of the salt property
    *
    * @param void
    *
    * @return string
    */
    public function getSalt () {

      return $this -> salt;

    }





    // SETTERS \\


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setIdUser($idUser){

        if(is_numeric($idUser)){

            return $this -> idUser = $idUser;
        }

    }


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setSessions($sessions){

        if(is_numeric($sessions)){

            return $this -> sessions = $sessions;
        }

    }


    /**
    * 
    *
    * @param string
    *
    * @return void 
    */

    public function setdateSignIn($dateSignIn){

        if(is_string($dateSignIn)){

            return $this -> dateSignIn = $dateSignIn;
        }

    }


    /**
    * 
    *
    * @param string
    *
    * @return void 
    */

    public function setStatus($status){

        if(is_string($status)){

            return $this -> status = $status;
        }

    }


    /**
    * 
    *
    * @param string
    *
    * @return void 
    */

    public function setPassword($password){

        if(is_string($password)){

            return $this -> password = $password;
        }

    }


    /**
    * 
    *
    * @param string
    *
    * @return void 
    */

    public function setEmail($email){

        if(is_string($email)){

            return $this -> email = $email;
        }

    }


    public function setRole ($role) {

      return $this -> role = $role;

    }

    /* Retrieve the salt of the salt property
    *
    * @param void
    *
    * @return string
    */

    public function setSalt ($salt) {

      return $this -> salt = $salt;

    }

    public function eraseCredentials () {

      // Nothing to do here

    }


}
















