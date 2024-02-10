<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin user
        User::updateOrCreate([
            'email' => 'admin@example.com',
        ], [
            'first_name' => 'Mghari',
            'last_name' => 'Chelhaoui',
            'email' => 'mghari@chelam.com',
            'password' => bcrypt('chelam2023'),
            'is_admin' => true,
        ]);

        // Non-admin user
        User::updateOrCreate([
            'email' => 'user@example.com',
        ], [
            'first_name' => 'Regular',
            'last_name' => 'User',
            'email' => 'caisse@chelam.com',
            'password' => bcrypt('caisse123'),
            'is_admin' => false,
        ]);
    }
}
