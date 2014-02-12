<?php
// src/Pes/FrontBundle/Entity/MembreCompetition.php
namespace Sdz\BlogBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\HebergeurStream;

class HebergeurStreamManager extends BaseManager
{
    protected $em;

 public function __construct(EntityManager $em)
 {
  $this->em = $em;
 }

 public function loadHebergeurStream($hebergeurStreamId) {
  return $this->getRepository()
   ->findOneBy(array('id' => $hebergeurStreamId));
 }

 /**
  * Save News entity
  *
  * @param News $hebergeurStream
  */
 public function saveHebergeurStream(HebergeurStream $hebergeurStream)
 {
  $this->persistAndFlush($hebergeurStream);
 }

 public function getRepository()
 {
  return $this->em->getRepository('PesFrontBundle:HebergeurStream');
 }

}