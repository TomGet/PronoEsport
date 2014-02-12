<?php

namespace Pes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tournoi
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pes\FrontBundle\Entity\TournoiRepository")
 */
class Tournoi
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
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=true)
     */
    private $site;


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
     * @return Tournoi
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
     * Set site
     *
     * @param string $site
     * @return Tournoi
     */
    public function setSite($site)
    {
        $this->site = $site;
    
        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

	public function __toString()
	{
		return $this->getNom();
	}
}