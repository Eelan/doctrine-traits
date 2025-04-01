<?php

namespace Eelan\DoctrineTraits\Trait;

use Doctrine\ORM\Mapping as ORM;

trait GenderTrait
{
    #[ORM\Column(length: 10, nullable: true)]
    private ?string $gender = null;

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }
}
