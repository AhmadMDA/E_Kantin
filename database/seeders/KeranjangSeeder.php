<?php

// database/seeders/KeranjangSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class KeranjangSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_keranjang')->insert([
            ['id' => 1, 'customer_id' => 1, 'menu_id' => 1, 'qty' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'customer_id' => 2, 'menu_id' => 2, 'qty' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}

