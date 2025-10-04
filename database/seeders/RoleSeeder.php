<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            ['name' => 'admin', 'display_name' => 'Administrator'],
            ['name' => 'author', 'display_name' => 'Author'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
