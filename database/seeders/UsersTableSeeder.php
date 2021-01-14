<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create(['name' => 'иван', 'email' => 'ivan@mail.ru!', 'password' => '']);
        User::create(['name' => 'Дмитрии', 'email' => 'demon@mail.ru!', 'password' => '']);
        User::create(['name' => 'Александр', 'email' => 'alex@mail.ru!', 'password' => '']);
    }
}
