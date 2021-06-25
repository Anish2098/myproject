<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Administrator',
            'status' => 'Active',
            'email' => 'admin@example.com',
            'remember_token'=>'NbzNIguRHJEuzjERONFG7I9lJkEyOjeeKEcJLOlFGzNASrCWyaSCGLQP2gIy',
            'password' => Hash::make('Apple@123'),
        ]); 
    }
}
