<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_commande")]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: StateCommande::class)]
    #[ORM\JoinColumn(name: "id_state", referencedColumnName: "id_state", nullable: false)]
    private ?StateCommande $state = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: "id_client", referencedColumnName: "id_user", nullable: false)]
    private ?Users $client = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: "id_seller", referencedColumnName: "id_user", nullable: false)]
    private ?Users $seller = null;

    #[ORM\Column(type: "datetime", name: "created_at")]
    private ?DateTimeInterface $createdAt = null;

    // ✅ Ajoute la relation vers Commande_details
    #[ORM\OneToMany(mappedBy: "commande", targetEntity: CommandeDetails::class, cascade: ["persist", "remove"])]
    private Collection $details;

    public function __construct()
    {
        $this->details = new ArrayCollection();
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getState(): ?StateCommande
    {
        return $this->state;
    }

    public function setState(StateCommande $state): static
    {
        $this->state = $state;
        return $this;
    }

    public function getClient(): ?Users
    {
        return $this->client;
    }

    public function setClient(Users $client): static
    {
        $this->client = $client;
        return $this;
    }

    public function getSeller(): ?Users
    {
        return $this->seller;
    }

    public function setSeller(Users $seller): static
    {
        $this->seller = $seller;
        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getDetails(): Collection
    {
        return $this->details;
    }

    public function addDetail(CommandeDetails $detail): self
    {
        if (!$this->details->contains($detail)) {
            $this->details[] = $detail;
            $detail->setCommande($this);
        }
        return $this;
    }
}
