<?php

namespace App\Entity;

use App\Repository\DemandeCongeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DemandeCongeRepository::class)]
class DemandeConge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idDemandeConge = null;

    #[ORM\Column(length: 255)]
    private ?string $typeConge = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateFin = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateValidation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $justification = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDemandeConge(): ?int
    {
        return $this->idDemandeConge;
    }

    public function setIdDemandeConge(int $idDemandeConge): static
    {
        $this->idDemandeConge = $idDemandeConge;

        return $this;
    }

    public function getTypeConge(): ?string
    {
        return $this->typeConge;
    }

    public function setTypeConge(string $typeConge): static
    {
        $this->typeConge = $typeConge;

        return $this;
    }

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTime $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTime $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDateValidation(): ?\DateTime
    {
        return $this->dateValidation;
    }

    public function setDateValidation(?\DateTime $dateValidation): static
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    public function getJustification(): ?string
    {
        return $this->justification;
    }

    public function setJustification(?string $justification): static
    {
        $this->justification = $justification;

        return $this;
    }
}
