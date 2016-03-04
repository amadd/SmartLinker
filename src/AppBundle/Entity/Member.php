<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Member")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap( {"organization" = "Organization", "contact" = "Contact"} )
 */
class Member
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
  * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Address")
  */
  private $address;

  /**
  * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Phone")
  */
  private $phone;

  /**
  * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Email")
  */
  private $email;

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
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     * @return Member
     */
    public function setAddress(\AppBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param \AppBundle\Entity\Phone $phone
     * @return Member
     */
    public function setPhone(\AppBundle\Entity\Phone $phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return \AppBundle\Entity\Phone 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param \AppBundle\Entity\Email $email
     * @return Member
     */
    public function setEmail(\AppBundle\Entity\Email $email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return \AppBundle\Entity\Email 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
