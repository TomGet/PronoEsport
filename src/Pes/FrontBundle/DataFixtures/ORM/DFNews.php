<?php

namespace Pes\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PES\FrontBundle\Entity\News;

class DFNews extends AbstractFixture implements OrderedFixtureInterface
{
	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		$news_1 = new News();
		$news_1->setTitre('Création du jeu d\'essai !')
			->setContenu('Je suis en train de faire les datafixtures')
			->setDate(new \DateTime())
			->setMembre($this->getReference('admin-user'));

		$manager->persist($news_1);

		$news_2 = new News();
		$news_2->setTitre('Mise en place des templates !')
			->setContenu('Je suis en train de faire les différentes vues')
			->setDate(new \DateTime())
			->setMembre($this->getReference('admin-user'));

		$manager->persist($news_2);

		$news_3 = new News();
		$news_3->setTitre('Création des contrôleurs !')
			->setContenu('Je suis en train de faire les contrôleurs')
			->setDate(new \DateTime())
			->setMembre($this->getReference('admin-user'));

		$manager->persist($news_3);

		$news_4 = new News();
		$news_4->setTitre('Architecture des routes !')
			->setContenu('Je suis encore en train de faire les routes')
			->setDate(new \DateTime())
			->setMembre($this->getReference('admin-user'));

		$manager->persist($news_4);

		$news_5 = new News();
		$news_5->setTitre('Release de Diablo 4 !')
			->setContenu('Diablo 4 est sorti !')
			->setDate(new \DateTime())
			->setMembre($this->getReference('admin-user'));

		$manager->persist($news_5);

		$news_6 = new News();
		$news_6->setTitre('Mort à World Of Warcraft !')
			->setContenu('Je chie de toutes mes forces sur ce jeu')
			->setDate(new \DateTime())
			->setMembre($this->getReference('admin-user'));

		$manager->persist($news_6);

		// On déclenche l'enregistrement
		$manager->flush();
	}

	public function getOrder() {
		return 2;
	}
}