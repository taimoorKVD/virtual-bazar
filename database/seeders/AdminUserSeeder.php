<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@vb.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'is_admin' => true
            ],
            [
                'name' => 'Admin',
                'email' => 'user@vb.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'is_admin' => false
            ]
        ]);
    }
}
