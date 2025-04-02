<?php

namespace Eelan\DoctrineTraits\Personal;

use Doctrine\ORM\Mapping as ORM;
use Eelan\DoctrineTraits\Personal\Enum\Gender;

trait GenderTrait
{
    //region Properties
    #[ORM\Column(nullable: true, enumType: Gender::class)]
    private ?Gender $gender = null;
    //endregion

    //region Getters / Setters
    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(?Gender $gender): self
    {
        $this->gender = $gender;
        return $this;
    }
    //endregion
}
