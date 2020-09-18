<?php

namespace App\Controller\Profile;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
	/**
	 * @Route("/profile", name="profile.homepage.index")
	*/
	public function index():Response
	{
		return $this->render('profile/homepage/index.html.twig');
	}
}

