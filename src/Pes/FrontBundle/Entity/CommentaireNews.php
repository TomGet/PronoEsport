<?php

namespace Pes\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireNews
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pes\FrontBundle\Entity\CommentaireNewsRepository")
 */
class CommentaireNews
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
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

	/**
	 * @ORM\ManyToOne(targetEntity="Pes\FrontBundle\Entity\News")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $news;


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
     * @return CommentaireNews
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
     * Set contenu
     *
     * @param string $contenu
     * @return CommentaireNews
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return CommentaireNews
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
     * Set news
     *
     * @param \Pes\FrontBundle\Entity\News $news
     * @return CommentaireNews
     */
    public function setNews(\Pes\FrontBundle\Entity\News $news)
    {
        $this->news = $news;
    
        return $this;
    }

    /**
     * Get news
     *
     * @return \Pes\FrontBundle\Entity\News 
     */
    public function getNews()
    {
        return $this->news;
    }
}