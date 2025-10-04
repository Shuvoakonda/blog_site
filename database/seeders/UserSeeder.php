<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $roles = Role::pluck('id', 'name');
        for ($i = 1; $i <= 10; $i++) {
            $roleName = fake()->randomElement(['admin', 'author']);
            User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'avatar' => 'https://i.pravatar.cc/150?img=' . rand(1, 70),
                'phone' => fake()->phoneNumber(),
                'address' => fake()->address(),
                'city' => fake()->city(),
                'state' => fake()->state(),
                'zip' => fake()->postcode(),
                'country' => fake()->country(),
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                // Add role_id if you have a role_id column, or use a pivot table if many-to-many
                'role_id' => $roles[$roleName] ?? null,
            ]);
        }
    }
}
