<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone' => '123456789',
            'password' => bcrypt('123456789'),
            'usertype'=>'admin',
            'address'=>'cairo',

          
          ]);
            User::create([
            'name' => 'users',
            'email' => 'user@user.com',
            'phone' => '12345678',
            'password' => bcrypt('123456789'),
            'address'=>'cairo',
            'usertype'=>'user',

          ]);

    }
}
