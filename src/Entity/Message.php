<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $iidMessage = null;

    #[ORM\Column(length: 255)]
    private ?string $destinataire = null;

    #[ORM\Column(length: 255)]
    private ?string $expediteur = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $contenu = null;

    #[ORM\Column]
    private ?\DateTime $dateEnvoi = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $fichierJoint = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIidMessage(): ?int
    {
        return $this->iidMessage;
    }

    public function setIidMessage(int $iidMessage): static
    {
        $this->iidMessage = $iidMessage;

        return $this;
    }

    public function getDestinataire(): ?string
    {
        return $this->destinataire;
    }

    public function setDestinataire(string $destinataire): static
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    public function getExpediteur(): ?string
    {
        return $this->expediteur;
    }

    public function setExpediteur(string $expediteur): static
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateEnvoi(): ?\DateTime
    {
        return $this->dateEnvoi;
    }

    public function setDateEnvoi(\DateTime $dateEnvoi): static
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    public function getFichierJoint(): ?string
    {
        return $this->fichierJoint;
    }

    public function setFichierJoint(?string $fichierJoint): static
    {
        $this->fichierJoint = $fichierJoint;

        return $this;
    }
}
