<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(master_barangTableSeeder::class);
        // $this->call(stok_barang_TableSeeder::class);
        // $this->call(master_kategoryTableSeeder::class);
        // $this->call(userTableSeeder::class);
        $this->call(rolesTableSeeder::class);
    }


}
