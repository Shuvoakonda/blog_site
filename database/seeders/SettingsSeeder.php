<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    public function run()
    {
        DB::table('settings')->insert([
            [
                'key' => 'site_name',
                'value' => 'My Blog Site',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'site_email',
                'value' => 'admin@blogsite.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'site_logo',
                'value' => 'https://lorempixel.com/200/60/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'maintenance_mode',
                'value' => 'off',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
