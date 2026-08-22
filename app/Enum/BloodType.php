<?php

declare(strict_types=1);

namespace App\Enum;

use App\Enum\Traits\HasLabel;
use App\Enum\Traits\HasValue;

enum BloodType: string
{
    use HasLabel;
    use HasValue;

    case A_positive = 'A+';
    case A_NEGATIVE = 'A-';
    case B_POSITIVE = 'B+';
    case B_NEGATIVE = 'B-';
    case AB_POSITIVE = 'AB+';
    case AB_NEGATIVE = 'AB-';
    case O_POSITIVE = 'O+';
    case O_NEGATIVE = 'O-';

}
