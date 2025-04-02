<?php

namespace Eelan\DoctrineTraits\Location;

use Doctrine\ORM\Mapping as ORM;

trait GpsCoordinateTrait
{
    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $latitude = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $longitude = null;

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getCoordinates(): ?array
    {
        return ($this->latitude !== null && $this->longitude !== null)
            ? [$this->latitude, $this->longitude]
            : null;
    }

    public function setCoordinates(?float $latitude, ?float $longitude): self
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        return $this;
    }
}
