<?php
// src/Pes/FrontBundle/Entity/MembreCompetition.php
namespace Sdz\BlogBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\Courrier;
/**
 * @ORM\Entity
 */
class CourrierManager extends BaseManager
{
     protected $em;

 public function __construct(EntityManager $em)
 {
  $this->em = $em;
 }

 public function loadCourrier($courrierId) {
  return $this->getRepository()
   ->findOneBy(array('id' => $courrierId));
 }

 /**
  * Save News entity
  *
  * @param News $courrier
  */
 public function saveCourrier(Courrier $courrier)
 {
  $this->persistAndFlush($courrier);
 }

 public function getRepository()
 {
  return $this->em->getRepository('PesFrontBundle:Courrier');
 }

}