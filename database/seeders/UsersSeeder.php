<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                'id' => uniqid(),
                'username' => 'admin',
                'email' => 'admin@mobilku.com',
                'password' => bcrypt('admin512'),
                'no_telp' => '081234567890',
                'role' => 'admin',
            ]
        );
    }
}
