<?php

/*
	App : espace de noms défini par défaut > composer.json
		App : dossier src
		Controller : dossier src/Controller
*/
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
	/*
		annotations
			utiliser uniquement des doubles gillemets
			commentaires lus par symfony
			@Route : paramètres
				schéma de la route : url saisie
				name : nom unique de la route
					nomenclature : nom du contrôleur . nom de la méthode

	*/

	/**
	 * @Route("/", name="homepage.index")
	*/
	public function index()
	{
		$response = new Response('coucou');
;		return $response;
	}
}

