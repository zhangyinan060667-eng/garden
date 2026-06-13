<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\admin_login;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin_login::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => 'password',
            ]
        );
    }
}
