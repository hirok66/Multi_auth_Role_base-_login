<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enum\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UeserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456'),
            'role' => UserRole::ADMIN,
        ]);
        User::create([
            'name' => 'Editor User',
            'email' => 'editor@example.com',
            'password' => bcrypt('123456'),
            'role' => UserRole::EDITOR,
        ]);
        User::create([
            'name' => 'moderator User',
            'email' => 'moderator@example.com',
            'password' => bcrypt('123456'),
            'role' => UserRole::MODERATOR,
        ]);
        User::create([
            'name' => 'guest User',
            'email' => 'guest@example.com',
            'password' => bcrypt('123456'),
            'role' => UserRole::GUEST,
        ]);
        User::create([
            'name' => 'customer User',
            'email' => 'customer@example.com',
            'password' => bcrypt('123456'),
            'role' => UserRole::CUSTOMER,
        ]);
        User::create([
            'name' => 'rider User',
            'email' => 'rider@example.com',
            'password' => bcrypt('123456'),
            'role' => UserRole::RIDER,
        ]);
        User::create([
            'name' => 'diller User',
            'email' => 'diller@example.com',
            'password' => bcrypt('123456'),
            'role' => UserRole::DILLER,
        ]);
        User::create([
            'name' => 'dealer User',
            'email' => 'dealer@example.com',
            'password' => bcrypt('123456'),
            'role' => UserRole::DEALER,
        ]);
        User::create([
            'name' => 'seller User',
            'email' => 'seller@example.com',
            'password' => bcrypt('123456'),
            'role' => UserRole::SELLER,
        ]);
        User::create([
            'name' => 'subdealer User',
            'email' => 'subdealer@example.com',
            'password' => bcrypt('123456'),
            'role' => UserRole::SUBDEALER,
        ]);
    }
}
