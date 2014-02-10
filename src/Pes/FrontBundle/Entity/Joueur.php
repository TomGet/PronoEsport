<?php

namespace Pes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Joueur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pes\FrontBundle\Entity\JoueurRepository")
 */
class Joueur
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
     * @ORM\Column(name="pseudo", type="string", length=32)
     */
    private $pseudo;


	/**
	 * @ORM\ManyToOne(targetEntity="Pes\FrontBundle\Entity\Equipe")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $equipe;

	/**
	 * @ORM\ManyToOne(targetEntity="Pes\FrontBundle\Entity\Pays")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $pays;

	/**
	 * @ORM\ManyToMany(targetEntity="Pes\FrontBundle\Entity\Competition", cascade={"persist"})
	 */
	private $competitions;

	/**
	 * @ORM\ManyToMany(targetEntity="Pes\FrontBundle\Entity\Jeu", cascade={"persist"})
	 */
	private $jeux;


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
     * Set pseudo
     *
     * @param string $pseudo
     * @return Joueur
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    
        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->competitions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->jeux = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set equipe
     *
     * @param \Pes\FrontBundle\Entity\Equipe $equipe
     * @return Joueur
     */
    public function setEquipe(\Pes\FrontBundle\Entity\Equipe $equipe)
    {
        $this->equipe = $equipe;
    
        return $this;
    }

    /**
     * Get equipe
     *
     * @return \Pes\FrontBundle\Entity\Equipe 
     */
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set pays
     *
     * @param \Pes\FrontBundle\Entity\Pays $pays
     * @return Joueur
     */
    public function setPays(\Pes\FrontBundle\Entity\Pays $pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return \Pes\FrontBundle\Entity\Pays 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Add competitions
     *
     * @param \Pes\FrontBundle\Entity\Competition $competitions
     * @return Joueur
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

    /**
     * Add jeux
     *
     * @param \Pes\FrontBundle\Entity\Jeu $jeux
     * @return Joueur
     */
    public function addJeux(\Pes\FrontBundle\Entity\Jeu $jeux)
    {
        $this->jeux[] = $jeux;
    
        return $this;
    }

    /**
     * Remove jeux
     *
     * @param \Pes\FrontBundle\Entity\Jeu $jeux
     */
    public function removeJeux(\Pes\FrontBundle\Entity\Jeu $jeux)
    {
        $this->jeux->removeElement($jeux);
    }

    /**
     * Get jeux
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJeux()
    {
        return $this->jeux;
    }
}