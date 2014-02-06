<?php

namespace Pes\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PesFrontBundle:Front:index.html.twig', array('name' => $name));
    }
}
