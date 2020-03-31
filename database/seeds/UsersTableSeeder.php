<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$nPhubLyxN7x49X9TFUCO9O0RZsHpY.DxKt7l9E8zCQKROOAJl8Vp.',
                'remember_token' => null,
                'approved'       => 1,
            ],
        ];

        User::insert($users);

    }
}
