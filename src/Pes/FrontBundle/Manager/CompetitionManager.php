<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\Competition;

class CompetitionManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	// a modifier dans le futur
	public function getPlannedCompetitions() {
		return $this->getRepository()
			->createQueryBuilder('c')
			->orderBy('c.date', 'ASC')
			->setMaxResults(5)
			->getQuery()
			->getResult();
	}

	public function loadCompetition($competitionId)
	{
		return $this->getRepository()
			->findOneBy(array('id' => $competitionId));
	}

	/**
	 * Save News entity
	 *
	 * @param Competition $competition
	 */
	public function saveCompetition(Competition $competition)
	{
		$this->persistAndFlush($competition);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:Competition');
	}

}