<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\NiveauEnseignementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=NiveauEnseignementRepository::class)
 */


class NiveauEnseignement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"read:niveau"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"read:users","read:niveau","write:niveau","read:appre"})
     * @Assert\NotBlank()
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=Users::class, mappedBy="niveau")
     */
    private $usersNiveau;

    /**
     * @ORM\OneToMany(targetEntity=Apprenant::class, mappedBy="Niveau")
     */
    private $apprenants;

    public function __construct()
    {
        $this->usersNiveau = new ArrayCollection();
        $this->apprenants = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Users[]
     */
    public function getUsersNiveau(): Collection
    {
        return $this->usersNiveau;
    }

    public function addUsersNiveau(Users $usersNiveau): self
    {
        if (!$this->usersNiveau->contains($usersNiveau)) {
            $this->usersNiveau[] = $usersNiveau;
            $usersNiveau->setNiveau($this);
        }

        return $this;
    }

    public function removeUsersNiveau(Users $usersNiveau): self
    {
        if ($this->usersNiveau->removeElement($usersNiveau)) {
            // set the owning side to null (unless already changed)
            if ($usersNiveau->getNiveau() === $this) {
                $usersNiveau->setNiveau(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->libelle;
    }

    /**
     * @return Collection|Apprenant[]
     */
    public function getApprenants(): Collection
    {
        return $this->apprenants;
    }

    public function addApprenant(Apprenant $apprenant): self
    {
        if (!$this->apprenants->contains($apprenant)) {
            $this->apprenants[] = $apprenant;
            $apprenant->setNiveau($this);
        }

        return $this;
    }

    public function removeApprenant(Apprenant $apprenant): self
    {
        if ($this->apprenants->removeElement($apprenant)) {
            // set the owning side to null (unless already changed)
            if ($apprenant->getNiveau() === $this) {
                $apprenant->setNiveau(null);
            }
        }

        return $this;
    }
}
