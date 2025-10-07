<?php

namespace App\Entity;

use App\Repository\DocumentRHRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocumentRHRepository::class)]
class DocumentRH
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idDocument = null;

    #[ORM\Column(length: 255)]
    private ?string $typeDocument = null;

    #[ORM\Column(length: 255)]
    private ?string $intitule = null;

    #[ORM\Column(length: 255)]
    private ?string $fichier = null;

    #[ORM\Column]
    private ?\DateTime $dateUpload = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $dateExpiration = null;

    #[ORM\Column(length: 50)]
    private ?string $statutDocument = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDocument(): ?int
    {
        return $this->idDocument;
    }

    public function setIdDocument(int $idDocument): static
    {
        $this->idDocument = $idDocument;

        return $this;
    }

    public function getTypeDocument(): ?string
    {
        return $this->typeDocument;
    }

    public function setTypeDocument(string $typeDocument): static
    {
        $this->typeDocument = $typeDocument;

        return $this;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): static
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(string $fichier): static
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getDateUpload(): ?\DateTime
    {
        return $this->dateUpload;
    }

    public function setDateUpload(\DateTime $dateUpload): static
    {
        $this->dateUpload = $dateUpload;

        return $this;
    }

    public function getDateExpiration(): ?\DateTime
    {
        return $this->dateExpiration;
    }

    public function setDateExpiration(?\DateTime $dateExpiration): static
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    public function getStatutDocument(): ?string
    {
        return $this->statutDocument;
    }

    public function setStatutDocument(string $statutDocument): static
    {
        $this->statutDocument = $statutDocument;

        return $this;
    }
}
