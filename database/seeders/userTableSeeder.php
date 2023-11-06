<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'              => 'Ferson Priadi Dachi',
                'email'             => 'ferson@gmail.com',
                'password'          => '$2y$10$a7dngVSF24Brta.mvUwniujlvaE5YOw66xBVsPOm.SOUNMBtXjHmy',
                'remember_token'    => 0,
                'dibuat_kapan'      => date('y-m-d H:i:s'),
            ],
        ]);
    }
}
