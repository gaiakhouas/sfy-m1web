<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\AsciiSlugger;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
		$slugger = new AsciiSlugger();
		foreach(AbstractDataFixtures::CATEGORIES as $main => $sub)
		{
			/*
				avec Doctrine, pour manipuler les données d'une table, il faut passer par les entités
			*/
			$mainCategory = new Category();
			$mainCategory
				->setName($main)
				->setSlug( $slugger->slug($main) )
			;

			// création des sous-catégories
			foreach($sub as $subcategory){

			}
		}
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
