<?php

namespace Eelan\DoctrineTraits\Personal\Enum;

enum Gender: string
{
    case MALE = 'male';
    case FEMALE = 'female';
    case OTHER = 'other';
    case UNKNOWN = 'unknown';
}
