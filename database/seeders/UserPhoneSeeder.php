<?php

namespace Database\Seeders;

use App\Models\PhoneUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PhoneUser::query()->create([
            'first_name' => 'El-Karece',
            'last_name' => 'Asiedu',
            'email' => 'karece@gmail.com',
            'phone_number' => 0201234567,
            'gender' => 'female',
        ]);

        PhoneUser::query()->create([
            'first_name' => 'Adwoa',
            'last_name' => 'Amoakoa',
            'email' => 'adwoa@gmail.com',
            'phone_number' => 02013456734,
            'gender' => 'female',
        ]);

    }
}
