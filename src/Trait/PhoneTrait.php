<?php

namespace Eelan\DoctrineTraits\Trait;

use Doctrine\ORM\Mapping as ORM;

trait PhoneTrait
{
    //region Properties
    #[ORM\Column(length: 20, nullable: true)]
    private ?string $phone = null;
    //endregion

    //region Getters / Setters
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }
    //endregion
}
