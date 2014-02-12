<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\Stream;

class StreamManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function loadStream($streamId)
	{
		return $this->getRepository()
			->findOneBy(array('id' => $streamId));
	}

	/**
	 * Save Stream entity
	 *
	 * @param Stream $stream
	 */
	public function saveStream(Stream $stream)
	{
		$this->persistAndFlush($stream);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:Stream');
	}

}