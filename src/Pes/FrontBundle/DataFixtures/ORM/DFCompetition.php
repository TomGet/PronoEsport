<?php

namespace Pes\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PES\FrontBundle\Entity\Competition;

class DFCompetition extends AbstractFixture implements OrderedFixtureInterface {

	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager) {
		$competition_1 = new Competition();
		$competition_1->setNom('Fnatic vs Aaa')
				->setAjout(new \DateTime())
				->setDate(new \DateTime())
				->setTypeCompetition($this->getReference('type_5'));

		$manager->persist($competition_1);
		
		$competition_2 = new Competition();
		$competition_2->setNom('Millenium vs Gambit')
				->setAjout(new \DateTime())
				->setDate(new \DateTime())
				->setTypeCompetition($this->getReference('type_5'));

		$manager->persist($competition_2);
		
		$competition_3 = new Competition();
		$competition_3->setNom('Fnatic vs Millenium')
				->setAjout(new \DateTime())
				->setDate(new \DateTime())
				->setTypeCompetition($this->getReference('type_5'));

		$manager->persist($competition_3);
		
		// On déclenche l'enregistrement
		$manager->flush();
	}

	public function getOrder() {
		return 5;
	}

}
