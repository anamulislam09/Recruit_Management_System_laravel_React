<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => "Anamul",
            'slug' => strtolower(str_replace(' ', '-','anamul')),
            'email' => "anamul@gmail.com",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'is_admin' => true,
            'image' => 'default.png',
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        \App\Models\User::factory(10)->create();
    }
}
