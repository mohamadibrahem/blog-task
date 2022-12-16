<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'username'       => 'admin',
                'password'       => bcrypt('admin'),
                'remember_token' => null,
            ],
        ];
        //User::factory()->count(1000)->create();
        User::insert($users);
    }
}
