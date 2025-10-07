<?php

namespace App\Entity;

use App\Repository\PlanSuccessionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlanSuccessionRepository::class)]
class PlanSuccession
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idPlan = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date = null;

    #[ORM\Column(length: 255)]
    private ?string $employeeRecommande = null;

    #[ORM\Column(length: 50)]
    private ?string $etat = null;

    #[ORM\Column(length: 50)]
    private ?string $statutPreparation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPlan(): ?int
    {
        return $this->idPlan;
    }

    public function setIdPlan(int $idPlan): static
    {
        $this->idPlan = $idPlan;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getEmployeeRecommande(): ?string
    {
        return $this->employeeRecommande;
    }

    public function setEmployeeRecommande(string $employeeRecommande): static
    {
        $this->employeeRecommande = $employeeRecommande;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getStatutPreparation(): ?string
    {
        return $this->statutPreparation;
    }

    public function setStatutPreparation(string $statutPreparation): static
    {
        $this->statutPreparation = $statutPreparation;

        return $this;
    }
}
