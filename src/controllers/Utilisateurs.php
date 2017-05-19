<?php

// Equivaut au dossier route dans l'ancienne application 

namespace controllers;

use Silex\Application;

class Utilisateurs
{   
    public function allUsers(Application $app){

        // Action pour afficher une page

        $users = $app['dao.user']->findAllUser();

        return $app['twig']->render('users/allUsers.html.twig', array(
            'title' => 'Tout les utilisateurs',
            'users' => $users
            
        ));

    }

    public function find(Application $app, $id){
		$user = $app['dao.user'] -> find($id);

		return $app['twig']->render('users/user.html.twig', array(
            'user' => $user
            
        ));
	}
}