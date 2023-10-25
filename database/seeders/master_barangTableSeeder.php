<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class master_barangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_barang')->insert([
            [
                'kode'              => 'TGO-KLG',
                'nama'              => 'Tango Kaleng',
                'deskripsi'         => 'Wafer tango kemasan kaleng coklat',
                'id_kategory'       => null,
                'id_gudang'         => null,
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
            ],
            [
                'kode'              => 'TGO-SAC',
                'nama'              => 'Tango Sachet',
                'deskripsi'         => 'Wafer kemasan sachet cokelat',
                'id_kategory'       => null,
                'id_gudang'         => null,
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
            ],
            [
                'kode'              => 'IDM-DUS',
                'nama'              => 'Indomie Dus',
                'deskripsi'         => 'indomie yang dijual dalam kemasan dus',
                'id_kategory'       => null,
                'id_gudang'         => null,
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
            ]
            
        ]);
    }
}
