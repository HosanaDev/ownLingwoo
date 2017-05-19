<?php

// Equivaut au dossier route dans l'ancienne application 

namespace controllers;

use Silex\Application;

class Profiles
{   
    public function allProfile(Application $app){

        // Action pour afficher une page

        $profiles = $app['dao.profile']->findAllProfile();

        return $app['twig']->render('profiles/allProfile.html.twig', array(
            'title' => 'Tout les profiles',
            'profiles' => $profiles
            
        ));

    }

    public function find(Application $app, $id){
		$profile = $app['dao.profile'] -> find($id);

		return $app['twig']->render('profiles/profile.html.twig', array(
            'profile' => $profile
            
        ));
	}
}