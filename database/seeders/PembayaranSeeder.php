<?php

// database/seeders/PembayaranSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PembayaranSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_pembayaran')->insert([
            ['id' => 1, 'transaksi_id' => 1, 'gambarQRCode' => 'qrcode1.png', 'totalBayar' => 30000.00, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'transaksi_id' => 2, 'gambarQRCode' => 'qrcode2.png', 'totalBayar' => 12000.00, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
