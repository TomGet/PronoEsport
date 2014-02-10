<?php

namespace Pes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pes\FrontBundle\Entity\VideoRepository")
 */
class Video
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
     * @ORM\Column(name="titre", type="string", length=64)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

	/**
	 * @ORM\ManyToOne(targetEntity="Pes\UserBundle\Entity\User")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $membre;

	/**
	 * @ORM\ManyToOne(targetEntity="Pes\FrontBundle\Entity\TypeVideo")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $typeVideo;


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
     * Set titre
     *
     * @param string $titre
     * @return Video
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Video
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
     * Set membre
     *
     * @param \Pes\UserBundle\Entity\User $membre
     * @return Video
     */
    public function setMembre(\Pes\UserBundle\Entity\User $membre)
    {
        $this->membre = $membre;
    
        return $this;
    }

    /**
     * Get membre
     *
     * @return \Pes\UserBundle\Entity\User 
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Set typeVideo
     *
     * @param \Pes\FrontBundle\Entity\TypeVideo $typeVideo
     * @return Video
     */
    public function setTypeVideo(\Pes\FrontBundle\Entity\TypeVideo $typeVideo)
    {
        $this->typeVideo = $typeVideo;
    
        return $this;
    }

    /**
     * Get typeVideo
     *
     * @return \Pes\FrontBundle\Entity\TypeVideo 
     */
    public function getTypeVideo()
    {
        return $this->typeVideo;
    }
}