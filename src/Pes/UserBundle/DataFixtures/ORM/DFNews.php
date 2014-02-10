<?php

namespace Pes\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PES\UserBundle\Entity\User;

class DFUser extends AbstractFixture implements OrderedFixtureInterface
{
	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
		$user = new User();
		$user->setUsername('admin')
		->setEmail('admin@pronoesport.fr')
		->setPassword('admin');

		$manager->persist($user);
		// On déclenche l'enregistrement
		$manager->flush();

		$this->addReference('admin-user', $user);
	}

	public function getOrder()
	{
		return 1;
	}
}