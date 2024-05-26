<?php

// database/seeders/RatingReviewSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class RatingReviewSeeder extends Seeder
{
    public function run()
    {
        DB::table('m_rating_review')->insert([
            ['id' => 1, 'menu_id' => 1, 'customer_id' => 1, 'isiReview' => 'Nasi gorengnya enak!', 'rating' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['id' => 2, 'menu_id' => 2, 'customer_id' => 2, 'isiReview' => 'Mie gorengnya cukup baik.', 'rating' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}

