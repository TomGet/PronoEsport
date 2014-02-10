<?php

namespace Pes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pes\FrontBundle\Entity\EquipeRepository")
 */
class Equipe
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
     * @ORM\Column(name="nom", type="string", length=64)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=16)
     */
    private $tag;

	/**
	 * @ORM\ManyToMany(targetEntity="Pes\FrontBundle\Entity\Competition", cascade={"persist"})
	 */
	private $competitions;


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
     * Set nom
     *
     * @param string $nom
     * @return Equipe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return Equipe
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->competitions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add competitions
     *
     * @param \Pes\FrontBundle\Entity\Competition $competitions
     * @return Equipe
     */
    public function addCompetition(\Pes\FrontBundle\Entity\Competition $competitions)
    {
        $this->competitions[] = $competitions;
    
        return $this;
    }

    /**
     * Remove competitions
     *
     * @param \Pes\FrontBundle\Entity\Competition $competitions
     */
    public function removeCompetition(\Pes\FrontBundle\Entity\Competition $competitions)
    {
        $this->competitions->removeElement($competitions);
    }

    /**
     * Get competitions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompetitions()
    {
        return $this->competitions;
    }
}