<?php

namespace Pes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pes\FrontBundle\Entity\PaysRepository")
 */
class Pays {

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
	 * @ORM\Column(name="drapeau", type="string", length=64)
	 */
	private $drapeau;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set nom
	 *
	 * @param string $nom
	 * @return Pays
	 */
	public function setNom($nom) {
		$this->nom = $nom;

		return $this;
	}

	/**
	 * Get nom
	 *
	 * @return string 
	 */
	public function getNom() {
		return $this->nom;
	}


    /**
     * Set drapeau
     *
     * @param string $drapeau
     * @return Pays
     */
    public function setDrapeau($drapeau)
    {
        $this->drapeau = $drapeau;
    
        return $this;
    }

    /**
     * Get drapeau
     *
     * @return string 
     */
    public function getDrapeau()
    {
        return $this->drapeau;
    }
}