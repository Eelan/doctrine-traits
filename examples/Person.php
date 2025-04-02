<?php

namespace Eelan\DoctrineTraits\Examples;

use Doctrine\ORM\Mapping as ORM;
use Eelan\DoctrineTraits\Common\IdTrait;
use Eelan\DoctrineTraits\Trait\AddressTrait;
use Eelan\DoctrineTraits\Trait\BirthTrait;
use Eelan\DoctrineTraits\Trait\EmailTrait;
use Eelan\DoctrineTraits\Trait\GenderTrait;
use Eelan\DoctrineTraits\Trait\NameTrait;
use Eelan\DoctrineTraits\Trait\PhoneTrait;
use Eelan\DoctrineTraits\Trait\SoftDeleteTrait;
use Eelan\DoctrineTraits\Trait\TimestampTrait;

#[ORM\Entity]
#[ORM\HasLifecycleCallbacks]
class Person
{
    use IdTrait;
    use AddressTrait;
    use TimestampTrait;
    use SoftDeleteTrait;
    use PhoneTrait;
    use EmailTrait;
    use NameTrait;
    use GenderTrait;
    use BirthTrait;
}
