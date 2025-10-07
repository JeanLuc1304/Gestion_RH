<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
class Employee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idEmployee = null;

    #[ORM\Column(length: 50)]
    private ?string $matricule = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateNaissance = null;

    #[ORM\Column(length: 10)]
    private ?string $sexe = null;

    #[ORM\Column(length: 50)]
    private ?string $nationalite = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $adresse = null;

    #[ORM\Column(length: 20)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $emailPersonnel = null;

    #[ORM\Column(length: 255)]
    private ?string $emailProfessionnel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateEmbauche = null;

    #[ORM\Column(length: 100)]
    private ?string $posteOccupe = null;

    #[ORM\Column(length: 150)]
    private ?string $typeContrat = null;

    #[ORM\Column(length: 50)]
    private ?string $statut = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $salaireBase = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $salaireNet = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $primes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $couvertureSociale = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Departement $departement = null;

    #[ORM\ManyToOne(inversedBy: 'employees')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Poste $poste = null;

    /**
     * @var Collection<int, conge>
     */
    #[ORM\OneToMany(targetEntity: conge::class, mappedBy: 'employee')]
    private Collection $conges;

    /**
     * @var Collection<int, Formation>
     */
    #[ORM\ManyToMany(targetEntity: Formation::class)]
    private Collection $formations;

    /**
     * @var Collection<int, Absence>
     */
    #[ORM\OneToMany(targetEntity: Absence::class, mappedBy: 'employee')]
    private Collection $absences;

    /**
     * @var Collection<int, NoteFrais>
     */
    #[ORM\OneToMany(targetEntity: NoteFrais::class, mappedBy: 'employee')]
    private Collection $notesFrais;

    /**
     * @var Collection<int, Talent>
     */
    #[ORM\OneToMany(targetEntity: Talent::class, mappedBy: 'employee')]
    private Collection $ttalents;

    /**
     * @var Collection<int, InscriptionFormation>
     */
    #[ORM\OneToMany(targetEntity: InscriptionFormation::class, mappedBy: 'employee')]
    private Collection $inscriptionsFormation;

    public function __construct()
    {
        $this->conges = new ArrayCollection();
        $this->formations = new ArrayCollection();
        $this->absences = new ArrayCollection();
        $this->notesFrais = new ArrayCollection();
        $this->ttalents = new ArrayCollection();
        $this->inscriptionsFormation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    public function setIdEmployee(int $idEmployee): static
    {
        $this->idEmployee = $idEmployee;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): static
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTime
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTime $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): static
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmailPersonnel(): ?string
    {
        return $this->emailPersonnel;
    }

    public function setEmailPersonnel(string $emailPersonnel): static
    {
        $this->emailPersonnel = $emailPersonnel;

        return $this;
    }

    public function getEmailProfessionnel(): ?string
    {
        return $this->emailProfessionnel;
    }

    public function setEmailProfessionnel(string $emailProfessionnel): static
    {
        $this->emailProfessionnel = $emailProfessionnel;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDateEmbauche(): ?\DateTime
    {
        return $this->dateEmbauche;
    }

    public function setDateEmbauche(\DateTime $dateEmbauche): static
    {
        $this->dateEmbauche = $dateEmbauche;

        return $this;
    }

    public function getPosteOccupe(): ?string
    {
        return $this->posteOccupe;
    }

    public function setPosteOccupe(string $posteOccupe): static
    {
        $this->posteOccupe = $posteOccupe;

        return $this;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(string $typeContrat): static
    {
        $this->typeContrat = $typeContrat;

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

    public function getSalaireBase(): ?string
    {
        return $this->salaireBase;
    }

    public function setSalaireBase(string $salaireBase): static
    {
        $this->salaireBase = $salaireBase;

        return $this;
    }

    public function getSalaireNet(): ?string
    {
        return $this->salaireNet;
    }

    public function setSalaireNet(string $salaireNet): static
    {
        $this->salaireNet = $salaireNet;

        return $this;
    }

    public function getPrimes(): ?string
    {
        return $this->primes;
    }

    public function setPrimes(?string $primes): static
    {
        $this->primes = $primes;

        return $this;
    }

    public function getCouvertureSociale(): ?string
    {
        return $this->couvertureSociale;
    }

    public function setCouvertureSociale(?string $couvertureSociale): static
    {
        $this->couvertureSociale = $couvertureSociale;

        return $this;
    }

    public function getDepartement(): ?Departement
    {
        return $this->departement;
    }

    public function setDepartement(?Departement $departement): static
    {
        $this->departement = $departement;

        return $this;
    }

    public function getPoste(): ?Poste
    {
        return $this->poste;
    }

    public function setPoste(?Poste $poste): static
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * @return Collection<int, conge>
     */
    public function getConges(): Collection
    {
        return $this->conges;
    }

    public function addConge(conge $conge): static
    {
        if (!$this->conges->contains($conge)) {
            $this->conges->add($conge);
            $conge->setEmployee($this);
        }

        return $this;
    }

    public function removeConge(conge $conge): static
    {
        if ($this->conges->removeElement($conge)) {
            // set the owning side to null (unless already changed)
            if ($conge->getEmployee() === $this) {
                $conge->setEmployee(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Formation>
     */
    public function getFormations(): Collection
    {
        return $this->formations;
    }

    public function addFormation(Formation $formation): static
    {
        if (!$this->formations->contains($formation)) {
            $this->formations->add($formation);
        }

        return $this;
    }

    public function removeFormation(Formation $formation): static
    {
        $this->formations->removeElement($formation);

        return $this;
    }

    /**
     * @return Collection<int, Absence>
     */
    public function getAbsences(): Collection
    {
        return $this->absences;
    }

    public function addAbsence(Absence $absence): static
    {
        if (!$this->absences->contains($absence)) {
            $this->absences->add($absence);
            $absence->setEmployee($this);
        }

        return $this;
    }

    public function removeAbsence(Absence $absence): static
    {
        if ($this->absences->removeElement($absence)) {
            // set the owning side to null (unless already changed)
            if ($absence->getEmployee() === $this) {
                $absence->setEmployee(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, NoteFrais>
     */
    public function getNotesFrais(): Collection
    {
        return $this->notesFrais;
    }

    public function addNotesFrai(NoteFrais $notesFrai): static
    {
        if (!$this->notesFrais->contains($notesFrai)) {
            $this->notesFrais->add($notesFrai);
            $notesFrai->setEmployee($this);
        }

        return $this;
    }

    public function removeNotesFrai(NoteFrais $notesFrai): static
    {
        if ($this->notesFrais->removeElement($notesFrai)) {
            // set the owning side to null (unless already changed)
            if ($notesFrai->getEmployee() === $this) {
                $notesFrai->setEmployee(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Talent>
     */
    public function getTtalents(): Collection
    {
        return $this->ttalents;
    }

    public function addTtalent(Talent $ttalent): static
    {
        if (!$this->ttalents->contains($ttalent)) {
            $this->ttalents->add($ttalent);
            $ttalent->setEmployee($this);
        }

        return $this;
    }

    public function removeTtalent(Talent $ttalent): static
    {
        if ($this->ttalents->removeElement($ttalent)) {
            // set the owning side to null (unless already changed)
            if ($ttalent->getEmployee() === $this) {
                $ttalent->setEmployee(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, InscriptionFormation>
     */
    public function getInscriptionsFormation(): Collection
    {
        return $this->inscriptionsFormation;
    }

    public function addInscriptionsFormation(InscriptionFormation $inscriptionsFormation): static
    {
        if (!$this->inscriptionsFormation->contains($inscriptionsFormation)) {
            $this->inscriptionsFormation->add($inscriptionsFormation);
            $inscriptionsFormation->setEmployee($this);
        }

        return $this;
    }

    public function removeInscriptionsFormation(InscriptionFormation $inscriptionsFormation): static
    {
        if ($this->inscriptionsFormation->removeElement($inscriptionsFormation)) {
            // set the owning side to null (unless already changed)
            if ($inscriptionsFormation->getEmployee() === $this) {
                $inscriptionsFormation->setEmployee(null);
            }
        }

        return $this;
    }
}
