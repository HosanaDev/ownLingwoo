<?php

namespace Entity;

class Profile
{

    /**
    * Profile idProfile.
    *
    * @var integer
    */
    private $idProfile;


    /**
    * Profile idUser.
    *
    * @var integer
    */
    private $idUser;


    /**
    * Profile username.
    *
    * @var string
    */
    private $username;


    /**
    * Profile gender.
    *
    * @var string
    */
    private $gender;


    /**
    * Profile age.
    *
    * @var int
    */
    private $age;


    /**
    * Profile pic.
    *
    * @var string
    */
    private $pic;


    /**
    * Profile bio.
    *
    * @var string
    */
    private $bio;


    /**
    * Profile lang.
    *
    * @var int
    */
    private $lang;


    /**
    * Retrieve the Profile id of the idProfile property
    *
    * @param void
    *
    * @return int
    */

    public function getIdProfile(){
        
        return $this -> idProfile;
    }


    /**
    * Retrieve the user id of the idUser property
    *
    * @param void
    *
    * @return int 
    */

    public function getIdUser(){
        
        return $this -> idUser;
    }


    /**
    * Retrieve the username of the username property
    *
    * @param void
    *
    * @return string 
    */

    public function getUsername(){
        
        return $this -> username;
    }


    /**
    * Retrieve the gender of the gender property
    *
    * @param void
    *
    * @return string 
    */

    public function getGender(){
        
        return $this -> gender;
    }


    /**
    * Retrieve the age of the age property
    *
    * @param void
    *
    * @return int
    */

    public function getAge(){
        
        return $this -> age;
    }


    /**
    * Retrieve the picture of the pic property
    *
    * @param void
    *
    * @return string 
    */

    public function getPic(){
        
        return $this -> pic;
    }


    /**
    * Retrieve the biography of the bio property
    *
    * @param void
    *
    * @return string 
    */

    public function getBio(){
        
        return $this -> bio;
    }


    /**
    * Retrieve the lang of the lang property
    *
    * @param void
    *
    * @return int 
    */

    public function getLang(){
        
        return $this -> lang;
    }


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setIdProfile($idProfile){

        if(is_numeric($idProfile)){

            return $this -> idProfile = $idProfile;
        }

    }


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
    * @param string
    *
    * @return void 
    */

    public function setUsername($username){

        if(is_string($username)){

            return $this -> username = $username;
        }

    }


    /**
    * 
    *
    * @param string
    *
    * @return void 
    */

    public function setGender($gender){

        if(is_string($gender)){

            return $this -> gender = $gender;
        }

    }


    /**
    * 
    *
    * @param int
    *
    * @return void 
    */

    public function setAge($age){

        if(is_numeric($age)){

            return $this -> age = $age;
        }

    }


    /**
    * 
    *
    * @param string
    *
    * @return void 
    */

    public function setPic($pic){

        if(is_string($pic)){

            return $this -> pic = $pic;
        }

    }


    /**
    * 
    *
    * @param string
    *
    * @return void 
    */

    public function setBio($bio){

        if(is_string($bio)){

            return $this -> bio = $bio;
        }

    }


    /**
    * 
    *
    * @param string
    *
    * @return void 
    */

    public function setLang($lang){

        if(is_numeric($lang)){

            return $this -> lang = $lang;
        }

    }


}