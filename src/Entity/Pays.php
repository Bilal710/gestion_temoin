<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\PaysRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PaysRepository::class)
 */
#[ApiResource(
    normalizationContext: ['groups' => ['read:Pays']],
    denormalizationContext: ['groups' => ['write:Pays']],
    itemOperations: [
        'get',
        'delete',
        'patch'
    ],
)]
class Pays
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"read:Pays"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({
     *      "read:users",
     *      "read:Pays",
     *      "write:Pays",
     *      "read:postes",
     *      "read:appre"
     * })
     * @Assert\NotBlank()
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=Users::class, mappedBy="pays")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity=Postes::class, mappedBy="postPays", orphanRemoval=true)
     */
    private $postes;

    /**
     * @ORM\OneToMany(targetEntity=Apprenant::class, mappedBy="pays")
     */
    private $apprenants;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->postes = new ArrayCollection();
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
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Users $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setPays($this);
        }

        return $this;
    }

    public function removeUser(Users $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getPays() === $this) {
                $user->setPays(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Postes[]
     */
    public function getPostes(): Collection
    {
        return $this->postes;
    }

    public function addPoste(Postes $poste): self
    {
        if (!$this->postes->contains($poste)) {
            $this->postes[] = $poste;
            $poste->setPostPays($this);
        }

        return $this;
    }

    public function removePoste(Postes $poste): self
    {
        if ($this->postes->removeElement($poste)) {
            // set the owning side to null (unless already changed)
            if ($poste->getPostPays() === $this) {
                $poste->setPostPays(null);
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
            $apprenant->setPays($this);
        }

        return $this;
    }

    public function removeApprenant(Apprenant $apprenant): self
    {
        if ($this->apprenants->removeElement($apprenant)) {
            // set the owning side to null (unless already changed)
            if ($apprenant->getPays() === $this) {
                $apprenant->setPays(null);
            }
        }

        return $this;
    }
}
