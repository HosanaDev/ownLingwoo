<?php

// Equivaut au dossier route dans l'ancienne application 

namespace Controllers;

use Silex\Application;

class Home 
{   
    public function hello(Application $app, $name){

        // Action pour afficher une page

        return $app['twig']->render('home/hello.html.twig', array('name' => $name));

    }
}