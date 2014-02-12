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

	public function loadNews($newsId)
	{
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

	public function getLastNews()
	{
		return $this->getRepository()
			->createQueryBuilder('n')
			->orderBy('n.date', 'DESC')
			->setMaxResults(5)
			->getQuery()
			->getResult();
	}

	public function getRepository()
	{
		return $this->em->getRepository('PesFrontBundle:News');
	}

}