<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

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
            'name' => 'Janrey Cablinda',
            'username' => 'admin',
            'email' => 'janreycablinda@gmail.com',
            'password' => Hash::make('admin0905'),
            'role_id' => 1
        ]);
    }
}
