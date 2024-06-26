<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Cong Doan',
            'email' => 'daocongdoan010502@gmail.com',
            'password' => bcrypt('123456'),
            'thumbnail' => '',
            'is_admin' => "1"
        ]);
    }
}
