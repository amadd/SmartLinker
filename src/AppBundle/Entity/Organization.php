<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organization
 *
 * @ORM\Table(name="organization")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrganizationRepository")
 */
class Organization extends Member
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
     * @ORM\Column(name="Name", type="string", length=128)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="OrgType", type="integer")
     */
    private $orgType;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=256)
     */
    private $description;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Projet")
    */
    private $projet;

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
     * Set name
     *
     * @param string $name
     * @return Organization
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set orgType
     *
     * @param integer $orgType
     * @return Organization
     */
    public function setOrgType($orgType)
    {
        $this->orgType = $orgType;

        return $this;
    }

    /**
     * Get orgType
     *
     * @return integer
     */
    public function getOrgType()
    {
        return $this->orgType;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Organization
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set projet
     *
     * @param \AppBundle\Entity\Projet $projet
     * @return Organization
     */
    public function setProjet(\AppBundle\Entity\Projet $projet = null)
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
}
