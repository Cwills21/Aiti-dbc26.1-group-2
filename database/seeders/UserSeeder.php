<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'user_type' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$W0/wfQvK9DKk9aEgOF8hdOBdIQzvPs7fZAbSOT6.Y5LYdeEacyP.q',
        ]);
    }
}
