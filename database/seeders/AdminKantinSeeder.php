<?php

// database/seeders/AdminKantinSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AdminKantinSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_admin_kantin')->insert([
            ['id' => 1, 'user_id' => 3, 'namaAdminK' => 'Admin Kantin 1', 'nomorTelepon' => '081234567892', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
