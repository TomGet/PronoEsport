<?php

namespace Pes\FrontBundle\Manager;

use Doctrine\ORM\EntityManager;
use Pes\FrontBundle\Manager\BaseManager;
use Pes\FrontBundle\Entity\CommentaireVideo;

class CommentaireVideoManager extends BaseManager
{
 protected $em;

 public function __construct(EntityManager $em)
 {
  $this->em = $em;
 }

 public function loadCommentaireVideo($commentaireNewsId) {
  return $this->getRepository()
   ->findOneBy(array('id' => $commentaireNewsId));
 }

 /**
  * Save News entity
  *
  * @param News $commentaireNews
  */
 public function saveCommentaireVideo(CommentaireVideo $commentaireNews)
 {
  $this->persistAndFlush($commentaireNews);
 }

 public function getRepository()
 {
  return $this->em->getRepository('PesFrontBundle:CommentaireVideo');
 }

}