<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\PostesRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ORM\Entity(repositoryClass=PostesRepository::class)
 */

class Postes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"read:postes"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"read:postes","write:postes"})
     * @Assert\NotBlank()
     */
    private $name;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"read:postes","write:postes"})
     */
    private $adrress;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     * @Groups({"read:postes","write:postes"})
     */
    private $firstDay;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     * @Groups({"read:postes","write:postes"})
     */
    private $secondDay;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups({"read:postes","write:postes"})
     */
    private $createdAt;



    /**
     * @ORM\ManyToOne(targetEntity=Pays::class, inversedBy="postes")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"read:postes","write:postes"})
     */
    private $postPays;

    /**
     * @ORM\OneToMany(targetEntity=Enseigner::class, mappedBy="poste", orphanRemoval=true)
     */
    private $enseigners;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min = 8, max = 8, minMessage = "La taille mininimum est de 8", maxMessage = "La taille maximum est de 8")
     *  @Assert\Regex(pattern="/^[0-9]*$/", message="number_only") 
     */
    private $phoneNumber;

    public function __construct()
    {
        $this->enseigners = new ArrayCollection();
        $this->createdAt = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }



    public function getAdrresse(): ?string
    {
        return $this->adrress;
    }

    public function setAdrresse(string $adrress): self
    {
        $this->adrress = $adrress;

        return $this;
    }

    public function getFirstDay(): ?string
    {
        return $this->firstDay;
    }

    public function setFirstDay(string $firstDay): self
    {
        $this->firstDay = $firstDay;

        return $this;
    }

    public function getSecondDay(): ?string
    {
        return $this->secondDay;
    }

    public function setSecondDay(string $secondDay): self
    {
        $this->secondDay = $secondDay;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }


    public function getPostPays(): ?Pays
    {
        return $this->postPays;
    }

    public function setPostPays(?Pays $postPays): self
    {
        $this->postPays = $postPays;

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
            $enseigner->setPoste($this);
        }

        return $this;
    }

    public function removeEnseigner(Enseigner $enseigner): self
    {
        if ($this->enseigners->removeElement($enseigner)) {
            // set the owning side to null (unless alread:postesy changed)
            if ($enseigner->getPoste() === $this) {
                $enseigner->setPoste(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
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
