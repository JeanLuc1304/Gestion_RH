<?php

namespace App\Entity;

use App\Repository\NoteFraisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NoteFraisRepository::class)]
class NoteFrais
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idNoteFrais = null;

    #[ORM\Column(length: 100)]
    private ?string $typeDepense = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $montant = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateDepense = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $justificatif = null;

    #[ORM\Column(length: 50)]
    private ?string $moyenPaiment = null;

    #[ORM\ManyToOne(inversedBy: 'notesFrais')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Employee $employee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdNoteFrais(): ?int
    {
        return $this->idNoteFrais;
    }

    public function setIdNoteFrais(int $idNoteFrais): static
    {
        $this->idNoteFrais = $idNoteFrais;

        return $this;
    }

    public function getTypeDepense(): ?string
    {
        return $this->typeDepense;
    }

    public function setTypeDepense(string $typeDepense): static
    {
        $this->typeDepense = $typeDepense;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateDepense(): ?\DateTime
    {
        return $this->dateDepense;
    }

    public function setDateDepense(\DateTime $dateDepense): static
    {
        $this->dateDepense = $dateDepense;

        return $this;
    }

    public function getJustificatif(): ?string
    {
        return $this->justificatif;
    }

    public function setJustificatif(?string $justificatif): static
    {
        $this->justificatif = $justificatif;

        return $this;
    }

    public function getMoyenPaiment(): ?string
    {
        return $this->moyenPaiment;
    }

    public function setMoyenPaiment(string $moyenPaiment): static
    {
        $this->moyenPaiment = $moyenPaiment;

        return $this;
    }

    public function getEmployee(): ?Employee
    {
        return $this->employee;
    }

    public function setEmployee(?Employee $employee): static
    {
        $this->employee = $employee;

        return $this;
    }
}
