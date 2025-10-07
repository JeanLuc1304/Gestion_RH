<?php

namespace App\Entity;

use App\Repository\EvaluationFormationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvaluationFormationRepository::class)]
class EvaluationFormation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idEvaluationFormation = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $noteFormateur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $noteContenu = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $commentaires = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?InscriptionFormation $inscription = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEvaluationFormation(): ?int
    {
        return $this->idEvaluationFormation;
    }

    public function setIdEvaluationFormation(int $idEvaluationFormation): static
    {
        $this->idEvaluationFormation = $idEvaluationFormation;

        return $this;
    }

    public function getNoteFormateur(): ?string
    {
        return $this->noteFormateur;
    }

    public function setNoteFormateur(string $noteFormateur): static
    {
        $this->noteFormateur = $noteFormateur;

        return $this;
    }

    public function getNoteContenu(): ?string
    {
        return $this->noteContenu;
    }

    public function setNoteContenu(string $noteContenu): static
    {
        $this->noteContenu = $noteContenu;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): static
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    public function getInscription(): ?InscriptionFormation
    {
        return $this->inscription;
    }

    public function setInscription(?InscriptionFormation $inscription): static
    {
        $this->inscription = $inscription;

        return $this;
    }
}
