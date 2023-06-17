<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PhoneUser extends Model
{
    use HasFactory,Notifiable;

    const MALE = 'male';

    const FEMALE = 'female';

    const GENDERS = [self::MALE, self::FEMALE, 'other'];
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'gender',
    ];
}
