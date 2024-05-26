<?php

// database/seeders/MenuSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_menu')->insert([
            ['id' => 1, 'namaMenu' => 'Nasi Goreng', 'hargaMenu' => 15000.00, 'gambarMenu' => 'nasi_goreng.jpg', 'deskripsiMenu' => 'Nasi goreng dengan ayam dan sayuran', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'namaMenu' => 'Mie Goreng', 'hargaMenu' => 12000.00, 'gambarMenu' => 'mie_goreng.jpg', 'deskripsiMenu' => 'Mie goreng dengan telur dan sayuran', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
