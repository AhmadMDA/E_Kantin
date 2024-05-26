<?php

// database/seeders/CustomerSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_customer')->insert([
            ['id' => 1, 'user_id' => 1, 'namaCustomer' => 'Customer 1', 'nomorTelepon' => '081234567890', 'alamat' => 'Alamat 1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'user_id' => 2, 'namaCustomer' => 'Customer 2', 'nomorTelepon' => '081234567891', 'alamat' => 'Alamat 2', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
