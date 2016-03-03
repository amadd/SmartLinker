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
     * @var string
     *
     * @ORM\Column(name="ProjetId", type="string", length=255)
     */
    private $projetId;

    /**
     * @var string
     *
     * @ORM\Column(name="ContactId", type="string", length=255)
     */
    private $contactId;

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
     * Set projetId
     *
     * @param string $projetId
     * @return ProjetContact
     */
    public function setProjetId($projetId)
    {
        $this->projetId = $projetId;

        return $this;
    }

    /**
     * Get projetId
     *
     * @return string 
     */
    public function getProjetId()
    {
        return $this->projetId;
    }

    /**
     * Set contactId
     *
     * @param string $contactId
     * @return ProjetContact
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return string 
     */
    public function getContactId()
    {
        return $this->contactId;
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
}
