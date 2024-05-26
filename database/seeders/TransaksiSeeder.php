<?php

// database/seeders/TransaksiSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_transaksi')->insert([
            ['id' => 1, 'customer_id' => 1, 'menu_id' => 1, 'tanggalTransaksi' => '2023-01-01 12:00:00', 'totalQty' => 2, 'totalHarga' => 30000.00, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'customer_id' => 2, 'menu_id' => 2, 'tanggalTransaksi' => '2023-01-02 13:00:00', 'totalQty' => 1, 'totalHarga' => 12000.00, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}

