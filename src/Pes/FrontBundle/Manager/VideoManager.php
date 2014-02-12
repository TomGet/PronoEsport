<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\Video;

class VideoManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function loadVideo($videoId)
	{
		return $this->getRepository()
			->findOneBy(array('id' => $videoId));
	}

	/**
	 * Save Video entity
	 *
	 * @param Video $video
	 */
	public function saveVideo(Video $video)
	{
		$this->persistAndFlush($video);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:Video');
	}

}