<?php

namespace Pes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeCompetition
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pes\FrontBundle\Entity\TypeCompetitionRepository")
 */
class TypeCompetition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=64)
     */
    private $libelle;

		/**
	 * @ORM\ManyToOne(targetEntity="Pes\FrontBundle\Entity\Jeu")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $jeu;
	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return TypeCompetition
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set jeu
     *
     * @param \Pes\FrontBundle\Entity\Jeu $jeu
     * @return TypeCompetition
     */
    public function setJeu(\Pes\FrontBundle\Entity\Jeu $jeu)
    {
        $this->jeu = $jeu;
    
        return $this;
    }

    /**
     * Get jeu
     *
     * @return \Pes\FrontBundle\Entity\Jeu 
     */
    public function getJeu()
    {
        return $this->jeu;
    }
}