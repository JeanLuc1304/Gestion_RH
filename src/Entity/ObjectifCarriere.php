<?php

namespace App\Entity;

use App\Repository\ObjectifCarriereRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObjectifCarriereRepository::class)]
class ObjectifCarriere
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idObjectif = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $decription = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateEcheance = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdObjectif(): ?int
    {
        return $this->idObjectif;
    }

    public function setIdObjectif(int $idObjectif): static
    {
        $this->idObjectif = $idObjectif;

        return $this;
    }

    public function getDecription(): ?string
    {
        return $this->decription;
    }

    public function setDecription(string $decription): static
    {
        $this->decription = $decription;

        return $this;
    }

    public function getDateEcheance(): ?\DateTime
    {
        return $this->dateEcheance;
    }

    public function setDateEcheance(\DateTime $dateEcheance): static
    {
        $this->dateEcheance = $dateEcheance;

        return $this;
    }
}
