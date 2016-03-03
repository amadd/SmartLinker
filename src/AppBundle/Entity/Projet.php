<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetRepository")
 */
class Projet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Demandeur", type="string", length=128)
     */
    private $demandeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEligibilite", type="datetime")
     */
    private $dateEligibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="Reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="GestionDeProjet", type="string", length=255)
     */
    private $gestionDeProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="ServiceAccountManager", type="string", length=255)
     */
    private $serviceAccountManager;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CreateDate", type="datetime")
     */
    private $createDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ModifiedDate", type="datetime")
     */
    private $modifiedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="CreatedBy", type="string", length=64)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @ORM\Column(name="ModifiedBy", type="string", length=255)
     */
    private $modifiedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="Client_Id", type="string", length=255)
     */
    private $clientId;


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
     * Set demandeur
     *
     * @param string $demandeur
     * @return Projet
     */
    public function setDemandeur($demandeur)
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * Get demandeur
     *
     * @return string 
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }

    /**
     * Set dateEligibilite
     *
     * @param \DateTime $dateEligibilite
     * @return Projet
     */
    public function setDateEligibilite($dateEligibilite)
    {
        $this->dateEligibilite = $dateEligibilite;

        return $this;
    }

    /**
     * Get dateEligibilite
     *
     * @return \DateTime 
     */
    public function getDateEligibilite()
    {
        return $this->dateEligibilite;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Projet
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set gestionDeProjet
     *
     * @param string $gestionDeProjet
     * @return Projet
     */
    public function setGestionDeProjet($gestionDeProjet)
    {
        $this->gestionDeProjet = $gestionDeProjet;

        return $this;
    }

    /**
     * Get gestionDeProjet
     *
     * @return string 
     */
    public function getGestionDeProjet()
    {
        return $this->gestionDeProjet;
    }

    /**
     * Set serviceAccountManager
     *
     * @param string $serviceAccountManager
     * @return Projet
     */
    public function setServiceAccountManager($serviceAccountManager)
    {
        $this->serviceAccountManager = $serviceAccountManager;

        return $this;
    }

    /**
     * Get serviceAccountManager
     *
     * @return string 
     */
    public function getServiceAccountManager()
    {
        return $this->serviceAccountManager;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Projet
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set modifiedDate
     *
     * @param \DateTime $modifiedDate
     * @return Projet
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;

        return $this;
    }

    /**
     * Get modifiedDate
     *
     * @return \DateTime 
     */
    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     * @return Projet
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set modifiedBy
     *
     * @param string $modifiedBy
     * @return Projet
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return string 
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set clientId
     *
     * @param string $clientId
     * @return Projet
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return string 
     */
    public function getClientId()
    {
        return $this->clientId;
    }
}
