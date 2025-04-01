<?php

namespace Eelan\DoctrineTraits\Trait;

use Doctrine\ORM\Mapping as ORM;

trait EmailTrait
{
    //region Properties
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;
    //endregion

    //region Getters / Setters
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
    //endregion
}
