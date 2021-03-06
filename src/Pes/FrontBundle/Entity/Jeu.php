<?php

namespace Pes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jeu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pes\FrontBundle\Entity\JeuRepository")
 */
class Jeu
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
     * @ORM\Column(name="icone", type="string", length=255)
     */
    private $icone;

	/**
	 * @ORM\ManyToMany(targetEntity="Pes\FrontBundle\Entity\TypeCompetition", cascade={"persist"})
	 */
	private $typesCompetition;

	public function __construct()
	{
		$this->typesCompetition = new \Doctrine\Common\Collections\ArrayCollection();
	}

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
     * @return Jeu
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
     * Set icone
     *
     * @param string $icone
     * @return Jeu
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;
    
        return $this;
    }

    /**
     * Get icone
     *
     * @return string 
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * Set TypeCompetition
     *
     * @param \Pes\FrontBundle\Entity\TypeCompetition $typeCompetition
     * @return Jeu
     */
    public function setTypeCompetition(\Pes\FrontBundle\Entity\TypeCompetition $typeCompetition)
    {
        $this->TypeCompetition = $typeCompetition;
    
        return $this;
    }

    /**
     * Get TypeCompetition
     *
     * @return \Pes\FrontBundle\Entity\TypeCompetition 
     */
    public function getTypeCompetition()
    {
        return $this->TypeCompetition;
    }

    /**
     * Add typesCompetition
     *
     * @param \Pes\FrontBundle\Entity\TypeCompetition $typesCompetition
     * @return Jeu
     */
    public function addTypesCompetition(\Pes\FrontBundle\Entity\TypeCompetition $typeCompetition)
    {
        $this->typesCompetition[] = $typeCompetition;
    
        return $this;
    }

    /**
     * Remove typesCompetition
     *
     * @param \Pes\FrontBundle\Entity\TypeCompetition $typesCompetition
     */
    public function removeTypesCompetition(\Pes\FrontBundle\Entity\TypeCompetition $typeCompetition)
    {
        $this->typesCompetition->removeElement($typeCompetition);
    }

    /**
     * Get typesCompetition
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypesCompetition()
    {
        return $this->typesCompetition;
    }
}