<?php

namespace Eelan\DoctrineTraits\Trait;

use Doctrine\ORM\Mapping as ORM;

trait SoftDeleteTrait
{
    //region Properties
    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $deletedAt = null;

    //endregion

    //region Getters / Setters

    public function getDeletedAt(): ?\DateTimeImmutable
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeImmutable $deletedAt): self
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }


    public function isDeleted(): bool
    {
        return $this->deletedAt !== null;
    }
    //endregion

    public function delete(): self
    {
        $this->deletedAt = new \DateTimeImmutable();
        return $this;
    }

    public function restore(): self
    {
        $this->deletedAt = null;
        return $this;
    }
}
