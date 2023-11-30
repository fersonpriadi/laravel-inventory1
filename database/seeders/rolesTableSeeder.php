<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'kode'              => 'ADM',
                'nama'              => 'Administrator',
                'deskripsi'         => 'administrator sistem memiliki kuasa penuh terhadap aplikasi',
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
            ],
            [
                'kode'              => 'STAFF',
                'nama'              => 'Karyawan',
                'deskripsi'         => 'Karyawan atau pegawai level staff',
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
            ],
        ]);
    }
}
