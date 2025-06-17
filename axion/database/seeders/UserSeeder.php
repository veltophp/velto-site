<?php

use Velto\Axion\Models\User;

class UserSeeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        User::insert([
            'user_id' => uvid(8),
            'name' => 'admin',
            'email' => 'admin@veltophp.com',
            'password' => bcrypt('Lemarikaca01'),
            'role' => 'admin',
            'email_verified' => true,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}