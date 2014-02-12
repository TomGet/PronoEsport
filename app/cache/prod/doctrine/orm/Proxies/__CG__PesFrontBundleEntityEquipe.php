<?php

namespace Proxies\__CG__\Pes\FrontBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Equipe extends \Pes\FrontBundle\Entity\Equipe implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setTag($tag)
    {
        $this->__load();
        return parent::setTag($tag);
    }

    public function getTag()
    {
        $this->__load();
        return parent::getTag();
    }

    public function addCompetition(\Pes\FrontBundle\Entity\Competition $competitions)
    {
        $this->__load();
        return parent::addCompetition($competitions);
    }

    public function removeCompetition(\Pes\FrontBundle\Entity\Competition $competitions)
    {
        $this->__load();
        return parent::removeCompetition($competitions);
    }

    public function getCompetitions()
    {
        $this->__load();
        return parent::getCompetitions();
    }

    public function setBlason($blason)
    {
        $this->__load();
        return parent::setBlason($blason);
    }

    public function getBlason()
    {
        $this->__load();
        return parent::getBlason();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nom', 'tag', 'blason', 'competitions');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}