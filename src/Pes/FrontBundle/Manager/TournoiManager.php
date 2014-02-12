<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\Tournoi;

class TournoiManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function loadTournoi($tournoiId)
	{
		return $this->getRepository()
			->findOneBy(array('id' => $tournoiId));
	}

	/**
	 * Save Tournoi entity
	 *
	 * @param Tournoi $tournoi
	 */
	public function saveTournoi(Tournoi $tournoi)
	{
		$this->persistAndFlush($tournoi);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:Tournoi');
	}

}