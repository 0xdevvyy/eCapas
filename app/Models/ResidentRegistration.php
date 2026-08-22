<?php

declare(strict_types=1);

namespace App\Models;

use App\Enum\BloodType;
use App\Enum\CivilStatus;
use App\Enum\RegistrationStatus;
use App\Enum\Sex;
use App\Enum\Suffix;
use Database\Factories\ResidentRegistrationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentRegistration extends Model
{
    /** @use HasFactory<ResidentRegistrationFactory> */
    use HasFactory;

    protected $casts = [
        'suffix' => Suffix::class,
        'blood_type' => BloodType::class,
        'sex' => Sex::class,
        'civil_status' => CivilStatus::class,
        'status' => RegistrationStatus::class,
        'verified_at' => 'datetime',
    ];

    protected $attributes = [
        'civil_status' => CivilStatus::SINGLE,
        'status' => RegistrationStatus::PENDING,
    ];
}
