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
        PhoneUser::table('phone_users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'phone_number' => 0201234567,
            'gender' => 'female',
        ]);

        PhoneUser::table('phone_users')->insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'phone_number' => 0201234567,
            'gender' => 'female',
        ]);
    }
}
