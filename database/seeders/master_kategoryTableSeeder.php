<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class master_kategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('master_kategory')->insert([
            [
                'kode'              => 'MKN-001',
                'jenis_barang'      => 'food',
                'kemasang_barang'    => 'DUS',
                'id_kategory'       => null,
                'id_gudang'         => null,
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],
            [
                'kode'              => 'MKN-002',
                'jenis_barang'      => 'non-food',
                'kemasang_barang'    => 'pack',
                'id_kategory'       => null,
                'id_gudang'         => null,
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],
            [
                'kode'              => 'MKN-003',
                'jenis_barang'      => 'food',
                'kemasang_barang'    => 'DUS',
                'id_kategory'       => null,
                'id_gudang'         => null,
                'dibuat_kapan'      => date('y-m-d H:i:s'),
                'dibuat_oleh'       => 1,
                'diperbarui_kapan'  => null,
                'diperbarui_oleh'   => null,
            ],
        ]);
    }
}
