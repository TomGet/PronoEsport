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
}
