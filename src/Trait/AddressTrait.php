<?php

namespace Eelan\DoctrineTraits\Trait;

use Doctrine\ORM\Mapping as ORM;

trait AddressTrait
{
    //region Properties
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $streetName = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $streetNumber = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $postalCode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $region = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $country = null;
    //endregion

    //region Getters / Setters
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setStreetName(?string $streetName): self
    {
        $this->streetName = $streetName;
        return $this;
    }

    public function setStreetNumber(?string $streetNumber): self
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
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
