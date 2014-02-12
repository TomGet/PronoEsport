<?php

namespace Pes\FrontBundle\Controller;

use Pes\FrontBundle\Entity\Courrier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
	public function indexAction($name)
	{
		return $this->render('PesFrontBundle:Front:index.html.twig', array('name' => $name));
	}

	public function accueilAction()
	{
		return $this->render('PesFrontBundle:Front:accueil.html.twig');
	}

	public function lastNewsAction($nombre)
	{
		$lesNews = $this->get('pes.news_manager')->getLastNews();
		return $this->render('PesFrontBundle:Front:lastNews.html.twig', array('lesNews' => $lesNews));
	}

	public function voirNewsAction($id)
	{
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('PesFrontBundle:News');
		$news = $repository->find($id);
		return $this->render('PesFrontBundle:Front:voirNews.html.twig', array('news' => $news));
	}

	public function voirCompetitionAction($id)
	{
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('PesFrontBundle:Competition');
		$competition = $repository->find($id);
		return $this->render('PesFrontBundle:Front:voirCompetition.html.twig', array('competition' => $competition));
	}

	public function plannedCompetitionsAction($nombre)
	{
		$competitions = $this->get('pes.competition_manager')->getPlannedCompetitions();
		return $this->render('PesFrontBundle:Front:plannedCompetitions.html.twig', array('competitions' => $competitions));
	}

	public function listeCompetitionsAction()
	{
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('PesFrontBundle:Competition');
		$competitions = $repository->findAll();
		return $this->render('PesFrontBundle:Front:listeCompetitions.html.twig', array('competitions' => $competitions));
	}
}
