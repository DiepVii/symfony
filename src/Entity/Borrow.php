<?php

namespace App\Entity;

use App\Repository\BorrowRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BorrowRepository::class)]
class Borrow
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'borrow')]
    #[ORM\JoinColumn(name: "userId", referencedColumnName: "id", nullable: false)]
    private $userId;

    #[ORM\ManyToOne(targetEntity: Equipment::class, inversedBy: 'borrow')]
    #[ORM\JoinColumn(name: "equimentId", referencedColumnName: "id", nullable: false)]
    private $equipmentId;

    #[ORM\Column(type: 'datetime')]
    private $startDate;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $endDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->userId;
    }

    public function setUser(?User $user): self
    {
        $this->userId = $user->id;

        return $this;
    }

    public function getEquipment(): ?Equipment
    {
        return $this->equipmentId;
    }

    public function setEquipment(?Equipment $equipment): self
    {
        $this->equipmentId = $equipment->id;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }
}
