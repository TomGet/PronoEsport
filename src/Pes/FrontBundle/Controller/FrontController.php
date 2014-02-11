<?php

namespace Pes\FrontBundle\Controller;

use Pes\FrontBundle\Entity\Courrier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
	public function indexAction($name)
	{
		//var_dump($this->container->get('security.context')->getToken()->getUser());


		/*/ Création de l'entité
		$pays = new Pays();
		$pays->setNom('France');
		$em = $this->getDoctrine()->getManager();
		$em->persist($pays);
		$em->flush();
		*/
		return $this->render('PesFrontBundle:Front:index.html.twig', array('name' => $name));
	}

	public function accueilAction()
	{
		return $this->render('PesFrontBundle:Front:accueil.html.twig');
	}

	public function lastNewsAction($nombre)
	{
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('PesFrontBundle:News');
		$lesNews = $repository->lastNews();
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

	public function PlannedCompetitionsAction($nombre)
	{
		$repository = $this->getDoctrine()
			->getManager()
			->getRepository('PesFrontBundle:Competition');
		$competitions = $repository->plannedCompetitions();
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
