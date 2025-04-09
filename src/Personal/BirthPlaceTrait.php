<?php

namespace Eelan\DoctrineTraits\Personal;

use Doctrine\ORM\Mapping as ORM;

trait BirthPlaceTrait
{
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $birthPlace = null;

    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(?string $birthPlace): self
    {
        $this->birthPlace = $birthPlace;
        return $this;
    }
}