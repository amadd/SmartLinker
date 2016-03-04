<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjetContact
 *
 * @ORM\Table(name="projet_contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjetContactRepository")
 */
class ProjetContact
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
      * @ORM\OneToOne(targetEntity="AppBundle\Entity\Projet")
      * @ORM\JoinColumn(nullable=false)
      */
     private $projet;

     /**
       * @ORM\OneToOne(targetEntity="AppBundle\Entity\Contact")
       * @ORM\JoinColumn(nullable=false)
       */
      private $contact;

    /**
     * @var int
     *
     * @ORM\Column(name="RelationType", type="integer")
     */
    private $relationType;


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
     * Set relationType
     *
     * @param integer $relationType
     * @return ProjetContact
     */
    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;

        return $this;
    }

    /**
     * Get relationType
     *
     * @return integer
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * Set projet
     *
     * @param \AppBundle\Entity\Projet $projet
     * @return ProjetContact
     */
    public function setProjet(\AppBundle\Entity\Projet $projet)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set contact
     *
     * @param \AppBundle\Entity\Contact $contact
     * @return ProjetContact
     */
    public function setContact(\AppBundle\Entity\Contact $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \AppBundle\Entity\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }
}
