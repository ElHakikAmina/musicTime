<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//

//use Illuminate\Database\Seeders\AdminSeeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin utilisateur
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('password'),
            'is_admin'=>true,
        ]);
        //test utilisateur
        User::create([
            'name'=>'test',
            'email'=>'test@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('password'),
            'is_admin'=>false,
        ]);
    }
}
