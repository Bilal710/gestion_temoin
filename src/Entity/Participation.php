<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass=ParticipationRepository::class)
 * @UniqueEntity(
 *      fields={"temoin","reunion"},
 *      errorPath="temoin",
 *      message="Ce témoin a déja été enregistrer pour cette réunion."
 * )
 */
class Participation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $presence;

    /**
     * @ORM\Column(type="text", nullable="false")
     */
    private $motifAbsence;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="participations")
     */
    private $temoin;

    /**
     * @ORM\ManyToOne(targetEntity=Reunion::class, inversedBy="participations")
     */
    private $reunion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPresence(): ?string
    {
        return $this->presence;
    }

    public function setPresence(string $presence): self
    {
        $this->presence = $presence;

        return $this;
    }

    public function getMotifAbsence(): ?string
    {
        return $this->motifAbsence;
    }

    public function setMotifAbsence(string $motifAbsence): self
    {
        $this->motifAbsence = $motifAbsence;

        return $this;
    }

    public function getTemoin(): ?Users
    {
        return $this->temoin;
    }

    public function setTemoin(?Users $temoin): self
    {
        $this->temoin = $temoin;

        return $this;
    }

    public function getReunion(): ?Reunion
    {
        return $this->reunion;
    }

    public function setReunion(?Reunion $reunion): self
    {
        $this->reunion = $reunion;

        return $this;
    }
}
