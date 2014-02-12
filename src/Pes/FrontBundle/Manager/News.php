<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\News;

class NewsManager extends BaseManager
{
	protected $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function loadNews($newsId) {
		return $this->getRepository()
			->findOneBy(array('id' => $newsId));
	}

	/**
	 * Save News entity
	 *
	 * @param News $news
	 */
	public function saveNews(News $news)
	{
		$this->persistAndFlush($news);
	}

	public function getPreviousNews($newsId) {
		return $this->getRepository()
			->getAdjacentNews($newsId, false)
			->getQuery()
			->setMaxResults(1)
			->getOneOrNullResult();
	}

	public function getNextNews($newsId) {
		return $this->getRepository()
			->getAdjacentNews($newsId, true)
			->getQuery()
			->setMaxResults(1)
			->getOneOrNullResult();
	}

	public function isAuthorized(News $news, $memberId)
	{
		return ($news->getMember()->getId() == $memberId) ?
			true:
			false;
	}

	public function getPreviousAndNextNews($news)
	{
		return array(
			'prev' => $this->getPreviousNews($news->getId()),
			'desk' => $news,
			'next' => $this->getNextNews($news->getId()),
			'voted' => false
		);
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:News');
	}

}