<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LlxEmployers
 *
 * @ORM\Table(name="employers", indexes={@ORM\Index(name="fk_employers_societe_rowid", columns={"fk_societe"}), @ORM\Index(name="fk_employers_nationnalite_rowid", columns={"fk_nationalite"})})
 * @ORM\Entity
 */
class Employers
{
    /**
     * @var int
     *
     * @ORM\Column(name="rowid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowid;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=64, nullable=false, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_professionnel", type="string", length=64, nullable=true, options={"fixed"=true})
     */
    private $emailProfessionnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tel_professionnel", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $telProfessionnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="situation_matrimonial", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $situationMatrimonial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=64, nullable=true, options={"fixed"=true})
     */
    private $lieuNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sexe", type="string", length=15, nullable=true, options={"fixed"=true})
     */
    private $sexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse_perso", type="string", length=64, nullable=true, options={"fixed"=true})
     */
    private $adressePerso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_enfant", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nombreEnfant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_cnaps", type="string", length=64, nullable=true, options={"fixed"=true})
     */
    private $numeroCnaps;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_passport", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $numeroPassport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_compte_bancaire", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $numeroCompteBancaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_cin", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $numeroCin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_matricule", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $numeroMatricule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_ostie", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $numeroOstie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="classification", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $classification;

    /**
     * @var float|null
     *
     * @ORM\Column(name="nbr_conger_restant", type="float", precision=3, scale=2, nullable=true)
     */
    private $nbrCongerRestant;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_visite_medicale", type="datetime", nullable=true)
     */
    private $dateVisiteMedicale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_societe", type="integer", nullable=false)
     */
    private $fkSociete;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_nationalite", type="integer", nullable=false)
     */
    private $fkNationalite;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_lie", type="integer", nullable=false)
     */
    private $fkUserLie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_departement", type="integer", nullable=true)
     */
    private $fkDepartement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=500, nullable=true)
     */
    private $photo;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmailProfessionnel(): ?string
    {
        return $this->emailProfessionnel;
    }

    public function setEmailProfessionnel(?string $emailProfessionnel): self
    {
        $this->emailProfessionnel = $emailProfessionnel;

        return $this;
    }

    public function getTelProfessionnel(): ?string
    {
        return $this->telProfessionnel;
    }

    public function setTelProfessionnel(?string $telProfessionnel): self
    {
        $this->telProfessionnel = $telProfessionnel;

        return $this;
    }

    public function getSituationMatrimonial(): ?string
    {
        return $this->situationMatrimonial;
    }

    public function setSituationMatrimonial(?string $situationMatrimonial): self
    {
        $this->situationMatrimonial = $situationMatrimonial;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieuNaissance;
    }

    public function setLieuNaissance(?string $lieuNaissance): self
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getAdressePerso(): ?string
    {
        return $this->adressePerso;
    }

    public function setAdressePerso(?string $adressePerso): self
    {
        $this->adressePerso = $adressePerso;

        return $this;
    }

    public function getNombreEnfant(): ?string
    {
        return $this->nombreEnfant;
    }

    public function setNombreEnfant(?string $nombreEnfant): self
    {
        $this->nombreEnfant = $nombreEnfant;

        return $this;
    }

    public function getNumeroCnaps(): ?string
    {
        return $this->numeroCnaps;
    }

    public function setNumeroCnaps(?string $numeroCnaps): self
    {
        $this->numeroCnaps = $numeroCnaps;

        return $this;
    }

    public function getNumeroPassport(): ?string
    {
        return $this->numeroPassport;
    }

    public function setNumeroPassport(?string $numeroPassport): self
    {
        $this->numeroPassport = $numeroPassport;

        return $this;
    }

    public function getNumeroCompteBancaire(): ?string
    {
        return $this->numeroCompteBancaire;
    }

    public function setNumeroCompteBancaire(?string $numeroCompteBancaire): self
    {
        $this->numeroCompteBancaire = $numeroCompteBancaire;

        return $this;
    }

    public function getNumeroCin(): ?string
    {
        return $this->numeroCin;
    }

    public function setNumeroCin(?string $numeroCin): self
    {
        $this->numeroCin = $numeroCin;

        return $this;
    }

    public function getNumeroMatricule(): ?string
    {
        return $this->numeroMatricule;
    }

    public function setNumeroMatricule(?string $numeroMatricule): self
    {
        $this->numeroMatricule = $numeroMatricule;

        return $this;
    }

    public function getNumeroOstie(): ?string
    {
        return $this->numeroOstie;
    }

    public function setNumeroOstie(?string $numeroOstie): self
    {
        $this->numeroOstie = $numeroOstie;

        return $this;
    }

    public function getClassification(): ?string
    {
        return $this->classification;
    }

    public function setClassification(?string $classification): self
    {
        $this->classification = $classification;

        return $this;
    }

    public function getNbrCongerRestant(): ?float
    {
        return $this->nbrCongerRestant;
    }

    public function setNbrCongerRestant(?float $nbrCongerRestant): self
    {
        $this->nbrCongerRestant = $nbrCongerRestant;

        return $this;
    }

    public function getDateVisiteMedicale(): ?\DateTimeInterface
    {
        return $this->dateVisiteMedicale;
    }

    public function setDateVisiteMedicale(?\DateTimeInterface $dateVisiteMedicale): self
    {
        $this->dateVisiteMedicale = $dateVisiteMedicale;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(int $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    public function getFkSociete(): ?int
    {
        return $this->fkSociete;
    }

    public function setFkSociete(int $fkSociete): self
    {
        $this->fkSociete = $fkSociete;

        return $this;
    }

    public function getFkNationalite(): ?int
    {
        return $this->fkNationalite;
    }

    public function setFkNationalite(int $fkNationalite): self
    {
        $this->fkNationalite = $fkNationalite;

        return $this;
    }

    public function getFkUserLie(): ?int
    {
        return $this->fkUserLie;
    }

    public function setFkUserLie(int $fkUserLie): self
    {
        $this->fkUserLie = $fkUserLie;

        return $this;
    }

    public function getFkDepartement(): ?int
    {
        return $this->fkDepartement;
    }

    public function setFkDepartement(?int $fkDepartement): self
    {
        $this->fkDepartement = $fkDepartement;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }


}
