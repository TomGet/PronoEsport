<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\Pays;

class PaysManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function loadPays($paysId)
	{
		return $this->getRepository()
			->findOneBy(array('id' => $paysId));
	}

	/**
	 * Save Pays entity
	 *
	 * @param Pays $pays
	 */
	public function savePays(Pays $pays)
	{
		$this->persistAndFlush($pays);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:Pays');
	}

}