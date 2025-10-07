<?php

namespace App\Entity;

use App\Repository\FeuillePresenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FeuillePresenceRepository::class)]
class FeuillePresence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idFeuille = null;

    #[ORM\Column]
    private ?int $annee = null;

    #[ORM\Column]
    private ?int $totalHeuresTravaillees = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Employee $employee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFeuille(): ?int
    {
        return $this->idFeuille;
    }

    public function setIdFeuille(int $idFeuille): static
    {
        $this->idFeuille = $idFeuille;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(int $annee): static
    {
        $this->annee = $annee;

        return $this;
    }

    public function getTotalHeuresTravaillees(): ?int
    {
        return $this->totalHeuresTravaillees;
    }

    public function setTotalHeuresTravaillees(int $totalHeuresTravaillees): static
    {
        $this->totalHeuresTravaillees = $totalHeuresTravaillees;

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
