<?php

namespace Pes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competition
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pes\FrontBundle\Entity\CompetitionRepository")
 */
class Competition
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ajout", type="datetime")
     */
    private $ajout;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="resultat", type="string", length=255)
     */
    private $resultat;

	/**
	 * @ORM\ManyToOne(targetEntity="Pes\FrontBundle\Entity\TypeCompetition")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $typeCompetition;

	/**
	 * @ORM\ManyToOne(targetEntity="Pes\FrontBundle\Entity\Tournoi")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $tournoi;


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
     * @return Competition
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
     * Set ajout
     *
     * @param \DateTime $ajout
     * @return Competition
     */
    public function setAjout($ajout)
    {
        $this->ajout = $ajout;
    
        return $this;
    }

    /**
     * Get ajout
     *
     * @return \DateTime 
     */
    public function getAjout()
    {
        return $this->ajout;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Competition
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     * @return Competition
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;
    
        return $this;
    }

    /**
     * Get resultat
     *
     * @return string 
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set typeCompetition
     *
     * @param \Pes\FrontBundle\Entity\TypeCompetition $typeCompetition
     * @return Competition
     */
    public function setTypeCompetition(\Pes\FrontBundle\Entity\TypeCompetition $typeCompetition)
    {
        $this->typeCompetition = $typeCompetition;
    
        return $this;
    }

    /**
     * Get typeCompetition
     *
     * @return \Pes\FrontBundle\Entity\TypeCompetition 
     */
    public function getTypeCompetition()
    {
        return $this->typeCompetition;
    }

    /**
     * Set tournoi
     *
     * @param \Pes\FrontBundle\Entity\Tournoi $tournoi
     * @return Competition
     */
    public function setTournoi(\Pes\FrontBundle\Entity\Tournoi $tournoi)
    {
        $this->tournoi = $tournoi;
    
        return $this;
    }

    /**
     * Get tournoi
     *
     * @return \Pes\FrontBundle\Entity\Tournoi 
     */
    public function getTournoi()
    {
        return $this->tournoi;
    }
}