<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use App\Repository\EnseignerRepository;
use DateTime;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnseignerRepository::class)
 */


class Enseigner
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"read"})
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"read","write"})
     * @Assert\DateTime(groups={"default"})
     */
    private $startAt;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"read","write"})
     * @Assert\DateTime(groups={"default"})
     * @Assert\GreaterThan(propertyPath="startAt")
     */
    private $endAt;

    /**
     * @ORM\Column(type="text")
     * @Groups({"read","write"})
     */
    private $observation;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="enseigners")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"read"})
     */
    private $temoin;

    /**
     * @ORM\ManyToOne(targetEntity=Postes::class, inversedBy="enseigners")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"read"})
     */
    private $poste;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartAt(): ?\DateTime
    {
        return $this->startAt;
    }

    public function setStartAt(\DateTime $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }

    public function getEndAt(): ?\DateTime
    {
        return $this->endAt;
    }

    public function setEndAt(\DateTime $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): self
    {
        $this->observation = $observation;

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

    public function getPoste(): ?Postes
    {
        return $this->poste;
    }

    public function setPoste(?Postes $poste): self
    {
        $this->poste = $poste;

        return $this;
    }
}
