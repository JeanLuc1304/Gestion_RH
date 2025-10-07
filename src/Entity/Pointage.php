<?php

namespace App\Entity;

use App\Repository\PointageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PointageRepository::class)]
class Pointage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idPointage = null;

    #[ORM\Column]
    private ?\DateTime $dateEntree = null;

    #[ORM\Column]
    private ?\DateTime $dateSortie = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    private ?\DateTime $dureePause = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPointage(): ?int
    {
        return $this->idPointage;
    }

    public function setIdPointage(int $idPointage): static
    {
        $this->idPointage = $idPointage;

        return $this;
    }

    public function getDateEntree(): ?\DateTime
    {
        return $this->dateEntree;
    }

    public function setDateEntree(\DateTime $dateEntree): static
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    public function getDateSortie(): ?\DateTime
    {
        return $this->dateSortie;
    }

    public function setDateSortie(\DateTime $dateSortie): static
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getDureePause(): ?\DateTime
    {
        return $this->dureePause;
    }

    public function setDureePause(?\DateTime $dureePause): static
    {
        $this->dureePause = $dureePause;

        return $this;
    }
}
