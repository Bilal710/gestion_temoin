<?php

namespace App\Entity;

use App\Repository\ReunionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReunionRepository::class)
 */
class Reunion
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
    private $type;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $reunionAt;

    /**
     * @ORM\OneToMany(targetEntity=Participation::class, mappedBy="reunion")
     */
    private $participations;



    public function __construct()
    {
        $this->participations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getReunionAt(): ?\DateTimeImmutable
    {
        return $this->reunionAt;
    }

    public function setReunionAt(\DateTimeImmutable $reunionAt): self
    {
        $this->reunionAt = $reunionAt;

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
            $participation->setReunion($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): self
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getReunion() === $this) {
                $participation->setReunion(null);
            }
        }

        return $this;
    }


    // $newDate = date_format($reunionAt,'d-m-Y');

    public function __toString()
    {
        return $this->type.' '.date_format($this->reunionAt,'d-m-Y H:i');
    }
}
