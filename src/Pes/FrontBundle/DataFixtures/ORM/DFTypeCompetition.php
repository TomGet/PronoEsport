<?php

namespace Pes\FrontBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PES\FrontBundle\Entity\TypeCompetition;

class DFTypeCompetition extends AbstractFixture implements OrderedFixtureInterface
{
	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		$typeCompetition_1 = new TypeCompetition();
		$typeCompetition_1->setLibelle('1v1')
				->setJeu($this->getReference('sc2'));

		$manager->persist($typeCompetition_1);
		$this->addReference('type_1', $typeCompetition_1);

		$typeCompetition_5 = new TypeCompetition();
		$typeCompetition_5->setLibelle('5v5')
				->setJeu($this->getReference('lol'));
		
		$manager->persist($typeCompetition_5);
		$this->addReference('type_5', $typeCompetition_5);
		// On déclenche l'enregistrement
		$manager->flush();
	}

	public function getOrder() {
		return 4;
	}
}