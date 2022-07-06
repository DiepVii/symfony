<?php

namespace App\Entity;

use App\Repository\EquipmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipmentRepository::class)]
class Equipment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $image;

    #[ORM\Column(type: 'integer')]
    private $status;

    #[ORM\ManyToOne(targetEntity: Type::class, inversedBy: 'equipment')]
    #[ORM\JoinColumn(name: "typeId", referencedColumnName: "id", nullable: false)]
    private $typeId;

    #[ORM\OneToMany(mappedBy: 'equipment', targetEntity: Borrow::class)]
    private $borrow;

    public function __construct()
    {
        $this->borrow = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->typeId;
    }

    public function setType(?Type $type): self
    {
        $this->typeId = $type->id;

        return $this;
    }

    /**
     * @return Collection<int, Borrow>
     */
    public function getBorrow(): Collection
    {
        return $this->borrow;
    }

    public function addBorrow(Borrow $borrow): self
    {
        if (!$this->borrow->contains($borrow)) {
            $this->borrow[] = $borrow;
            $borrow->setEquipment($this);
        }

        return $this;
    }

    public function removeBorrow(Borrow $borrow): self
    {
        if ($this->borrow->removeElement($borrow)) {
            // set the owning side to null (unless already changed)
            if ($borrow->getEquipment() === $this) {
                $borrow->setEquipment(null);
            }
        }

        return $this;
    }
}
