<?php

namespace App\Entity;

use App\Repository\CongeAcquisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CongeAcquisRepository::class)]
class CongeAcquis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idCongeAcquis = null;

    #[ORM\Column(length: 255)]
    private ?string $typeConge = null;

    #[ORM\Column]
    private ?int $joursConge = null;

    #[ORM\Column]
    private ?int $joursRestants = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCongeAcquis(): ?int
    {
        return $this->idCongeAcquis;
    }

    public function setIdCongeAcquis(int $idCongeAcquis): static
    {
        $this->idCongeAcquis = $idCongeAcquis;

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

    public function getJoursConge(): ?int
    {
        return $this->joursConge;
    }

    public function setJoursConge(int $joursConge): static
    {
        $this->joursConge = $joursConge;

        return $this;
    }

    public function getJoursRestants(): ?int
    {
        return $this->joursRestants;
    }

    public function setJoursRestants(int $joursRestants): static
    {
        $this->joursRestants = $joursRestants;

        return $this;
    }
}
