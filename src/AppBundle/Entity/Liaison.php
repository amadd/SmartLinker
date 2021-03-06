<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Liaison
*
* @ORM\Table(name="liaison")
* @ORM\Entity(repositoryClass="AppBundle\Repository\LiaisonRepository")
*/
class Liaison
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
  * @ORM\Column(name="NDI", type="string", length=255)
  */
  private $ndi;

  /**
  * @var bool
  *
  * @ORM\Column(name="EAS", type="boolean")
  */
  private $eas;

  /**
  * @var string
  *
  * @ORM\Column(name="GTR", type="string", length=255)
  */
  private $gtr;

  /**
  * @var string
  *
  * @ORM\Column(name="NumPrestation", type="string", length=255)
  */
  private $numPrestation;

  /**
  * @var int
  *
  * @ORM\Column(name="TypeSupport", type="integer")
  */
  private $typeSupport;

  /**
  * @var string
  *
  * @ORM\Column(name="Debit", type="string", length=255)
  */
  private $debit;

  /**
  * @var int
  *
  * @ORM\Column(name="Operateur", type="integer")
  */
  private $operateur;

  /**
  * @var string
  *
  * @ORM\Column(name="PorteLivraison", type="string", length=255)
  */
  private $porteLivraison;

  /**
  * @var string
  *
  * @ORM\Column(name="POP", type="string", length=255)
  */
  private $pop;

  /**
  * @var int
  *
  * @ORM\Column(name="Technologie", type="integer")
  */
  private $technologie;

  /**
  * @var int
  *
  * @ORM\Column(name="VLAN", type="integer")
  */
  private $vlan;

  /**
  * @var int
  *
  * @ORM\Column(name="NbrPair", type="integer")
  */
  private $nbrPair;

  /**
  * @var string
  *
  * @ORM\Column(name="Zonage", type="string", length=255)
  */
  private $zonage;

  /**
  * @var bool
  *
  * @ORM\Column(name="Desaturation", type="boolean")
  */
  private $desaturation;

  /**
  * @var bool
  *
  * @ORM\Column(name="TravauxClient", type="boolean")
  */
  private $travauxClient;

  /**
  * @var bool
  *
  * @ORM\Column(name="POC", type="boolean")
  */
  private $poc;

  /**
  * @var string
  *
  * @ORM\Column(name="NumComOperateur", type="string", length=255)
  */
  private $numComOperateur;

  /**
  * @var string
  *
  * @ORM\Column(name="NumNXO", type="string", length=255)
  */
  private $numNXO;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="DateCommandeOperateur", type="datetime")
  */
  private $dateCommandeOperateur;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="DateMiseEnConstruction", type="datetime")
  */
  private $dateMiseEnConstruction;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="DateConvenue", type="datetime")
  */
  private $dateConvenue;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="DatePOI", type="datetime")
  */
  private $datePOI;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="DateFinTravauxClient", type="datetime")
  */
  private $dateFinTravauxClient;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="DateFinTravauxOperateur", type="datetime")
  */
  private $dateFinTravauxOperateur;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="DateRdvInstallationEAS", type="datetime")
  */
  private $dateRdvInstallationEAS;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="DateMiseDisposition", type="datetime")
  */
  private $dateMiseDisposition;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="DateInstallationSouhaitee", type="datetime")
  */
  private $dateInstallationSouhaitee;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="DatePOC", type="datetime")
  */
  private $datePOC;

  /**
  * @var int
  *
  * @ORM\Column(name="FAS", type="integer")
  */
  private $fas;

  /**
  * @var int
  *
  * @ORM\Column(name="CRM", type="integer")
  */
  private $crm;

  /**
  * @var int
  *
  * @ORM\Column(name="StatutCommande", type="integer")
  */
  private $statutCommande;

  /**
  * @ORM\OneToOne(targetEntity="AppBundle\Entity\Address", cascade={"persist"})
  */
  private $address;

  /**
  * @ORM\OneToOne(targetEntity="AppBundle\Entity\Contact", cascade={"persist"})
  */
  private $contact;

  /**
  * @ORM\OneToOne(targetEntity="AppBundle\Entity\Projet")
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
  * Set ndi
  *
  * @param string $ndi
  * @return Liaison
  */
  public function setNDI($ndi)
  {
    $this->ndi = $ndi;

    return $this;
  }

  /**
  * Get ndi
  *
  * @return string
  */
  public function getNDI()
  {
    return $this->ndi;
  }

  /**
  * Set eas
  *
  * @param boolean $eas
  * @return Liaison
  */
  public function setEAS($eas)
  {
    $this->eas = $eas;

    return $this;
  }

  /**
  * Get eas
  *
  * @return boolean
  */
  public function getEAS()
  {
    return $this->eas;
  }

  /**
  * Set gtr
  *
  * @param string $gtr
  * @return Liaison
  */
  public function setGTR($gtr)
  {
    $this->gtr = $gtr;

    return $this;
  }

  /**
  * Get gtr
  *
  * @return string
  */
  public function getGTR()
  {
    return $this->gtr;
  }

  /**
  * Set numPrestation
  *
  * @param string $numPrestation
  * @return Liaison
  */
  public function setNumPrestation($numPrestation)
  {
    $this->numPrestation = $numPrestation;

    return $this;
  }

  /**
  * Get numPrestation
  *
  * @return string
  */
  public function getNumPrestation()
  {
    return $this->numPrestation;
  }

  /**
  * Set typeSupport
  *
  * @param integer $typeSupport
  * @return Liaison
  */
  public function setTypeSupport($typeSupport)
  {
    $this->typeSupport = $typeSupport;

    return $this;
  }

  /**
  * Get typeSupport
  *
  * @return integer
  */
  public function getTypeSupport()
  {
    return $this->typeSupport;
  }

  /**
  * Set debit
  *
  * @param string $debit
  * @return Liaison
  */
  public function setDebit($debit)
  {
    $this->debit = $debit;

    return $this;
  }

  /**
  * Get debit
  *
  * @return string
  */
  public function getDebit()
  {
    return $this->debit;
  }

  /**
  * Set operateur
  *
  * @param integer $operateur
  * @return Liaison
  */
  public function setOperateur($operateur)
  {
    $this->operateur = $operateur;

    return $this;
  }

  /**
  * Get operateur
  *
  * @return integer
  */
  public function getOperateur()
  {
    return $this->operateur;
  }

  /**
  * Set porteLivraison
  *
  * @param string $porteLivraison
  * @return Liaison
  */
  public function setPorteLivraison($porteLivraison)
  {
    $this->porteLivraison = $porteLivraison;

    return $this;
  }

  /**
  * Get porteLivraison
  *
  * @return string
  */
  public function getPorteLivraison()
  {
    return $this->porteLivraison;
  }

  /**
  * Set pop
  *
  * @param string $pop
  * @return Liaison
  */
  public function setPOP($pop)
  {
    $this->pop = $pop;

    return $this;
  }

  /**
  * Get pop
  *
  * @return string
  */
  public function getPOP()
  {
    return $this->pop;
  }

  /**
  * Set technologie
  *
  * @param integer $technologie
  * @return Liaison
  */
  public function setTechnologie($technologie)
  {
    $this->technologie = $technologie;

    return $this;
  }

  /**
  * Get technologie
  *
  * @return integer
  */
  public function getTechnologie()
  {
    return $this->technologie;
  }

  /**
  * Set vlan
  *
  * @param integer $vlan
  * @return Liaison
  */
  public function setVLAN($vlan)
  {
    $this->vlan = $vlan;

    return $this;
  }

  /**
  * Get vlan
  *
  * @return integer
  */
  public function getVLAN()
  {
    return $this->vlan;
  }

  /**
  * Set nbrPair
  *
  * @param integer $nbrPair
  * @return Liaison
  */
  public function setNbrPair($nbrPair)
  {
    $this->nbrPair = $nbrPair;

    return $this;
  }

  /**
  * Get nbrPair
  *
  * @return integer
  */
  public function getNbrPair()
  {
    return $this->nbrPair;
  }

  /**
  * Set zonage
  *
  * @param string $zonage
  * @return Liaison
  */
  public function setZonage($zonage)
  {
    $this->zonage = $zonage;

    return $this;
  }

  /**
  * Get zonage
  *
  * @return string
  */
  public function getZonage()
  {
    return $this->zonage;
  }

  /**
  * Set desaturation
  *
  * @param boolean $desaturation
  * @return Liaison
  */
  public function setDesaturation($desaturation)
  {
    $this->desaturation = $desaturation;

    return $this;
  }

  /**
  * Get desaturation
  *
  * @return boolean
  */
  public function getDesaturation()
  {
    return $this->desaturation;
  }

  /**
  * Set travauxClient
  *
  * @param boolean $travauxClient
  * @return Liaison
  */
  public function setTravauxClient($travauxClient)
  {
    $this->travauxClient = $travauxClient;

    return $this;
  }

  /**
  * Get travauxClient
  *
  * @return boolean
  */
  public function getTravauxClient()
  {
    return $this->travauxClient;
  }

  /**
  * Set poc
  *
  * @param boolean $poc
  * @return Liaison
  */
  public function setPOC($poc)
  {
    $this->poc = $poc;

    return $this;
  }

  /**
  * Get poc
  *
  * @return boolean
  */
  public function getPOC()
  {
    return $this->poc;
  }

  /**
  * Set numComOperateur
  *
  * @param string $numComOperateur
  * @return Liaison
  */
  public function setNumComOperateur($numComOperateur)
  {
    $this->numComOperateur = $numComOperateur;

    return $this;
  }

  /**
  * Get numComOperateur
  *
  * @return string
  */
  public function getNumComOperateur()
  {
    return $this->numComOperateur;
  }

  /**
  * Set numNXO
  *
  * @param string $numNXO
  * @return Liaison
  */
  public function setNumNXO($numNXO)
  {
    $this->numNXO = $numNXO;

    return $this;
  }

  /**
  * Get numNXO
  *
  * @return string
  */
  public function getNumNXO()
  {
    return $this->numNXO;
  }

  /**
  * Set dateCommandeOperateur
  *
  * @param \DateTime $dateCommandeOperateur
  * @return Liaison
  */
  public function setDateCommandeOperateur($dateCommandeOperateur)
  {
    $this->dateCommandeOperateur = $dateCommandeOperateur;

    return $this;
  }

  /**
  * Get dateCommandeOperateur
  *
  * @return \DateTime
  */
  public function getDateCommandeOperateur()
  {
    return $this->dateCommandeOperateur;
  }

  /**
  * Set dateMiseEnConstruction
  *
  * @param \DateTime $dateMiseEnConstruction
  * @return Liaison
  */
  public function setDateMiseEnConstruction($dateMiseEnConstruction)
  {
    $this->dateMiseEnConstruction = $dateMiseEnConstruction;

    return $this;
  }

  /**
  * Get dateMiseEnConstruction
  *
  * @return \DateTime
  */
  public function getDateMiseEnConstruction()
  {
    return $this->dateMiseEnConstruction;
  }

  /**
  * Set dateConvenue
  *
  * @param \DateTime $dateConvenue
  * @return Liaison
  */
  public function setDateConvenue($dateConvenue)
  {
    $this->dateConvenue = $dateConvenue;

    return $this;
  }

  /**
  * Get dateConvenue
  *
  * @return \DateTime
  */
  public function getDateConvenue()
  {
    return $this->dateConvenue;
  }

  /**
  * Set datePOI
  *
  * @param \DateTime $datePOI
  * @return Liaison
  */
  public function setDatePOI($datePOI)
  {
    $this->datePOI = $datePOI;

    return $this;
  }

  /**
  * Get datePOI
  *
  * @return \DateTime
  */
  public function getDatePOI()
  {
    return $this->datePOI;
  }

  /**
  * Set dateFinTravauxClient
  *
  * @param \DateTime $dateFinTravauxClient
  * @return Liaison
  */
  public function setDateFinTravauxClient($dateFinTravauxClient)
  {
    $this->dateFinTravauxClient = $dateFinTravauxClient;

    return $this;
  }

  /**
  * Get dateFinTravauxClient
  *
  * @return \DateTime
  */
  public function getDateFinTravauxClient()
  {
    return $this->dateFinTravauxClient;
  }

  /**
  * Set dateFinTravauxOperateur
  *
  * @param \DateTime $dateFinTravauxOperateur
  * @return Liaison
  */
  public function setDateFinTravauxOperateur($dateFinTravauxOperateur)
  {
    $this->dateFinTravauxOperateur = $dateFinTravauxOperateur;

    return $this;
  }

  /**
  * Get dateFinTravauxOperateur
  *
  * @return \DateTime
  */
  public function getDateFinTravauxOperateur()
  {
    return $this->dateFinTravauxOperateur;
  }

  /**
  * Set dateRdvInstallationEAS
  *
  * @param \DateTime $dateRdvInstallationEAS
  * @return Liaison
  */
  public function setDateRdvInstallationEAS($dateRdvInstallationEAS)
  {
    $this->dateRdvInstallationEAS = $dateRdvInstallationEAS;

    return $this;
  }

  /**
  * Get dateRdvInstallationEAS
  *
  * @return \DateTime
  */
  public function getDateRdvInstallationEAS()
  {
    return $this->dateRdvInstallationEAS;
  }

  /**
  * Set dateMiseDisposition
  *
  * @param \DateTime $dateMiseDisposition
  * @return Liaison
  */
  public function setDateMiseDisposition($dateMiseDisposition)
  {
    $this->dateMiseDisposition = $dateMiseDisposition;

    return $this;
  }

  /**
  * Get dateMiseDisposition
  *
  * @return \DateTime
  */
  public function getDateMiseDisposition()
  {
    return $this->dateMiseDisposition;
  }

  /**
  * Set dateInstallationSouhaitee
  *
  * @param \DateTime $dateInstallationSouhaitee
  * @return Liaison
  */
  public function setDateInstallationSouhaitee($dateInstallationSouhaitee)
  {
    $this->dateInstallationSouhaitee = $dateInstallationSouhaitee;

    return $this;
  }

  /**
  * Get dateInstallationSouhaitee
  *
  * @return \DateTime
  */
  public function getDateInstallationSouhaitee()
  {
    return $this->dateInstallationSouhaitee;
  }

  /**
  * Set datePOC
  *
  * @param \DateTime $datePOC
  * @return Liaison
  */
  public function setDatePOC($datePOC)
  {
    $this->datePOC = $datePOC;

    return $this;
  }

  /**
  * Get datePOC
  *
  * @return \DateTime
  */
  public function getDatePOC()
  {
    return $this->datePOC;
  }

  /**
  * Set fas
  *
  * @param integer $fas
  * @return Liaison
  */
  public function setFAS($fas)
  {
    $this->fas = $fas;

    return $this;
  }

  /**
  * Get fas
  *
  * @return integer
  */
  public function getFAS()
  {
    return $this->fas;
  }

  /**
  * Set crm
  *
  * @param integer $crm
  * @return Liaison
  */
  public function setCRM($crm)
  {
    $this->crm = $crm;

    return $this;
  }

  /**
  * Get crm
  *
  * @return integer
  */
  public function getCRM()
  {
    return $this->crm;
  }

  /**
  * Set statutCommande
  *
  * @param integer $statutCommande
  * @return Liaison
  */
  public function setStatutCommande($statutCommande)
  {
    $this->statutCommande = $statutCommande;

    return $this;
  }

  /**
  * Get statutCommande
  *
  * @return integer
  */
  public function getStatutCommande()
  {
    return $this->statutCommande;
  }

  /**
  * Set address
  *
  * @param \AppBundle\Entity\Address $address
  * @return Liaison
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
  * Set contact
  *
  * @param \AppBundle\Entity\Contact $contact
  * @return Liaison
  */
  public function setContact(\AppBundle\Entity\Contact $contact = null)
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

  /**
  * Set projet
  *
  * @param \AppBundle\Entity\Projet $projet
  * @return Liaison
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
