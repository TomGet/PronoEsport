<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\Jeu;

/**
 * @ORM\Entity
 */
class JeuManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function loadJeu($jeuId)
	{
		return $this->getRepository()
			->findOneBy(array('id' => $jeuId));
	}

	/**
	 * Save News entity
	 *
	 * @param Jeu $jeu
	 */
	public function saveJeu(Jeu $jeu)
	{
		$this->persistAndFlush($jeu);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:Jeu');
	}

}