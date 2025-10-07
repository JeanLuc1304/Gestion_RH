<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalleRepository::class)]
class Salle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idSalle = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $equipement = null;

    /**
     * @var Collection<int, Reservation>
     */
    #[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'salle')]
    private Collection $rreservations;

    public function __construct()
    {
        $this->rreservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSalle(): ?int
    {
        return $this->idSalle;
    }

    public function setIdSalle(int $idSalle): static
    {
        $this->idSalle = $idSalle;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getEquipement(): ?string
    {
        return $this->equipement;
    }

    public function setEquipement(?string $equipement): static
    {
        $this->equipement = $equipement;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getRreservations(): Collection
    {
        return $this->rreservations;
    }

    public function addRreservation(Reservation $rreservation): static
    {
        if (!$this->rreservations->contains($rreservation)) {
            $this->rreservations->add($rreservation);
            $rreservation->setSalle($this);
        }

        return $this;
    }

    public function removeRreservation(Reservation $rreservation): static
    {
        if ($this->rreservations->removeElement($rreservation)) {
            // set the owning side to null (unless already changed)
            if ($rreservation->getSalle() === $this) {
                $rreservation->setSalle(null);
            }
        }

        return $this;
    }
}
