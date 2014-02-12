<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\Reclamation;

class ReclamationManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function loadReclamation($reclamationId)
	{
		return $this->getRepository()
			->findOneBy(array('id' => $reclamationId));
	}

	/**
	 * Save Reclamation entity
	 *
	 * @param Reclamation $reclamation
	 */
	public function saveReclamation(Reclamation $reclamation)
	{
		$this->persistAndFlush($reclamation);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:Reclamation');
	}

}