<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\Traits\HasLabel;
use App\Enum\Traits\HasValue;

enum Sex: string
{
    use HasLabel;
    use HasValue;

    case MALE = 'Male';
    case FEMALE = 'Female';
}
