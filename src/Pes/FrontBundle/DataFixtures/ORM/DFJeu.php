<?php

namespace Pes\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PES\FrontBundle\Entity\Jeu;

class DFJeu extends AbstractFixture implements OrderedFixtureInterface {

	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager) {
		$jeu_1 = new Jeu();
		$jeu_1->setNom('League of legend')
				->setIcone('lol.png');
		$this->addReference('lol', $jeu_1);

		$manager->persist($jeu_1);

		$jeu_2 = new Jeu();
		$jeu_2->setNom('Starcraft 2')
				->setIcone('sc2.png');
		$this->addReference('sc2', $jeu_2);
		$manager->persist($jeu_2);

		$jeu_3 = new Jeu();
		$jeu_3->setNom('Counter Strike')
				->setIcone('cs.png');
		$this->addReference('cs', $jeu_3);
		$manager->persist($jeu_3);

		// On déclenche l'enregistrement
		$manager->flush();
	}

	public function getOrder() {
		return 3;
	}

}
