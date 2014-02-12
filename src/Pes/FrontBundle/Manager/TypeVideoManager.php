<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\TypeVideo;

class TypeVideoManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function loadTypeVideo($typeVideoId)
	{
		return $this->getRepository()
			->findOneBy(array('id' => $typeVideoId));
	}

	/**
	 * Save TypeVideo entity
	 *
	 * @param TypeVideo $typeVideo
	 */
	public function saveTypeVideo(TypeVideo $typeVideo)
	{
		$this->persistAndFlush($typeVideo);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:TypeVideo');
	}

}