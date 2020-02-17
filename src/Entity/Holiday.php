<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Holiday
 *
 * @ORM\Table(name="holiday", indexes={@ORM\Index(name="idx_holiday_date_fin", columns={"date_fin"}), @ORM\Index(name="idx_holiday_fk_user", columns={"fk_user"}), @ORM\Index(name="idx_holiday_date_create", columns={"date_create"}), @ORM\Index(name="idx_holiday_date_debut", columns={"date_debut"}), @ORM\Index(name="idx_holiday_fk_validator", columns={"fk_validator"}), @ORM\Index(name="idx_holiday_entity", columns={"entity"}), @ORM\Index(name="idx_holiday_fk_user_create", columns={"fk_user_create"})})
 * @ORM\Entity(repositoryClass="App\Repository\HolidayRepository")
 */
class Holiday
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
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_create", type="integer", nullable=true)
     */
    private $fkUserCreate;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_type", type="integer", nullable=false)
     */
    private $fkType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="datetime", nullable=false)
     */
    private $dateCreate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="halfday", type="integer", nullable=true)
     */
    private $halfday = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="integer", nullable=false, options={"default"="1"})
     */
    private $statut = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_validator", type="integer", nullable=false)
     */
    private $fkValidator;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_refuse", type="datetime", nullable=true)
     */
    private $dateRefuse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_refuse", type="integer", nullable=true)
     */
    private $fkUserRefuse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_cancel", type="datetime", nullable=true)
     */
    private $dateCancel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_cancel", type="integer", nullable=true)
     */
    private $fkUserCancel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detail_refuse", type="string", length=250, nullable=true)
     */
    private $detailRefuse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="vue", type="integer", nullable=true)
     */
    private $vue;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_dernier_retardement", type="date", nullable=true)
     */
    private $dateDernierRetardement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_retartement", type="integer", nullable=true)
     */
    private $nbRetartement;

    /**
     * @var float|null
     *
     * @ORM\Column(name="nb_days", type="float", precision=13, scale=2, nullable=true)
     */
    private $nbDays;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

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

    public function getFkUserCreate(): ?int
    {
        return $this->fkUserCreate;
    }

    public function setFkUserCreate(?int $fkUserCreate): self
    {
        $this->fkUserCreate = $fkUserCreate;

        return $this;
    }

    public function getFkType(): ?int
    {
        return $this->fkType;
    }

    public function setFkType(int $fkType): self
    {
        $this->fkType = $fkType;

        return $this;
    }

    public function getDateCreate(): ?\DateTimeInterface
    {
        return $this->dateCreate;
    }

    public function setDateCreate(\DateTimeInterface $dateCreate): self
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getHalfday(): ?int
    {
        return $this->halfday;
    }

    public function setHalfday(?int $halfday): self
    {
        $this->halfday = $halfday;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getFkValidator(): ?int
    {
        return $this->fkValidator;
    }

    public function setFkValidator(int $fkValidator): self
    {
        $this->fkValidator = $fkValidator;

        return $this;
    }

    public function getDateValid(): ?\DateTimeInterface
    {
        return $this->dateValid;
    }

    public function setDateValid(?\DateTimeInterface $dateValid): self
    {
        $this->dateValid = $dateValid;

        return $this;
    }

    public function getFkUserValid(): ?int
    {
        return $this->fkUserValid;
    }

    public function setFkUserValid(?int $fkUserValid): self
    {
        $this->fkUserValid = $fkUserValid;

        return $this;
    }

    public function getDateRefuse(): ?\DateTimeInterface
    {
        return $this->dateRefuse;
    }

    public function setDateRefuse(?\DateTimeInterface $dateRefuse): self
    {
        $this->dateRefuse = $dateRefuse;

        return $this;
    }

    public function getFkUserRefuse(): ?int
    {
        return $this->fkUserRefuse;
    }

    public function setFkUserRefuse(?int $fkUserRefuse): self
    {
        $this->fkUserRefuse = $fkUserRefuse;

        return $this;
    }

    public function getDateCancel(): ?\DateTimeInterface
    {
        return $this->dateCancel;
    }

    public function setDateCancel(?\DateTimeInterface $dateCancel): self
    {
        $this->dateCancel = $dateCancel;

        return $this;
    }

    public function getFkUserCancel(): ?int
    {
        return $this->fkUserCancel;
    }

    public function setFkUserCancel(?int $fkUserCancel): self
    {
        $this->fkUserCancel = $fkUserCancel;

        return $this;
    }

    public function getDetailRefuse(): ?string
    {
        return $this->detailRefuse;
    }

    public function setDetailRefuse(?string $detailRefuse): self
    {
        $this->detailRefuse = $detailRefuse;

        return $this;
    }

    public function getNotePrivate(): ?string
    {
        return $this->notePrivate;
    }

    public function setNotePrivate(?string $notePrivate): self
    {
        $this->notePrivate = $notePrivate;

        return $this;
    }

    public function getNotePublic(): ?string
    {
        return $this->notePublic;
    }

    public function setNotePublic(?string $notePublic): self
    {
        $this->notePublic = $notePublic;

        return $this;
    }

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getVue(): ?int
    {
        return $this->vue;
    }

    public function setVue(?int $vue): self
    {
        $this->vue = $vue;

        return $this;
    }

    public function getDateDernierRetardement(): ?\DateTimeInterface
    {
        return $this->dateDernierRetardement;
    }

    public function setDateDernierRetardement(?\DateTimeInterface $dateDernierRetardement): self
    {
        $this->dateDernierRetardement = $dateDernierRetardement;

        return $this;
    }

    public function getNbRetartement(): ?int
    {
        return $this->nbRetartement;
    }

    public function setNbRetartement(?int $nbRetartement): self
    {
        $this->nbRetartement = $nbRetartement;

        return $this;
    }

    public function getNbDays(): ?float
    {
        return $this->nbDays;
    }

    public function setNbDays(?float $nbDays): self
    {
        $this->nbDays = $nbDays;

        return $this;
    }


}
