<?php
// src/Pes/FrontBundle/Entity/MembreCompetition.php
namespace Sdz\BlogBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\Equipe;
/**
 * @ORM\Entity
 */
class EquipeManager extends BaseManager
{
    protected $em;

 public function __construct(EntityManager $em)
 {
  $this->em = $em;
 }

 public function loadEquipe($equipeId) {
  return $this->getRepository()
   ->findOneBy(array('id' => $equipeId));
 }

 /**
  * Save News entity
  *
  * @param News $equipe
  */
 public function saveEquipe(Equipe $equipe)
 {
  $this->persistAndFlush($equipe);
 }

 public function getRepository()
 {
  return $this->em->getRepository('PesFrontBundle:Equipe');
 }

}