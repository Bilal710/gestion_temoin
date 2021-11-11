<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\UsersRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $lastName;


    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     * @Assert\NotBlank()
     */
    private $sexe;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank()
     */
    private $naissanceAt;


    /**
     * @ORM\ManyToOne(targetEntity=Pays::class, inversedBy="users")
     * @ORM\JoinColumn(nullable=true)
     */
    private $pays;

    /**
     * @ORM\ManyToOne(targetEntity=NiveauEnseignement::class, inversedBy="usersNiveau")
     * @ORM\JoinColumn(nullable=true)
     */
    private $niveau;

    /**
     * @ORM\OneToMany(targetEntity=Enseigner::class, mappedBy="temoin", orphanRemoval=true)
     * @ORM\JoinColumn(nullable=true)
     */
    private $enseigners;

    /**
     * @ORM\ManyToOne(targetEntity=Profession::class, inversedBy="users")
     */
    private $profession;


    /**
     * @ORM\OneToMany(targetEntity=Participation::class, mappedBy="temoin")
     */
    private $participations;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min = 8, max = 8, minMessage = "La taille mininimum est de 8", maxMessage = "La taille maximum est de 8")
     * @Assert\Regex(pattern="/^[0-9]*$/", message="number_only")
     */
    private $phoneNumber;

    public function __construct()
    {
        $this->enseigners = new ArrayCollection();
        $this->participations = new ArrayCollection();
    }


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
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

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
        return $this->niveau;
    }

    public function setNiveau(?NiveauEnseignement $niveau): self
    {
        $this->niveau = $niveau;

        return $this;
    }



    /**
     * @return Collection|Enseigner[]
     */
    public function getEnseigners(): Collection
    {
        return $this->enseigners;
    }

    public function addEnseigner(Enseigner $enseigner): self
    {
        if (!$this->enseigners->contains($enseigner)) {
            $this->enseigners[] = $enseigner;
            $enseigner->setTemoin($this);
        }

        return $this;
    }

    public function removeEnseigner(Enseigner $enseigner): self
    {
        if ($this->enseigners->removeElement($enseigner)) {
            // set the owning side to null (unless already changed)
            if ($enseigner->getTemoin() === $this) {
                $enseigner->setTemoin(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->firstName . ' ' . $this->lastName;
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

    /**
     * @return Collection|Participation[]
     */
    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    public function addParticipation(Participation $participation): self
    {
        if (!$this->participations->contains($participation)) {
            $this->participations[] = $participation;
            $participation->setTemoin($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): self
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getTemoin() === $this) {
                $participation->setTemoin(null);
            }
        }

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
