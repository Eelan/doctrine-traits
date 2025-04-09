<?php

namespace Eelan\DoctrineTraits\Personal;

use Doctrine\ORM\Mapping as ORM;

trait BirthTrait
{
    use BirthDateTrait;
    use BirthPlaceTrait;
}
