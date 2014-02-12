<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\Joueur;

/**
 * @ORM\Entity
 */
class JoueurManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function loadJoueur($joueurId)
	{
		return $this->getRepository()
			->findOneBy(array('id' => $joueurId));
	}

	/**
	 * Save News entity
	 *
	 * @param Joueur $joueur
	 */
	public function saveJoueur(Joueur $joueur)
	{
		$this->persistAndFlush($joueur);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:Joueur');
	}

}