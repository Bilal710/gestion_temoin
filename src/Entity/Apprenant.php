<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ApprenantRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ApprenantRepository::class)
 */

class Apprenant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="message_seq1", initialValue=1, allocationSize=100)
     * @ORM\Column(type="integer")
     * @Groups({"read:appre"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"read:appre","write:appre"})
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=100)
     * @Groups({"read:appre","write:appre"})
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=3, nullable="true")
     * @Groups({"read:appre","write:appre"})
     */
    private $Sexe;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"read:appre","write:appre"})
     */
    private $naissanceAt;

    /**
     * @ORM\ManyToOne(targetEntity=Pays::class, inversedBy="apprenants")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"read:appre","write:appre"})
     */
    private $pays;

    /**
     * @ORM\ManyToOne(targetEntity=NiveauEnseignement::class, inversedBy="apprenants")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"read:appre","write:appre"})
     */
    private $Niveau;

    /**
     * @ORM\ManyToOne(targetEntity=Profession::class, inversedBy="apprenants")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"read:appre","write:appre"})
     */
    private $profession;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->Sexe;
    }

    public function setSexe(string $Sexe): self
    {
        $this->Sexe = $Sexe;

        return $this;
    }

    public function getNaissanceAt(): ?\DateTime
    {
        return $this->naissanceAt;
    }

    public function setNaissanceAt(\DateTime $naissanceAt): self
    {
        $this->naissanceAt = $naissanceAt;

        return $this;
    }

    public function getPays(): ?Pays
    {
        return $this->pays;
    }

    public function setPays(?Pays $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getNiveau(): ?NiveauEnseignement
    {
        return $this->Niveau;
    }

    public function setNiveau(?NiveauEnseignement $Niveau): self
    {
        $this->Niveau = $Niveau;

        return $this;
    }

    public function getProfession(): ?Profession
    {
        return $this->profession;
    }

    public function setProfession(?Profession $profession): self
    {
        $this->profession = $profession;

        return $this;
    }
}
