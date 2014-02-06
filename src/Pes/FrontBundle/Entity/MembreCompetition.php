<?php
// src/Pes/FrontBundle/Entity/MembreCompetition.php
namespace Sdz\BlogBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 */
class MembreCompetition
{
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Pes\UserBundle\Entity\User")
	 */
	private $membre;
	/**
	 * @ORM\Id
	 * @ORM\ManyToOne(targetEntity="Pes\FrontBundle\Entity\Competition")
	 */
	private $competition;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="choix", type="integer")
	 */
	private $choix;
}