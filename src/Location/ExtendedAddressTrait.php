<?php

namespace Eelan\DoctrineTraits\Location;

use Doctrine\ORM\Mapping as ORM;

trait ExtendedAddressTrait
{
    use AddressTrait;

    //region Properties
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $region = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $country = null;
    //endregion

    //region Getters / Setters
    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    //endregion


}
