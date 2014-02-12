<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\TypeCompetition;

class TypeCompetitionManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function loadTypeCompetition($typeCompetitionId)
	{
		return $this->getRepository()
			->findOneBy(array('id' => $typeCompetitionId));
	}

	/**
	 * Save TypeCompetition entity
	 *
	 * @param TypeCompetition $typeCompetition
	 */
	public function saveTypeCompetition(TypeCompetition $typeCompetition)
	{
		$this->persistAndFlush($typeCompetition);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:TypeCompetition');
	}

}