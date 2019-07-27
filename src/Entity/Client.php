<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $designation;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $salesManager;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $financialOfficer;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $deliveryAddress;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $billingAddress;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $portable;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="float")
     */
    private $soldeInit;

    /**
     * @ORM\Column(type="float")
     */
    private $soldeFinal;


    ///**
    //* @ORM\OneToMany(targetEntity="App\Entity\Commande", mappedBy="client")
    //*/
    //private $commandes;

    /*public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }
    */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getSalesManager(): ?string
    {
        return $this->salesManager;
    }

    public function setSalesManager(string $salesManager): self
    {
        $this->salesManager = $salesManager;

        return $this;
    }

    public function getFinancialOfficer(): ?string
    {
        return $this->financialOfficer;
    }

    public function setFinancialOfficer(string $financialOfficer): self
    {
        $this->financialOfficer = $financialOfficer;

        return $this;
    }

    public function getDeliveryAddress(): ?string
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(string $deliveryAddress): self
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getBillingAddress(): ?string
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(string $billingAddress): self
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPortable(): ?string
    {
        return $this->portable;
    }

    public function setPortable(string $portable): self
    {
        $this->portable = $portable;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSoldeInit(): ?float
    {
        return $this->soldeInit;
    }

    public function setSoldeInit(float $soldeInit): self
    {
        $this->soldeInit = $soldeInit;

        return $this;
    }

    public function getSoldeFinal(): ?float
    {
        return $this->soldeFinal;
    }

    public function setSoldeFinal(float $soldeFinal): self
    {
        $this->soldeFinal = $soldeFinal;

        return $this;
    }



    /**
     * @return Collection|Commande[]
     */
    /* public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setClient($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->contains($commande)) {
            $this->commandes->removeElement($commande);
            // set the owning side to null (unless already changed)
            if ($commande->getClient() === $this) {
                $commande->setClient(null);
            }
        }

        return $this;
    }

    */
}
