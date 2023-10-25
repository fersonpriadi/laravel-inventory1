<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class stok_barang_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stok_barang')->insert([
            [
                'kode'              => 'TGO-KLG',
                'stok_masuk'        => 10,
                'stok_keluar'       => 0,
                'stok_sisa'         => 10,
                'stok_minimal'      => 5,
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
            ],
            [
                'kode'              => 'TGO-SAC',
                'stok_masuk'        => 27,
                'stok_keluar'       => 0,
                'stok_sisa'         => 27,
                'stok_minimal'      => 20,
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
            ],
            [
                'kode'              => 'IDM-DUS',
                'stok_masuk'        => 40,
                'stok_keluar'       => 0,
                'stok_sisa'         => 40,
                'stok_minimal'      => 10,
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
            ],
        ]);
    }
}
