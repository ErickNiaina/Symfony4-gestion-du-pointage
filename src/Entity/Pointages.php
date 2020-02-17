<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Pointages
 *
 * @ORM\Table(name="pointages")
 * @ORM\Entity(repositoryClass="App\Repository\PointagesRepository")
 */
class Pointages
{
    /**
     * @var int
     *
     * @ORM\Column(name="rowid", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowid;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_employer", type="integer", nullable=false)

     */
    private $fkEmployer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pointage_arrivee", type="datetime", nullable=true)
     */
    private $pointageArrivee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_arrivee", type="string", length=255, nullable=true)
     */
    private $noteArrivee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pointage_depart", type="datetime", nullable=true)
     */
    private $pointageDepart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_depart", type="string", length=255, nullable=true)
     */
    private $noteDepart;

    /**
     * @var bool
     *
     * @ORM\Column(name="actif", type="boolean", nullable=false)
     */
    private $actif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cree_le", type="datetime", nullable=false)
     */
    private $creeLe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="modifie_le", type="datetime", nullable=true)
     */
    private $modifieLe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var array
     *
     * @ORM\Column(name="etat", type="simple_array", length=0, nullable=false)
     */
    private $etat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="total_minute", type="smallint", nullable=true)
     */
    private $totalMinute;


    public function getRowid(): ?string
    {
        return $this->rowid;
    }

    public function getFkEmployer(): ?int
    {
        return $this->fkEmployer;
    }

    public function setFkEmployer(int $fkEmployer): self
    {
        $this->fkEmployer = $fkEmployer;

        return $this;
    }

    public function getPointageArrivee(): ?\DateTimeInterface
    {
        return $this->pointageArrivee;
    }

    public function setPointageArrivee(?\DateTimeInterface $pointageArrivee): self
    {
        $this->pointageArrivee  = $pointageArrivee;

        return $this;
    }

    public function getNoteArrivee(): ?string
    {
        return $this->noteArrivee;
    }

    public function setNoteArrivee(?string $noteArrivee): self
    {
        $this->noteArrivee = $noteArrivee;

        return $this;
    }

    public function getPointageDepart(): ?\DateTimeInterface
    {
        return $this->pointageDepart;
    }

    public function setPointageDepart(?\DateTimeInterface $pointageDepart): self
    {
        $this->pointageDepart = $pointageDepart;

        return $this;
    }

    public function getNoteDepart(): ?string
    {
        return $this->noteDepart;
    }

    public function setNoteDepart(?string $noteDepart): self
    {
        $this->noteDepart = $noteDepart;

        return $this;
    }

    public function getActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(bool $actif): self
    {
        $this->actif = $actif;

        return $this;
    }

    public function getFkUserAuthor(): ?int
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(?int $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

        return $this;
    }

    public function getCreeLe(): ?\DateTimeInterface
    {
        return $this->creeLe;
    }

    public function setCreeLe(\DateTimeInterface $creeLe): self
    {
        $this->creeLe = $creeLe;

        return $this;
    }

    public function getFkUserModif(): ?int
    {
        return $this->fkUserModif;
    }

    public function setFkUserModif(?int $fkUserModif): self
    {
        $this->fkUserModif = $fkUserModif;

        return $this;
    }

    public function getModifieLe(): ?\DateTimeInterface
    {
        return $this->modifieLe;
    }

    public function setModifieLe(?\DateTimeInterface $modifieLe): self
    {
        $this->modifieLe = $modifieLe;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEtat(): ?array
    {
        return $this->etat;
    }

    public function setEtat(array $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getTotalMinute(): ?int
    {
        return $this->totalMinute;
    }

    public function setTotalMinute(?int $totalMinute): self
    {
        $this->totalMinute = $totalMinute;

        return $this;
    }


}
